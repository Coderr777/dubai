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
  
<!-- Mirrored from html.waituk.com/entrada/jungle-safari.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:37 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Premium Package</title>
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
                  alt="Dubai Tourism"
                />
              </a>
            </div>
                      <?php include'nav.php' ?>            
        </header>
        <!-- main banner -->
        <section
          class="banner banner-inner parallax"
          data-stellar-background-ratio="0.5"
          id="activity-jungle"
        >
          <div class="banner-text">
            <div class="center-text text-center">
              <div class="container">
                <h1>Premium Dubai Package</h1>
                <strong class="subtitle"
                  >The most detailed and modern Adventure theme!</strong
                >
              </div>
            </div>
          </div>
        </section>
        <!-- main container -->
        <main id="main">
          <article class="content-block article-boxed">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">TREKKING THEMES</h2>
                <span class="main-subtitle"
                  >Chose from various walking and trekking adventures in
                  2016.</span
                >
                <div class="seperator"></div>
              </header>
              <?php
                  
    $selpac="select * from packages";
    $respac=mysqli_query($con,$selpac);
    $n=mysqli_num_rows($respac);
    for ($i=1;$i<=$n;$i++) 
    { 
      $row=mysqli_fetch_row($respac);
      if($row[2]=="Premium")
      {
        if($i%3==1)
        {
            echo'<div class="content-holder content-boxed">
                <div class="row db-3-col">
                  <article class="col-sm-6 col-md-4 article has-hover-s1">
                    <div class="thumbnail">
                      <div class="img-wrap">
                        <img
                          src="package_img/'.$row[6].'"
                          height="228"
                          width="350"
                          alt="image description"
                        />
                      </div>
                      <h3 class="small-space">
                        <a href="tour-detail.html"
                          ><b>'.$row[1].'</b></a
                        >
                      </h3>
                      
                      <aside class="meta">
                        
                      </aside>
                      <p>'.$row[3].'
                      </p>
                      <a href="pack.php?uid='.$row[0].'" class="btn btn-default"
                        >explore</a
                      >
                      <footer>
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                        <span class="price">from <span>'.$row[4].'</span></span>
                      </footer>
                    </div>
                  </article>';
        }
        if($i%3==2)
        {
                  echo'<article class="col-sm-6 col-md-4 article has-hover-s1">
                    <div class="thumbnail">
                      <div class="img-wrap">
                        <img
                          src="package_img/'.$row[5].'"
                          height="228"
                          width="350"
                          alt="image description"
                        />
                      </div>
                      <h3 class="small-space">
                        <a href="tour-detail.html"
                          ><b>'.$row[1].'</b></a
                        >
                      </h3>
                      
                      <aside class="meta">
                        
                      </aside>
                      <p>
                      '.$row[3].'</p>
                      <a href="pack.php?uid='.$row[0].'" class="btn btn-default"
                        >explore</a
                      >
                      <footer>
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                        <span class="price">from <span>'.$row[4].'</span></span>
                      </footer>
                    </div>
                  </article>';}
                  if($i%3==0)
                  {
                    echo'<article class="col-sm-6 col-md-4 article has-hover-s1">
                    <div class="thumbnail">
                      <div class="img-wrap">
                        <img
                          src="package_img/'.$row[5].'"
                          height="228"
                          width="350"
                          alt="image description"
                        />
                      </div>
                        <h3 class="small-space">
                        <a href="tour-detail.html"
                          ><b>'.$row[1].'</b></a
                        >
                      </h3>
                      
                      <aside class="meta">
                        
                      </aside>
                      <p>'.$row[3].'
                      </p>
                      <a href="pack.php?uid='.$row[0].'" class="btn btn-default"
                        >explore</a
                      >
                      <footer>
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                        <span class="price">from <span>'.$row[4].'</span></span>
                      </footer>
                    </div>
                  </article>';
       }
    }
            }
        ?>
                  
                </div>
              </div>
            </div>
          </article>
          
        </main>
      </div>
      <?php include 'footer.php'; ?>
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

<!-- Mirrored from html.waituk.com/entrada/jungle-safari.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:37 GMT -->
</html>
