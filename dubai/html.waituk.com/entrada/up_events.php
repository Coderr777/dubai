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
  
<!-- Mirrored from html.waituk.com/entrada/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:09 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upcoming Events</title>
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
            <?php include 'nav.php'; ?>
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
                    src="img/banner/img-42.jpg"
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
                Dubai's A Pretty Powerful place   
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
                    src="img/banner/img-40.jpg"
                    data-lazyload="img/banner/img-41.jpg"
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
                  ></div>
                </li>
              </ul>
            </div>
          </div>
          </section>
          <!-- special block -->
          <!-- article list holder -->
          <div class="content-block content-spacing">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">Events</h2>
                <span class="main-subtitle"
                  >The events That Only took place in Dubai</span
                >
                <div class="seperator"></div>
              </header>
              <?php
    $selev="select * from events";
    $resev=mysqli_query($con,$selev);
    $n=mysqli_num_rows($resev);
      
    for ($i=1;$i<=$n;$i++) 
    { 
      $row=mysqli_fetch_row($resev);
      if($i%3==1)
      {
     echo' <div class="content-holder">
                <div class="row db-3-col">
                  <article class="col-sm-6 col-md-4 article has-hover-s3">
                    <div class="img-wrap">
                      <a href="#">
                        <img
                          src="upevents_img/'. $row[3] .'"
                          height="215"
                          width="370"
                          alt="image description"
                        />
                      </a>
                    </div>
                    <h3>'. $row[1] .'</h3>
                    <span class="price">from :  <span>'. $row[4] .'</span></span>
                    &nbsp &nbsp &nbsp
                    <span class="price">to :  <span>'. $row[5] .'</span></span>
                    <p>
                      '. $row[2] .'</p>
                  </article>';
      }
      if($i%3==2)
      {
       echo'           <article class="col-sm-6 col-md-4 article has-hover-s3">
       <div class="img-wrap">
       <a href="#">
         <img
           src="upevents_img/'. $row[3] .'"
           height="215"
           width="370"
           alt="image description"
         />
       </a>
     </div>
     <h3>'. $row[1] .'</h3>
     <span class="price">from :  <span>'. $row[4] .'</span></span>
     &nbsp &nbsp &nbsp
     <span class="price">to :  <span>'. $row[5] .'</span></span>
     <p>
       '. $row[2] .'</p> </article>';
      }
      if($i%3==0)
      {echo'
                  <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                  <a href="#">
                    <img
                      src="upevents_img/'. $row[3] .'"
                      height="215"
                      width="370"
                      alt="image description"
                    />
                  </a>
                </div>
                <h3>'. $row[1] .'</h3>
                <span class="price">from :  <span>'. $row[4] .'</span></span>
                &nbsp &nbsp &nbsp
                <span class="price">to :  <span>'. $row[5] .'</span></span>
                <p>
                  '. $row[2] .'</p>  </article>';
      }
                }
     ?>         </div>
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
      <!-- main footer -->
<?php
include 'footer.php';
?>
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

<!-- Mirrored from html.waituk.com/entrada/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:09 GMT -->
</html>
