<?php
    //CHRIS: SERVICES section on small devices
    //["Growth is back in the port sector.","The global growth in container volumes now stands at 3.5 % for 2018, and sends a clear signal that the market is robust despite tariff discussions between China and USA.","Capacity shortage will continue in many ports and terminals globally.","Dude dude dude"]
    function shouldUserBeLoggedOut()
    {
        if(isset($_POST['logout'])) {
            session_start();
            unset($_SESSION["login"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
            header("LOCATION:admin-login.php");
        }
    }

    function isUserLoggedIn()
    {
        session_start();
        if(!isset($_SESSION['login'])) {
            header('LOCATION:admin-login.php'); die();
        }
    }
    function readNewsFile()
    {
        $newsFromFile = file_get_contents('news-json.txt');
        $newsArray = json_decode($newsFromFile);
        return $newsArray;
    }

    function trimArrayItems($arr)
    {
        $trimmedNewsArray = array_map(function($x) {return trim($x);}, $arr);
        return $trimmedNewsArray;
    }

    function removeLineBreaksFromArrayItems($arr)
    {
        $newsArrayWithoutLineBreaks = array_map(function($x) {return preg_replace('/(\r\n|\n|\r)/', '', $x);}, $arr);
        return $newsArrayWithoutLineBreaks;
    }

    function saveNewsToFile($newsArray)
    {
        $trimmedNewsArray = trimArrayItems($newsArray);
        $newsArrayWithoutLineBreaks = removeLineBreaksFromArrayItems($trimmedNewsArray);
        $jsonNewsArray = json_encode($newsArrayWithoutLineBreaks);
        file_put_contents('news-json.txt', $jsonNewsArray);
    }

    function addNewsItem()
    {
        $newsArray = readNewsFile();
        array_push($newsArray, "");
        saveNewsToFile($newsArray);
    }
    
    shouldUserBeLoggedOut();
    isUserLoggedIn();

    if(isset($_POST['save_news']))
    {
        $newsArrayFromForm = $_POST['textAreaItems'];
        saveNewsToFile($newsArrayFromForm);
    } elseif (isset($_POST['new_news'])) {
        addNewsItem();
    } elseif (isset($_POST['dude'])) {
        // CHRIS: move save array to another file, then redirect to this file :)
        $filteredArrayJson = $_POST['dude'];
        $filteredArray = json_decode($filteredArrayJson);
        saveNewsToFile($filteredArray);
        header('Location: '.$_SERVER['PHP_SELF']);
    }
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>News Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        .button {
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }

        .logout {
            background-color: black;
        }

        .save {
            background-color: #4CAF50; /* Green */
        }

        .new {
            background-color: #337ab7;
        }

        .delete {
            background-color: #d9534f;
            padding: 3px 6px;
        }

        .button-space {
            margin-left: 10px;
        }
        .news-label{
            text-align: left !important;
        }

        .logoutLblPos{
            position:fixed;
            right:200px;
            top:5px;
        }
    </style>
</head>

<body>
<div class="container text-center">
    <h1>Admin for News section</h1>
    <form action='' method='post' class='form-horizontal'>
        <label class="logoutLblPos">
            <input type='submit' name ='logout' value='Logout' class='button logout' >
        </label>
    </form>


    <?php
        function displayNews($newsArray)
        {
            $i = 0;
            echo "<form action='' method='post' class='form-horizontal'>";
            foreach ($newsArray as $newsItem) {
                echo "<div class='form-group'>";
                echo "<!--CHRIS: <label class='news-label'>News" . $i . "</label>--> <button type='button' name ='delete_news' value='" . $newsItem .
                    "' class='button delete delete-news-item' >Slet</button>";
                echo "<textarea name='textAreaItems[]' rows='4' cols='50' class='form-control'>";
                echo $newsItem;
                echo "</textarea>";
                echo "</div>";
                $i++;
            }
            echo "<input type='submit' name ='save_news' value='Gem' class='button save' >";
            echo "<span class='button-space'></span>";
            echo "<input type='submit' name ='new_news' value='Ny' class='button new' >";
            echo "</form>";
        }

        $newsArray = readNewsFile();
        displayNews($newsArray);
    ?>
</div>
</body>
<script>
    $('.delete-news-item').on('click', function() {
        var newsItemToDelete = $(this).attr("value");
        choice = window.confirm("Er du sikker på, at du vil slette denne nyhed: \n \n ".concat(newsItemToDelete));

        if(choice)
        {
            $.getJSON('news-json.txt', function(newsArray) {
                 filteredArray = newsArray.filter(function(e) {return e.replace(/(\r\n|\n|\r)/gm, "") != newsItemToDelete.replace(/(\r\n|\n|\r)/gm, "")})

                 $(document).data('filteredArray', filteredArray);

                 var newForm = jQuery('<form>', {
                     'action': 'admin-news.php',
                     'target': '_top',
                     'method': 'post'
                 }).append(jQuery('<input>', {
                     'name': 'dude',
                     'value': JSON.stringify($(document).data('filteredArray')),
                     'type': 'hidden'
                 }));
                 $(document.body).append(newForm);
                 newForm.submit();
            });
        }
    });
</script>
</html>
