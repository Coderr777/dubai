<?php require_once "controllerUserData.php";  
require "connection.php";
?>
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
    <title>Hotels</title>
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
                  alt="Entrada"
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
                    src="img/banner/img-38.jpg"
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
                  ></div>

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
                  >Lets get Lost
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
                    src="img/banner/img-36.jpg"
                    data-lazyload="img/banner/img-37.jpg"
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
                  Lets get Lost  
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
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <br>
          <!-- featured adventure content -->
          <section class="content-block article-boxed">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">TOP Hotels</h2>
                <span class="main-subtitle"
                  >Our collection of the most popular and amazing Hotels in Dubai</span
                >
                <div class="seperator"></div>
              </header>
</section>      
    <?php
    $selhtl="select * from hotel";
    $reshtl=mysqli_query($con,$selhtl);
    $n=mysqli_num_rows($reshtl);
      
    for ($i=1;$i<=$n;$i++) 
    { 
      $row=mysqli_fetch_row($reshtl);
          echo'<div class="featured-content adventure-holder">
            <div class="container-fluid">
              <div class="row same-height">
                <div class="col-md-6 image height wow slideInLeft">
                  <div class="bg-stretch">
                    <img
                      src="hotel_img/'. $row[3] .'"
                      height="627"
                      width="960"
                      alt="image description"
                    />
                  </div>
                </div>
                <div class="col-md-6 text-block height wow slideInRight">
                  <div class="centered">
                    <h2 class="intro-heading">'.$row[1].'
                    </h2>
                    <p class="intro">'. $row[2] .'
                    </p>
                    </div>
                </div>
              </div>
              <br>';
    }
    ?>
    
          <br>
          <br>
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

<!-- Mirrored from html.waituk.com/entrada/megamenu.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:40 GMT -->
</html>
