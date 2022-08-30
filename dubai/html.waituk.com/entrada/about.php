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
  
<!-- Mirrored from html.waituk.com/entrada/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:38 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <!-- favion -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/favicon-16x16.png"
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  
    <style>
    *{
      margin:0;
      padding:0;
      box-sizing: border-box;
      font-family: Arial,Helvetica, sans-serif;
      transition: all .2s linear;
    }
    .box-container
    {
      min-height:100vh;
      background:url(backgroungimg/bg14.jpg) no-repeat;
      background-size: cover;
      background-position:center;
      display:flex;
      align-items:center;
      justify-content: center;
      flex-wrap: wrap;
      padding-bottom: 80px;
    }

    .box-container .box
    {
      height: 400px;
      width:280px;
      border: 8px solid #fff;
      box-shadow 0 5px 5px #000;
      overflow: hidden;
      margin: 20px 15px;
    }
    
    .box-container .box img 
    {
      height: 100%;
      width: 100%;
      object-fit: cover;
      filter: grayscale();
    }
    .box-container .box:hover img
    {
      filter: grayscale(0%);
      transform: scale(1.1);  
    }
    .box-container .box .info
    {
        text-align: center;
        background: #fff;
        position: relative;
        bottom: 40px;
    }
    .box-container .box:hover .info
    {
      bottom:128px;
    }    
    .box-container .box .info .title
    {
      padding: 10px 0;
      font-size: 20px;
      color: #333;
      text-transform: capitalize;
    }
    .box-container .box .info .post
    {
      font-size: 15px;
      color: #999;
    }
    
    .box-container .box .info .share
    {
      margin-top: 10px;
      border-top: 1px solid #4444;
    }
    .box-container .box .info .share .a
    {
      font-size: 20px;
      margin:20px 10px;
      text-decoration: none;
      color:#333;
    }
    .box-container .box .info .share a:hover
    {
      color:#999;
    }
  </style>
  <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/logo1.png"
    />
    <title>About Team</title>
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
        <section
          class="banner banner-inner parallax"
          data-stellar-background-ratio="0.5"
          id="about-banner"
        >
          <div class="banner-text">
            <div class="center-text">
              <div class="container">
                <h1>About Us</h1>
                <br>
                <!-- breadcrumb -->
                <nav class="breadcrumbs">
                  <ul>
                    </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <!-- main container -->
        <main id="main">
          <!-- content block with article -->
          <div class="content-block bg-white content-center">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">OUR TEAM</h2>
                
                <div class="seperator"></div>
                <br>
              </header>
  <div class="box-container">
    <div class="box">
      <img src="about_us_img/Darpan.jpg" alt="">
      <div class="info">
        <h3 class="title">Darpan Sarda</h3>
        <span class="post">Developer</span>
      <div class="share">
        <a href="" class="fa fa-facebook"></a>
        <a href="" class="fa fa-twitter"></a>
        <a href="" class="fa fa-instagram"></a>
        <a href="" class="fa fa-envelope"></a>
        <a href="" class="fa fa-linkedin"></a>
  </div>
      </div>
    </div>
    <div class="box">
      <img src="about_us_img/Ronak.jpg" alt="">
      <div class="info">
        <h3 class="title">Ronak Dave</h3>
        <span class="post">Developer</span>
      <div class="share">
        <a href="" class="fa fa-facebook"></a>
        <a href="" class="fa fa-twitter"></a>
        <a href="" class="fa fa-instagram"></a>
        <a href="" class="fa fa-envelope"></a>
        <a href="" class="fa fa-linkedin"></a>
      </div>
  </div>
    </div>
    <div class="box">
      <img src="about_us_img/kevin.jpg" alt="">
      <div class="info">
        <h3 class="title">Kevin Santoki</h3>
        <span class="post">Developer</span>
      <div class="share">
        <a href="" class="fa fa-facebook"></a>
        <a href="" class="fa fa-twitter"></a>
        <a href="" class="fa fa-instagram"></a>
        <a href="" class="fa fa-envelope"></a>
        <a href="" class="fa fa-linkedin"></a>
  </div>
      </div>
    </div>
    <div class="box">
      <img src="about_us_img/Dhruv.jpg" alt="">
      <div class="info">
        <h3 class="title">Dhruv Parmar</h3>
        <span class="post">Developer</span>
      <div class="share">
        <a href="" class="fa fa-facebook"></a>
        <a href="" class="fa fa-twitter"></a>
        <a href="" class="fa fa-instagram"></a>
        <a href="" class="fa fa-envelope"></a>
        <a href="" class="fa fa-linkedin"></a>
      </div>
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
    <script src="vendors/retina/retina.min.js"></script>
    <script src="vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
    <!-- mailchimp newsletter subscriber -->
    <script src="js/mailchimp.js"></script>
    <!-- custom script -->
    <script src="js/jquery.main.js"></script>
  </body>

<!-- Mirrored from html.waituk.com/entrada/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:39 GMT -->
</html>
