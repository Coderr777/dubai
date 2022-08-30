<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html>
  
<!-- Mirrored from html.waituk.com/entrada/megamenu.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:39 GMT -->
<head>
  
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Places Details</title>
    <!-- favion -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/logo1.png"
    />

    <!-- link to font awesome -->
    <link
      media="all"
      rel="stylesheet"
      href="vendors/font-awesome/css/font-awesome.css"
    />
    <!-- link to custom icomoon fonts -->
    <link
      rel="stylesheet"
      type="text/css"
      href="css/fonts/icomoon/icomoon.css"
    />
    <!-- link to wow js animation -->
    <link media="all" rel="stylesheet" href="vendors/animate/animate.css" />
    <!-- include bootstrap css -->
    <link media="all" rel="stylesheet" href="css/bootstrap.css" />
    <!-- include owl css -->
    <link
      media="all"
      rel="stylesheet"
      href="vendors/owl-carousel/owl.carousel.css"
    />
    <link
      media="all"
      rel="stylesheet"
      href="vendors/owl-carousel/owl.theme.css"
    />
    <!-- link to revolution css  -->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendors/revolution/css/settings.css"
    />
    <!-- include main css -->
    <link media="all" rel="stylesheet" href="css/main.css" />
    <style>
        body  {
  font-family: Verdana, sans-serif;
  
  letter-spacing: 0.1px;
}

h1 {
  font-family: Georgia, serif;
  font-size: 46px;  
}
        </style>

  </head>
  <body>
    <div class="preloader" id="pageLoad">
      <div class="holder">
        <div class="coffee_cup"></div>
      </div>
    </div>
    <!-- main wrapper -->
    <div id="wrapper">
      <div class="page-wrapper">
        <!-- main header -->
        <header id="header">
          <div class="container-fluid">
            <!-- logo -->
            <div class="logo">
              <a href="">
                <img class="normal" src="img/logos/logo4.png" alt="Entrada" />
                <img
                  class="gray-logo"
                  src="img/logos/logo5.jpg"
                  alt="Dubai Tourism"
                />
              </a>
            </div>
            <?php include 'nav.php' ?>
</header>
            <!-- main banner -->
        <div class="banner banner-home">
          <!-- revolution slider starts -->
          <div
            id="rev_slider_70_1_wrapper"
            class="rev_slider_wrapper fullwidthbanner-container"
            data-alias="web-product-light-hero66"
            style="
              margin: 0px auto;
              background-color: #474d4b;
              padding: 0px;
              margin-top: 0px;
              margin-bottom: 0px;
            "
          >
            <div
              id="rev_slider_70_1"
              class="rev_slider fullwidthabanner"
              style="display: none"
              data-version="5.0.7"
            >
              <ul>
                <li
                  class="slider-color-schema-dark"
                  data-index="rs-2"
                  data-transition="fade"
                  data-slotamount="7"
                  data-easein="default"
                  data-easeout="default"
                  data-masterspeed="1000"
                  data-rotate="0"
                  data-saveperformance="off"
                  data-title="Slide"
                  data-description=""
                >
                  <!-- main image for revolution slider -->
                  <img
                    src="img/banner/img-01.jpg"
                    alt="image description"
                    data-bgposition="center bottom"
                    data-kenburns="on"
                    data-duration="30000"
                    data-ease="Linear.easeNone"
                    data-scalestart="100"
                    data-scaleend="120"
                    data-rotatestart="0"
                    data-rotateend="0"
                    data-offsetstart="0 0"
                    data-offsetend="0 0"
                    data-bgparallax="10"
                    class="rev-slidebg"
                    data-no-retina
                  />

                  <div
                    class="tp-caption tp-resizeme"
                    id="slide-897-layer-7"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['160','120','-120','-70']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="opacity:0;s:300;s:300;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 9;
                      white-space: nowrap;
                      font-size: 60px;
                      line-height: 100px;
                      text-align: center;
                    "
                  >
                    <span class="icon-wildlife"></span>
                  </div>

                  <div
                    class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['280','240','10','20']"
                    data-fontsize="['48','48','44','28']"
                    data-lineheight="['85','85','50','50']"
                    data-width="['1200','1000','750','480']"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:0px;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 7;
                      letter-spacing: 0;
                      font-weight: 100;
                      text-align: center;
                      color: #ffffff;
                    "
                  >
                    EXPEDITION OF UNEXPLORED
                  </div>

                  <div
                    class="tp-caption tp-resizeme rs-parallaxlevel-10"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['330','280','60','60']"
                    data-fontsize="['60','60','60','40']"
                    data-lineheight="['110','110','100','60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 8;
                      padding-right: 10px;
                      text-indent: 5px;
                      font-weight: 900;
                      white-space: nowrap;
                      color: #b0a377;
                    "
                  >
                    TERRITORY
                  </div>

                  <div
                    class="tp-caption rev-btn rs-parallaxlevel-10"
                    id="slide-163-layer-2"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['150','160','180','150']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(107, 105, 87, 1.00);bg:rgba(107, 105, 87, 1.00);"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1250"
                    data-splitin="none"
                    data-splitout="none"
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                    data-responsive_offset="on"
                    style="
                      z-index: 8;
                      white-space: nowrap;
                      font-size: 18px;
                      line-height: 24px;
                      font-weight: 700;
                      color: #b0a377;
                      background-color: transparent;
                      padding: 11px 70px;
                      border-color: #6b6957;
                      border-style: solid;
                      border-width: 2px;
                      border-radius: 25px;
                      text-transform: uppercase;
                      letter-spacing: 1px;
                    "
                  >
                    FIND TOURS
                  </div>
                </li>

                <li
                  data-index="rs-81"
                  data-transition="slideoverup"
                  data-slotamount="7"
                  data-easein="default"
                  data-easeout="default"
                  data-masterspeed="1000"
                  data-rotate="0"
                  data-saveperformance="off"
                  data-title="The Menu"
                  data-description=""
                >
                  <!-- main image for revolution slide -->
                  <img
                    alt="image description"
                    src="img/banner/img-02.jpg"
                    data-lazyload="img/banner/img-02.jpg"
                    data-bgposition="right center"
                    data-kenburns="on"
                    data-duration="30000"
                    data-ease="Power1.easeOut"
                    data-scalestart="110"
                    data-scaleend="100"
                    data-rotatestart="0"
                    data-rotateend="0"
                    data-offsetstart="0 0"
                    data-offsetend="0 0"
                    class="rev-slidebg"
                    data-no-retina
                  />

                  <div
                    class="tp-caption tp-resizeme"
                    id="slide-897-layer1-7"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['160','120','-120','-70']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="opacity:0;s:300;s:300;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 9;
                      white-space: nowrap;
                      font-size: 60px;
                      line-height: 100px;
                      text-align: center;
                    "
                  >
                    <span class="icon-hiking-camping"></span>
                  </div>

                  <div
                    class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['280','240','10','20']"
                    data-fontsize="['48','48','44','28']"
                    data-lineheight="['85','85','50','50']"
                    data-width="['1200','1000','750','480']"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:0px;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 7;
                      letter-spacing: 0;
                      font-weight: 100;
                      text-align: center;
                      color: #ffffff;
                    "
                  >
                    EXPEDITION OF UNEXPLORED
                  </div>

                  <div
                    class="tp-caption tp-resizeme rs-parallaxlevel-10"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['330','280','60','60']"
                    data-fontsize="['60','60','60','40']"
                    data-lineheight="['110','110','100','60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 8;
                      padding-right: 10px;
                      text-indent: 5px;
                      font-weight: 900;
                      white-space: nowrap;
                      color: #b0a377;
                    "
                  >
                    TERRITORY
                  </div>

                  <div
                    class="tp-caption rev-btn rs-parallaxlevel-10"
                    id="slide-163-layer1-2"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['150','160','180','150']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(107, 105, 87, 1.00);bg:rgba(107, 105, 87, 1.00);"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1250"
                    data-splitin="none"
                    data-splitout="none"
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                    data-responsive_offset="on"
                    style="
                      z-index: 8;
                      white-space: nowrap;
                      font-size: 18px;
                      line-height: 24px;
                      font-weight: 700;
                      color: #b0a377;
                      background-color: transparent;
                      padding: 11px 70px;
                      border-color: #6b6957;
                      border-style: solid;
                      border-width: 2px;
                      border-radius: 25px;
                      text-transform: uppercase;
                      letter-spacing: 1px;
                    "
                  >
                    FIND TOURS
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <br>
          <?php
          $pid=$_GET["id"];
    $selpla="select * from places where place_id=$pid";
    $respla=mysqli_query($con,$selpla);
    $n=mysqli_num_rows($respla);
    
    $row=mysqli_fetch_row($respla);
    echo '<h1><center>'.$row[1].'</center> </h1>';
    echo '<p>'.$row[6].'<p>';
    echo'&nbsp; &nbsp;<img
    src="places_img/'. $row[3] .'"
    height="400"
    width="650"
    alt="image description"
  /> &nbsp; <img
  src="places_img/'. $row[4] .'"
  height="400"
  width="650"
  alt="image description"
/>';
    ?>
          <br>
          <br>
      <!-- main footer -->
      <footer id="footer">
        <div class="container">
          <!-- newsletter form -->
          <form
            action="https://html.waituk.com/entrada/php/subscribe.html"
            id="signup"
            method="post"
            class="newsletter-form"
          >
            <fieldset>
              <div class="input-holder">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Email Address"
                  name="subscriber_email"
                  id="subscriber_email"
                />
                <input type="submit" value="GO" />
              </div>
              <span class="info" id="subscribe_message"
                >To receive news, updates and tour packages via email.</span
              >
            </fieldset>
          </form>
          <!-- footer links -->
          <div class="row footer-holder">
            <nav class="col-sm-4 col-lg-2 footer-nav active">
              <h3>About Entrada</h3>
              <ul class="slide">
                <li><a href="#">The Company</a></li>
                <li><a href="#">Our Values</a></li>
                <li><a href="#">Responsiblity</a></li>
                <li><a href="#">Our Mission</a></li>
                <li><a href="#">Opportunity</a></li>
                <li><a href="#">Safety Concerns</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-2 footer-nav">
              <h3>Destinations</h3>
              <ul class="slide">
                <li><a href="#">Nepal</a></li>
                <li><a href="#">Thailand</a></li>
                <li><a href="#">Vietnam</a></li>
                <li><a href="#">Fiji Island</a></li>
                <li><a href="#">United States</a></li>
                <li><a href="#">Australia</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-2 footer-nav">
              <h3>themes</h3>
              <ul class="slide">
                <li><a href="#">Hiking and Camping</a></li>
                <li><a href="#">Trekking Tours</a></li>
                <li><a href="#">Jungle Safaris</a></li>
                <li><a href="#">Bungee Jumping</a></li>
                <li><a href="#">Wildlife &amp; Polar</a></li>
                <li><a href="#">Peak Climbing</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-2 footer-nav">
              <h3>reservation</h3>
              <ul class="slide">
                <li><a href="#">Booking Conditions</a></li>
                <li><a href="#">My Bookings</a></li>
                <li><a href="#">Refund Policy</a></li>
                <li><a href="#">Includes &amp; Excludes</a></li>
                <li><a href="#">Your Responsibilities</a></li>
                <li><a href="#">Order a Brochure</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-2 footer-nav">
              <h3>ask Entrada</h3>
              <ul class="slide">
                <li><a href="#">Why Entrada?</a></li>
                <li><a href="#">Ask an Expert</a></li>
                <li><a href="#">Safety Updates</a></li>
                <li><a href="#">We Help When...</a></li>
                <li><a href="#">Personal Matters</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-2 footer-nav last">
              <h3>contact Entrada</h3>
              <ul class="slide address-block">
                <li class="wrap-text">
                  <span class="icon-tel"></span>
                  <a href="tel:02072077878">(020) 72077878</a>
                </li>
                <li class="wrap-text">
                  <span class="icon-fax"></span>
                  <a href="tel:02088828282">(020) 88828282</a>
                </li>
                <li class="wrap-text">
                  <span class="icon-email"></span>
                  <a href="mailto:info@entrada.com">info@entrada.com</a>
                </li>
                <li>
                  <span class="icon-home"></span>
                  <address>707 London Road Isleworth, Middx TW7 7QD</address>
                </li>
              </ul>
            </nav>
          </div>
          <!-- social wrap -->
          <ul class="social-wrap">
            <li class="facebook">
              <a href="#">
                <span class="icon-facebook"></span>
                <strong class="txt">Like Us</strong>
              </a>
            </li>
            <li class="twitter">
              <a href="#">
                <span class="icon-twitter"></span>
                <strong class="txt">Follow On</strong>
              </a>
            </li>
            <li class="google-plus">
              <a href="#">
                <span class="icon-google-plus"></span>
                <strong class="txt">+1 On Google</strong>
              </a>
            </li>
            <li class="vimeo">
              <a href="#">
                <span class="icon-vimeo"></span>
                <strong class="txt">Share At</strong>
              </a>
            </li>
            <li class="pin">
              <a href="#">
                <span class="icon-pin"></span>
                <strong class="txt">Pin It</strong>
              </a>
            </li>
            <li class="dribble">
              <a href="#">
                <span class="icon-dribble"></span>
                <strong class="txt">Dribbble</strong>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <!-- copyright -->
                <strong class="copyright"
                  ><i class="fa fa-copyright"></i> Copyright 2016 - Entrada - An
                  Adventure Theme - by <a href="#">Waituk</a></strong
                >
              </div>
              <div class="col-lg-6">
                <ul class="payment-option">
                  <li>
                    <img src="img/footer/visa.png" alt="visa" />
                  </li>
                  <li>
                    <img
                      src="img/footer/mastercard.png"
                      height="20"
                      width="33"
                      alt="master card"
                    />
                  </li>
                  <li>
                    <img
                      src="img/footer/paypal.png"
                      height="20"
                      width="72"
                      alt="paypal"
                    />
                  </li>
                  <li>
                    <img
                      src="img/footer/maestro.png"
                      height="20"
                      width="33"
                      alt="maestro"
                    />
                  </li>
                  <li>
                    <img
                      src="img/footer/bank-transfer.png"
                      height="20"
                      width="55"
                      alt="bank transfer"
                    />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- scroll to top -->
    <div class="scroll-holder text-center">
      <a href="javascript:" id="scroll-to-top"
        ><i class="icon-arrow-down"></i
      ></a>
    </div>
    <!-- jquery library -->
    <script src="vendors/jquery/jquery-2.1.4.min.js"></script>
    <!-- external scripts -->
    <script src="vendors/bootstrap/javascripts/bootstrap.min.js"></script>
    <script src="vendors/jquery-placeholder/jquery.placeholder.min.js"></script>
    <script src="vendors/match-height/jquery.matchHeight.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/stellar/jquery.stellar.min.js"></script>
    <script src="vendors/validate/jquery.validate.js"></script>
    <script src="vendors/waypoint/waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="vendors/fancybox/jquery.fancybox.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jcf/js/jcf.js"></script>
    <script src="vendors/jcf/js/jcf.select.js"></script>
    <script src="js/mailchimp.js"></script>
    <script src="vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
    <!-- <script src="./vendors/bootstrap-tabcollapse/bootstrap-tabcollapse.js"></script> -->
    <!-- custom jquery script -->
    <script src="js/jquery.main.js"></script>
    <!-- revolution slider plugin -->
    <script
      type="text/javascript"
      src="vendors/revolution/js/jquery.themepunch.tools.min.js"
    ></script>
    <script
      type="text/javascript"
      src="vendors/revolution/js/jquery.themepunch.revolution.min.js"
    ></script>
    <!-- rs5.0 core files -->
    <script
      type="text/javascript"
      src="vendors/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"
    ></script>
    <script
      type="text/javascript"
      src="vendors/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"
    ></script>
    <script
      type="text/javascript"
      src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"
    ></script>
    <script
      type="text/javascript"
      src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"
    ></script>
    <script
      type="text/javascript"
      src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"
    ></script>
    <script
      type="text/javascript"
      src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"
    ></script>
    <script
      type="text/javascript"
      src="vendors/revolution/js/extensions/revolution.extension.video.min.js"
    ></script>
    <script
      type="text/javascript"
      src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"
    ></script>
    <script
      type="text/javascript"
      src="vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"
    ></script>
    <!-- revolutions slider script -->
    <script src="js/revolution.js"></script>

</body>
</html>