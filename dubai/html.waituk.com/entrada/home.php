<?php require_once "controllerUserData.php"; 

require 'connection.php';?>
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
  
<!-- Mirrored from html.waituk.com/entrada/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:48:36 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dubai Tourism</title>
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
    <!-- link to material icon font -->
    <link
      media="all"
      rel="stylesheet"
      href="vendors/material-design-icons/material-icons.css"
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
    <!-- include main css -->
    <link media="all" rel="stylesheet" href="css/main.css" />
    <!-- link to revolution css  -->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendors/revolution/css/settings.css"
    />
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
        <header id="header" class="white-header">
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
              <?php
                include 'nav.php';
              ?>
        </header>
        <!-- main banner -->
        <div class="banner banner-home">
          <!-- revolution slider starts -->
          <div
            id="rev_slider_279_1_wrapper"
            class="rev_slider_wrapper fullscreen-container"
            data-alias="restaurant-header"
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
              class="rev_slider fullscreenabanner"
              style="display: none"
              data-version="5.1.4"
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
                    src="img/banner/img-46.jpg"
                    alt="image description"
                    data-bgposition="center center"
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
                    data-bgfit="cover"
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
                  Dubai will never settle for anything less than first place
                  </div>

                  <div
                    class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-10"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['340','290','70','70']"
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
                    "
                  >
                    
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
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1250"
                    data-splitin="none"
                    data-splitout="none"
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                    data-responsive_offset="on"
                  >
                   
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
                    src="img/banner/img-47.jpg"
                    data-lazyload="img/banner/img-48.jpg"
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
                   
                  </div>

                  <div
                    class="tp-caption tp-resizeme banner-heading-sub rs-parallaxlevel-10"
                    data-x="['center','center','center','center']"
                    data-hoffset="['-80','-80','-80','-60']"
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
                      font-weight: 300;
                      font-style: italic;
                      white-space: nowrap;
                      color: ;
                    "
                  >
                   
                  </div>

                  <div
                    class="tp-caption tp-resizeme banner-heading-sub rs-parallaxlevel-10"
                    data-x="['center','center','center','center']"
                    data-hoffset="['30','30','30','20']"
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
                    "
                  >
                   
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
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="800"
                    data-splitin="none"
                    data-splitout="none"
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                    data-responsive_offset="on"
                  >
                   
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="feature-block">
            <div class="holder">
              <ul>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-bungee"></span>
                    </span>
                    <span class="info">Bungee Jump</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-hiking"></span>
                    </span>
                    <span class="info">Hiking Trips</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-wildlife"></span>
                    </span>
                    <span class="info">Wildlife Safari</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-peak-climbing"></span>
                    </span>
                    <span class="info">Peak Climbing</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-mountain-biking"></span>
                    </span>
                    <span class="info">Mount Biking</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-scuba-diving"></span>
                    </span>
                    <span class="info">Scuba Diving</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-hunting"></span>
                    </span>
                    <span class="info">Hunting Trip</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-boating"></span>
                    </span>
                    <span class="info">Sailing Trips</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- main container -->
        <main id="main">
          <section class="content-block bg-white">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">SKY DUBAI</h2>
                <span class="main-subtitle"
                  >Mastering the art of perfect Tourism for 10+ years in the
                  world.</span
                >
                <div class="seperator"></div>
              </header>
              <div class="adventure-holder gallery-home-holder">
                <div class="row">
                    <!-- gallery list -->
                  
                  <div class="row">
                    <img src="img/ski dubai1.jpg" width="150%" height="200px">
                  </div>
                
                  </div>
                  <div class="col-md-6 text-block">
                    
                                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- article list holder -->
          <div class="content-block content-spacing">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">DESERT SAFARI</h2>
                  </article>
                    <div class="row">
                    <img src="img/desert2.jpg" width="150%" height="200px">
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- couter block -->
          <aside class="count-block">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-6 col-md-3 block-1">
                  <div class="holder">
                    <span class="icon icon-step"></span>
                    <span class="info"><span class="counter">8702</span></span>
                    <span class="txt">BUNGEE JUMPING</span>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3 block-2">
                  <div class="holder">
                    <span class="icon icon-fish-jumping"></span>
                    <span class="info"><span class="counter">378</span></span>
                    <span class="txt">ROLLER SKATE</span>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3 block-3">
                  <div class="holder">
                    <span class="icon icon-tree"></span>
                    <span class="info"><span class="counter">377</span></span>
                    <span class="txt">MEYDAN BRIDGE</span>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3 block-4">
                  <div class="holder">
                    <span class="icon icon-duration"></span>
                    <span class="info"><span class="counter">8973</span></span>
                    <span class="txt">ELITE YATCH</span>
                  </div>
                </div>
              </div>
            </div>
          </aside>
          <!-- featured adventure content -->
          <div class="featured-content adventure-holder">
            <div class="container-fluid">
              <div class="row same-height">
                <div class="col-md-6 image height">
                  <div class="bg-stretch">
                    <img
                      src="img/img-04.jpg"
                      height="627"
                      width="960"
                      alt="image description"
                    />
                  </div>
                </div>
                <div class="col-md-6 text-block height">
                  <div class="centered">
                    <h2 class="intro-heading">
                      Burj Al Arab - The world's most Luxourious Hotel
                    </h2>
                    <p class="intro">
                    The Burj Al Arab (Tower of the Arabs) is a luxury hotel located in the city of Dubai, United Arab Emirates. Managed by Jumeirah hotel group, it is one of the tallest hotels in the world, although 39% of its total height is made up of non-occupiable space. Burj Al Arab stands on an artificial island that is 280 m (920 ft) from Jumeirah Beach and is connected to the mainland by a private curving bridge. The shape of the structure is designed to resemble the sail of a ship. It has a helipad near the roof, at a height of 210 m (689 ft) above ground.
                    </p>
                   </div>
                </div>
              </div>
              <div class="row same-height">
                <div class="col-md-6 image height">
                  <div class="bg-stretch">
                    <img
                      src="img/img-03.jpg"
                      height="627"
                      width="960"
                      alt="image description"
                    />
                  </div>
                </div>
                <div class="col-md-6 text-block height">
                  <div class="centered">
                    <h2 class="intro-heading">
                      Burj Khalifa - From the Earth to the Sky
                    </h2>
                    <p class="intro">The World's tallest building. A living wonder. A Stunning work of art. An incomparable feat of engineering. Burj Khalifa is all that. In concept and execution, Burj Khalifa has no peer.

More than just the world's tallest building, Burj Khalifa is an unprecedented example of international cooperation, a symbolic beacon of progress, and an emblem of the new, dynamic and prosperous Middle East.
                    </p></div>
                </div>
              </div>
            </div>
          </div>
          <!-- browse block -->
          <!-- content block with guide info -->
          <section class="content-block guide-sub guide-add bg-white">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">MEET THE GUIDES</h2>
                <span class="main-subtitle"
                  >Our highly trained and efficient guides at your service</span
                >
                <div class="seperator"></div>
              </header>
              <?php
$selgui="select * from guide";
$resgui=mysqli_query($con,$selgui);
$n=mysqli_num_rows($resgui);

for ($i=1; $i <=$n; $i++) 
{ 
    $row=mysqli_fetch_row($resgui);
    if($i%3==1)
{    echo' <div class="content-holder">
                <div class="row">
                  <div class="col-sm-6 col-md-4 img-article">
                    <div class="holder">
                      <div class="img-wrap">
                        <img
                          src="guide_img/'.$row[3].'"
                          height="436"
                          width="370"
                          alt="image description"
                        />
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="caption">
                        <h3 class="small-space">'.$row[1].'</h3>
                        <span class="designation">'.$row[2].'</span>
                      </div>
                    </div>
                  </div>';
}
if($i%3==2)
{
                echo'<br>  
                <div class="col-sm-6 col-md-4 img-article">
                    <div class="holder">
                      <div class="img-wrap">
                        <img
                          src="guide_img/'.$row[3].'"
                          height="436"
                          width="370"
                          alt="image description"
                        />
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="caption">
                        <h3 class="small-space">'.$row[1].'</h3>
                        <span class="designation">'.$row[2].'</span>
                      </div>
                    </div>
                  </div>';}
                  if($i%3==0)
                  echo'
                  <div class="col-sm-6 col-md-4 img-article">
                    <div class="holder">
                      <div class="img-wrap">
                        <img
                          src="guide_img/'.$row[3].'"
                          height="436"
                          width="370"
                          alt="image description"
                        />
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="caption">
                        <h3 class="small-space">'.$row[1].'</h3>
                        <span class="designation">'.$row[2].'</span>
                      </div>
                    </div>
                  </div>
                    ';}
                    echo'
                </div>
              </div>
            </div>
          </section>';
?>
<br>
<br>
          <!-- testimonial block -->
          <div
            class="testimonial-holder parallax"
            data-stellar-background-ratio="0.25"
            id="testimonial-home-page"
          >
            <div class="container">
              <div id="testimonial-home-slide">
                <div class="slide">
                  <blockquote class="testimonial-quote">
                    <div class="img">
                      <img
                        src="img/thumbs/img-08.jpg"
                        height="112"
                        width="112"
                        alt="image description"
                      />
                    </div>
                    <div class="text">
                      <cite>HH Sheikh Zayed Bin Sultan Al Nahyan</cite>
                      <q
                        >Thanks to God our nation has a flourishing civilization, deep rooted in this land for many centuries. These roots will always flourish and bloom in the glorious present of our nation and in its anticipated future.”</q
                      >
                    </div>
                  </blockquote>
                </div>
                <div class="slide">
                  <blockquote class="testimonial-quote">
                    <div class="img">
                      <img
                        src="img/thumbs/img-09.jpg"
                        height="112"
                        width="112"
                        alt="image description"
                      />
                    </div>
                    <div class="text">
                      <cite>Tequan Richmond</cite>
                      <q
                        >Going through different places, I stopped through Dubai and stayed there overnight. There I had an ultra-culture shock”</q
                      >
                    </div>
                  </blockquote>
                </div>
                <div class="slide">
                  <blockquote class="testimonial-quote">
                    <div class="img">
                      <img
                        src="img/thumbs/img-10.jpg"
                        height="112"
                        width="112"
                        alt="image description"
                      />
                    </div>
                    <div class="text">
                      <cite>Jordan Henderson</cite>
                      <q
                        >I love to get to Dubai. It’s an impressive place, and you can do lots of different things there – beach, shopping, and other fun things. ”</q
                      >
                    </div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
          <!-- partner list -->
          <article class="partner-block">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">Partner</h2>
                <span class="main-subtitle"
                  >People who always support and endorse our good work</span
                >
                <div class="seperator"></div>
              </header>
              <div class="partner-list" id="partner-slide">
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="img/logos/logo-travelagancy.svg"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="img/logos/logo-travelagancy-hover.svg"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="img/logos/logo-around-world.svg"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="img/logos/logo-around-world-hover.svg"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="img/logos/logo-tourist.svg"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="img/logos/logo-tourist-hover.svg"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="img/logos/logo-adventure.svg"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="img/logos/logo-adventure-hover.svg"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="img/logos/logo-around-world.svg"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="img/logos/logo-around-world-hover.svg"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="img/logos/logo-travelagancy.svg"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="img/logos/logo-travelagancy-hover.svg"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="img/logos/logo-adventure.svg"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="img/logos/logo-adventure-hover.svg"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="img/logos/logo-around-world.svg"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="img/logos/logo-around-world-hover.svg"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="img/logos/logo-travelagancy.svg"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="img/logos/logo-travelagancy-hover.svg"
                      alt="image description"
                    />
                  </a>
                </div>
              </div>
            </div>
          </article>
        </main>
      </div>
      <?php include'footer.php'; ?>
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
    <script src="vendors/retina/retina.min.js"></script>
    <script src="vendors/sticky-kit/sticky-kit.js"></script>
    <script src="js/sticky-kit-init.js"></script>
    <script src="vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
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

<!-- Mirrored from html.waituk.com/entrada/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:49:45 GMT -->
</html>
