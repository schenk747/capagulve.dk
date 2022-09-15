<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Contport Consult</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.inview.js"></script>
  <script src="js/script.js"></script>
  <script src="contactform/contactform.js"></script>

<!-- CHRISTOPHER CHANGES -->
<style>
@import url(https://fonts.googleapis.com/css?family=Oswald);
@import url(https://fonts.googleapis.com/css?family=Quattrocento);
.snip1360 {
  /* font-family: 'Quattrocento', Arial, sans-serif; */
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 230px;
  max-width: 315px;
  width: 100%;
  color: #141414;
  text-align: left;
  line-height: 1.4em;
  font-size: 16px;
  background-color: #ffffff;
  border: solid 5px rgb(225,235,238);
  /* height: 554px; */

  margin: 0 auto 0.55em;
  display:block;
}
.snip1360 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.snip1360 img {
  max-width: 100%;
  vertical-align: top;
}
.snip1360 figcaption {
  width: 100%;
  background-color: #ffffff;
  padding: 10px 25px 55px;
  position: relative;
}
.snip1360 figcaption:before {
  position: absolute;
  content: '';
  z-index: 2;
  bottom: 100%;
  left: 0;
  width: 100%;
  height: 80px;
  background-image: -webkit-linear-gradient(top, transparent 0%, #ffffff 100%);
  background-image: linear-gradient(to bottom, transparent 0%, #ffffff 100%);
}
.snip1360 figcaption a {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 10px;
  background-color: #cccccc;
  color: #000000;
  font-size: 0.8em;
  text-transform: uppercase;
  opacity: 0.65;
  width: 100%;
  text-align: center;
  text-decoration: none;
  letter-spacing: 1px;
}
.snip1360 figcaption a:hover {
  opacity: 1;
}
.snip1360 h2 {
  margin: 0 0 10px;
  font-weight: 300;
  font-size: 1.5em;
  line-height: 1.2em;
  font-family: 'Oswald', Arial, sans-serif;
  text-transform: uppercase;
}
.snip1360 p {
  margin: 0 0 10px;
  font-size: 0.9em;
  letter-spacing: 1px;
  opacity: 0.9;
}

.services-column .row {
    display: flex;
    flex-wrap: wrap;
    display: -ms-flexbox;
}
</style>
<!-- CHRISTOPHER CHANGES END-->

<script>
/* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
</script>

  <!-- =======================================================
    Theme Name: MyBiz
    Theme URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<body id="top" data-spy="scroll">
  <!--top header-->
  <header id="home">
    <section class="top-nav hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="top-left">
                <span class="header-phone"><i class="fas fa-phone"></i> +45 51 51 06 03</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="top-right">
              <span class="header-email"><i class="fas fa-envelope"></i> nvallo@mail.dk</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--main-nav-->
    <div id="main-nav">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-header">
            <a href="#home" class="navbar-brand">ContPort Consult</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
              <span class="sr-only">Toggle</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse" id="ftheme">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#home">home</a></li>
              <li><a class="link-to-about" href="#">about</a></li>
              <li><a class="link-to-services" href="#">services</a></li>
              <li><a class="link-to-contact" href="#">contact</a></li>
            </ul>
          </div>
          <div class="search-form">
            <form>
              <input type="text" id="s" size="40" placeholder="Search..." />
            </form>
          </div>

        </div>
      </nav>
    </div>
  </header>
  <!--slider-->
  <div id="slider" class="flexslider">
    <ul class="slides">
      <li>
        <img src="images/slider/IMG_2237.JPG">
        <div class="caption" id="hero-header-container">
            <?php
                $content = file_get_contents("content/content.txt");
                $content_json = json_decode($content, true);
            ?>
          <h2><span class="hero-header">WELCOME TO CONTPORT CONSULT</span></h2>
          <p class="hero-subtext"><?php echo $content_json["header-subtext"]; ?><!--25 years of experience in the global port industry--></p>
          <button class="btn link-to-about">Read More</button>
        </div>
      </li>
    </ul>
  </div>
  <!--about-->
  <span id="about-link"></span>
  <div id="about">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <div class="about-heading">
            <h2>about</h2>
            <p>ContPort Consult provides solutions for optimal port operation within container handling, bulk cargoes and Ro-Ro operations.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <figure class="snip1360">
                  <img src="images/about/Vallo_4_resized_cropped.jpg" alt="sample88" />
                  <figcaption>
                    <h2>Capacity</h2>
                    <p>Niels Vallø is managing the company and has established close cooperation with leading persons within the container and port industry, allowing for solid solutions to all challenges.</p>
                  </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-4">
                <figure class="snip1360 hover"><img src="images/about/_MG_7276_scaled_resized.jpg" alt="sample86" />
                  <figcaption>
                    <h2>Get a better operation</h2>
                    <p>Improvements to port operation, how to lift the bottom line and at the same time attract new customers has been key focus for years.

How to optimize berth length – water dept and right handling equipment for the port to grow and meet the requirements of the future

Size of vessels is part of our knowledge base.</p>
                  </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-4">
                <figure class="snip1360"><img src="images/about/2017-11-03 10.45.29_scaled_resized.jpg" alt="sample43" />
                  <figcaption>
                    <h2>Improve efficiency</h2>
                    <p>Handling unitized cargo is also today vital for most ports, and we have years of experience in setting up the right operation to

Be profitable and meet the requirements of the customers – the shipping companies and cargo owners.</p>
                  </figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>
  <!--service-->
  <span id="services-link-element"></span>
  <div id="service" style="background-color: #F8F8F8; padding-top: 50px;">
    <div class="container services-link-element">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <div class="service-heading">
            <h2>Services</h2>
            <p>Benefit from years of experience in port management and best transport infrastructure to relevant commodities.</p>
          </div>
        </div>
      </div>
    </div>
    <!--services wrapper-->
    <section class="services-style-one">
      <div class="outer-box clearfix">
        <div class="services-column">
          <div class="content-outer">
            <div class="row clearfix">
              <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                  <div class="icon-box"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                  <h4>FINANCIAL PLANNING</h4>
                  <div class="text">ContPort Consult provides investment proposals for port owners/operators or institutional investors, with
clear recommendations to specific actions/improvements including green field projects. Complex investments
in operation/equipment and infrastructure is presented in an understandable and clear way for investors to
consider.
                  </div>
                </div>
              </div>
              <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                  <div class="icon-box"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
                  <h4>BUSINESS PLANNING</h4>
                  <div class="text">The competences of ContPort Consult include preparing cost efficient proposals for the port and terminal
operation. Potential business require investments in equipment/port area and often guidance on how to set
up the right labor structure. Selection of right IT system to support the operation is often paramount to being
successful and we guide in the process.
                  </div>
                </div>
              </div>
              <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                  <div class="icon-box"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                  <h4>WORK &amp; OPTIMIZATION</h4>
                  <div class="text">Handling of windmills as well as other project cargo require skill and right equipment. We have solid
experience in handling not only project cargo but bulk-containers and reefer cargoes. Each commodity
require its own operation and we can assist you optimizing the handling operation.
                  </div>
                </div>
              </div>
              <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                  <div class="icon-box"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
                  <h4>ADVISORY WORK</h4>
                  <div class="text">Should your port and Board see a need for advisory work over a longer period of time, we are able to set
resourses aside that meet most requirements in the port and logistics business including rail operation.
                  </div>
                </div>
              </div>
              <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                  <div class="icon-box"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></div>
                  <h4>PLANNING FOR THE FUTURE</h4>
                  <div class="text">As a port how do we approach cold ironing – should we invest in a new berth/crane, what is payback time –
what buildings should we tear down to create more operating space – do we have the right organization to
build a strong port for the future --- all these and many more challenges are we ready to guide about to find
the right reply to your port.
                  </div>
                </div>
              </div>
              <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                  <div class="icon-box"><i class="fa fa-money" aria-hidden="true"></i></div>
                  <h4>SAVING AND INVESTING</h4>
                  <div class="text">Good investments result in savings, and without investments in people – IT – berth capacity and right
equipment, your port will not be among the winning ports in the years to come. We are ready to assist you in
finding the right way forward for a successful and profitable growth.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Content Column-->
        <div class="content-column clearfix">
          <div class="row clearfix">
            <div class="inner-box">
              <!--Section Title-->
              <div class="sec-title aligned-right">
                <h2>Our Servi<span>ces</span></h2>
              </div>
              <div class="text">
                  <!--Lorem Ipsum is simply dummy text printing and typesetting industry. Lorem Ipsum has
                  been industry's standard dummy text ever since 1500s, when an unknown printer specimen book. -->
                  <ul>
                      <li>Trim your organization to fit your future business</li>
                      <li>Ensure your port is ready for future vessel sizes</li>
                      <li>Improve your daily operation</li>
                      <li>Optimize your yard layout</li>
                      <li>Select the right IT system</li>
                  </ul>
              </div>
              <figure class="snip1559" style="background-color: rgb(242, 243, 244);">
                <div class="profile-image"><img src="images/about/Vallo_4_resized_cropped.jpg" alt="profile-sample2" /></div>
                <figcaption>
                  <h3>Niels Vallø</h3>
                  <h5>Manager</h5>
                  <br>
                  <!--<p>View hos extensive CV on Linked</p>-->
                  <a href="https://www.linkedin.com/in/niels-vallø-18105810/" style="color: #8e8e8e;">
                      <i style="font-size:100px" class="fa">&#xf08c;</i>
                  </a>
                  <!--
                  <div class="icons"><a href="#"><i class="ion-social-reddit"></i></a>
                    <a href="#"> <i class="ion-social-twitter"></i></a>
                    <a href="#"> <i class="ion-social-vimeo"></i></a>
                  </div>
                    -->
                </figcaption>
              </figure>
              <!-- <button class="btn">learn more</button> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--service gapping-->
    <?php
        function readNewsFile()
        {
            $newsFromFile = file_get_contents('news-json.txt');
            $newsArray = json_decode($newsFromFile);

            return $newsArray;
        }
        $newsArray = readNewsFile();
    ?>
    <div class="service-footer hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="service-footer-left">
              <h3>Need to <span>Consult with us</span> ? Contact us now</h3>
              <p>We are looking forward to hearing from you and to help you reach your potential</p>
            </div>
          </div>
          <div class="col-md-5">
              <?php
                  if (count($newsArray) > 0)
                  {
              ?>
                      <div class="service-footer-right">
                        <button class="btn link-to-contact">Contact us</button>
                      </div>
              <?php
                  }
               ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--portfolio-->
  <!--footer-->
  <?php
      if (count($newsArray) > 0)
      {
  ?>
          <div id="footer" class="footer-new">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="footer-heading footer-heading-new">
                    <h3><span>news</span></h3>
                    <!--<ul>-->
                      <?php
                          function createUnorderedListFromArray($arr)
                          {
                              if( count($arr > 0) )
                              {
                                  echo '<ul>';
                                  foreach($arr as $item){
                                   echo '<li>'.$item.'</li>';
                                  }
                                  echo '</ul>';
                              }
                          }
                          createUnorderedListFromArray($newsArray);
                      ?>
                      <!--<li>Growth is back in the port sector.</li>
                      <li>The global growth in container volumes now stands at 3.5 % for 2018, and sends a clear
        signal that the market is robust despite tariff discussions between China and USA.</li>
                      <li>Capacity shortage will continue in many ports and terminals globally.</li>
                  </ul>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
  <?php
       }
   ?>
  <!--contact-->
  <div id="contact" class="contact-new">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <div class="contact-heading">
            <h2>contact</h2>
            <p class="new-contact-p">
                <span class="bold">Niels Vallø</span><br>
                Jeppe Aakjærs vej 5 <br>
                3460 Birkerød <br>
                Denmark
            </p>
            <p class="new-contact-p">
                <span class="header-phone"><i class="fas fa-phone"></i> +45 51 51 06 03</span>
                <br>
                <span class="header-email"><i class="fas fa-envelope"></i> nvallo@mail.dk</span>
                <br>
                <a href="https://www.linkedin.com/in/niels-vallø-18105810/" style="color: #8e8e8e;">
                    <i style="font-size:24px" class="fa">&#xf08c;</i>
                </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--client-->
  <!--
  <div id="client">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-2">
          <span></span><img src="images/client/client1.png" alt="">
        </div>
        <div class="col-sm-4 col-md-2">
          <span></span><img src="images/client/client2.png" alt="">
        </div>
        <div class="col-sm-4 col-md-2">
          <span></span><img src="images/client/client3.png" alt="">
        </div>
        <div class="col-sm-4 col-md-2">
          <span></span><img src="images/client/client4.png" alt="">
        </div>
        <div class="col-sm-4 col-md-2">
          <span></span><img src="images/client/client5.png" alt="">
        </div>
        <div class="col-sm-4 col-md-2">
          <span></span><img src="images/client/client6.png" alt="">
        </div>
      </div>
    </div>
  </div>
  -->
  <!--bottom footer-->
  <div id="bottom-footer" class="hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="footer-left">
            &copy; 2019 Webframes<!--MyBix Theme-->. All rights reserved
            <div class="credits">
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="footer-right">
            <ul class="list-unstyled list-inline pull-right">
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services-link-element">Service</a></li>
              <!--<li><a href="#portfolo">Portfolio</a></li>-->
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <!-- LINKED BEGIN -->
  <script>
  /* Demo purposes only */
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
  </script>
  <!-- LINKED END -->
<!-- CHRISTOPHER CHANGES -->
  <script>
    function scrollTo(linkToElement, minusElement) {
        $('html, body').animate({
          scrollTop: $(linkToElement).offset().top - minusElement
      }, 1500);
    };

    $(".link-to-about").click( function() {
        scrollTo("#about-link", $("#main-nav").outerHeight())
    });
    $(".link-to-contact").click(function() {
        scrollTo("#contact", 0)
    });
    $(".link-to-services").click(function() {
        scrollTo("#service", $("#main-nav").outerHeight() + parseInt($("#service").css("paddingTop")))
    });
  </script>
<!-- CHRISTOPHER CHANGES END-->
</body>
</html>
