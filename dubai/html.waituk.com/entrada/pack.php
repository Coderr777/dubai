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
    <title>Package</title>
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
  <style>
      .box-container
    {
      min-height:100vh;
      background-size: cover;
      background-position:center;
      display:flex;
      align-items:center;
      justify-content: center;
      flex-wrap: wrap;
      padding-bottom: 80px;
    }
    HTML CSS JSResult Skip Results Iframe
EDIT ON
.container {
  width: 80%;
  max-width: 600px;
  margin: 50px auto;
}

button.accordion {
  width: 100%;
  background-color: whitesmoke;
  border-color: #999;
  outline: none;
  text-align: left;
  padding: 15px 20px;
  font-size: 18px;
  color: #444;
  cursor: pointer;
  transition: background-color 0.2s linear;
}

button.accordion:after {
  content: '\f055';
  font-family: "fontawesome";
  font-size: 14px;
  float: right;
}

button.accordion.is-open:after {
  content: '\f056';
}

button.accordion:hover, button.accordion.is-open {
  background-color: #ddd;
}

.accordion-content {
  background-color: white;
  border-left: 1px solid whitesmoke;
  border-right: 1px solid whitesmoke;
  padding: 0 20px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-in-out;
}
  </style>
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/logo1.png"
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
                <h1>Exclusive Dubai Package</h1>
                <strong class="subtitle"
                  >The most detailed and modern Adventure theme!</strong
                >
              </div>
            </div>
          </div>
        </section>
              </header>

              <br>
              <?php
                  
          $pid=$_GET["uid"];
    $selpac="select * from packages where Package_id=$pid";
    $respac=mysqli_query($con,$selpac);
    $n=mysqli_num_rows($respac);
    $row=mysqli_fetch_row($respac);

    $selpac1="select * from package_desc where Package_id=$pid";
    $respac1=mysqli_query($con,$selpac1);
    $n1=mysqli_num_rows($respac1);
    $row1=mysqli_fetch_row($respac1);

    $selact="select * from activities where activity_id=$row1[8]";
    $resact=mysqli_query($con,$selact);
    $nact=mysqli_num_rows($resact);
    $rowact=mysqli_fetch_row($resact);

    $selact2="select * from activities where activity_id=$row1[9]";
    $resact2=mysqli_query($con,$selact2);
    $nact2=mysqli_num_rows($resact2);
    $rowact2=mysqli_fetch_row($resact2);
    
    $seleve="select * from events where event_id=$row1[16]";
    $reseve=mysqli_query($con,$seleve);
    $neve=mysqli_num_rows($reseve);
    $roweve=mysqli_fetch_row($reseve);
    echo $neve;

    $selhtl="select * from hotel where hotel_id=$row1[10]";
    $reshtl=mysqli_query($con,$selhtl);
    $nhtl=mysqli_num_rows($reshtl);
    $rowhtl=mysqli_fetch_row($reshtl);

    $selgui="select * from guide where guide_id=$row1[11]";
    $resgui=mysqli_query($con,$selgui);
    $ngui=mysqli_num_rows($resgui);
    $rowgui=mysqli_fetch_row($resgui);

    $selpla="select * from places where place_id=$row1[12]";
    $respla=mysqli_query($con,$selpla);
    $npla=mysqli_num_rows($respla);
    $rowpla=mysqli_fetch_row($respla);
    
    $selpla2="select * from places where place_id=$row1[13]";
    $respla2=mysqli_query($con,$selpla2);
    $npla2=mysqli_num_rows($respla2);
    $rowpla2=mysqli_fetch_row($respla2);

    $selpla3="select * from places where place_id=$row1[14]";
    $respla3=mysqli_query($con,$selpla3);
    $npla3=mysqli_num_rows($respla3);
    $rowpla3=mysqli_fetch_row($respla3);

    $selpla4="select * from places where place_id=$row1[15]";
    $respla4=mysqli_query($con,$selpla4);
    $npla4=mysqli_num_rows($respla4);
    $rowpla4=mysqli_fetch_row($respla4);


echo'<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div id="tourCarousel"  class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item  h-100 ">
                            <img class="d-block w-100  h-100" src="package_img/'. $row[7] .'" alt="">
                        </div>
                    </div>
                    <br>
                    <div class="carousel-inner h-100">
                        <div class="carousel-item  h-100 ">
                            <img class="d-block w-100  h-100" src="package_img/'. $row[6] .'" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <hr class="border-warning">
                    <div>
                    </div>
                    <hr>
                    <div class="w-100 d-flex justify-content-between">
                        <h4><i class="fa fa-tag"></i>'.$row[4].'</h4>
                        <br>
                        <a href="book.php?uid='.$row[0].'" class="btn btn-default"
                        >Book Now</a
                      >
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <h2>'.$row[1].'</h2>
                <hr class="border-warning">
                <h4><b>Details</b></h4>';               
                if($row1[1]!='-')
                {
                echo'<button class="accordion">Day1</button>
                <div class="accordion-content">
                  <p>
                    '.$row1[1].'
                  </p>
                </div>';
                }          
                if($row1[2]!='-')
                {
                echo'<button class="accordion">Day2</button>
                <div class="accordion-content">
                  <p>
                    '.$row1[2].'
                  </p>
                </div>';
                }          
                if($row1[3]!='-')
                {
                echo'<button class="accordion">Day3</button>
                <div class="accordion-content">
                  <p>
                    '.$row1[3].'
                  </p>
                </div>';
                }          
                if($row1[4]!='-')
                {
                echo'<button class="accordion">Day4</button>
                <div class="accordion-content">
                  <p>
                    '.$row1[4].'
                  </p>
                </div>';
                }          
                if($row1[5]!='-')
                {
                echo'<button class="accordion">Day5</button>
                <div class="accordion-content">
                  <p>
                    '.$row1[5].'
                  </p>
                </div>';
                }          
                if($row1[6]!='-')
                {
                echo'<button class="accordion">Day6</button>
                <div class="accordion-content">
                  <p>
                    '.$row1[6].'
                  </p>
                </div>';
                }          
                if($row1[7]!='-')
                {
                echo'<button class="accordion">Day7</button>
                <div class="accordion-content">
                  <p>
                    '.$row1[7].'
                  </p>
                </div>';
                }                 
                
                if($nact!='0')
                {
                echo'<button class="accordion">Activity1</button>
                <div class="accordion-content">
                <img src=activity_img/'.$rowact[3].'>
                <h5>'.$rowact[1].'</h5>  
                <p>
                    '.$rowact[2].'
                  </p>
                </div>';
                }          
                if($nact2!='0')
                {
                echo'<button class="accordion">Activity2</button>
                <div class="accordion-content">
                <img src="activity_img/'.$rowact2[3].'">
                <h5>'.$rowact2[1].'</h5>  
                <p>
                    '.$rowact2[2].'
                  </p>
                </div>';
                }          
                if($nhtl!='0')
                {
                echo'<button class="accordion">Hotel</button>
                <div class="accordion-content">
                <img src="hotel_img/'.$rowhtl[3].'">
                <h5>'.$rowhtl[1].'</h5>  
                <p>
                    '.$rowhtl[2].'
                  </p>
                </div>';
                }          
                if($ngui!='0')
                {
                echo'<button class="accordion">Guide</button>
                <div class="accordion-content">
                <img src="guide_img/'.$rowgui[3].'">
                <h5>'.$rowgui[1].'</h5>  
                <p>
                    '.$rowgui[2].'
                  </p>
                </div>';
                }          
                if($npla!='0')
                {
                echo'<button class="accordion">Place1</button>
                <div class="accordion-content">
                <img src="places_img/'.$rowpla[3].'">
                <h5>'.$rowpla[1].'</h5>  
                <p>
                    '.$rowpla[5].'
                  </p>
                </div>';
                }          
                if($npla2!='0')
                {
                echo'<button class="accordion">Place2</button>
                <div class="accordion-content">
                <img src="places_img/'.$rowpla2[2].'">
                <h5>'.$rowpla2[1].'</h5>  
                <p>
                    '.$rowpla2[5].'
                  </p>
                </div>';
                }          
                
                if($npla3!='0')
                {
                echo'<button class="accordion">Place3</button>
                <div class="accordion-content">
                <img src="places_img/'.$rowpla3[2].'">
                <h5>'.$rowpla3[1].'</h5>  
                <p>
                    '.$rowpla3[5].'
                  </p>
                </div>';
                }          
                
                if($npla4!='0')
                {
                echo'<button class="accordion">Place4</button>
                <div class="accordion-content">
                <img src="places_img/'.$rowpla4[2].'">
                <h5>'.$rowpla4[1].'</h5>  
                <p>
                    '.$rowpla4[5].'
                  </p>
                </div>';
                }          
                if($neve!='0')
                {
                echo'<button class="accordion">Event</button>
                <div class="accordion-content">
                <img src="upevents_img/'.$roweve[3].'">
                <h5>'.$roweve[1].'</h5>  
                <p>
                    '.$roweve[2].'
                  </p>
                </div>';
                }          
       echo' </div>

                <hr>
                <hr class="border-primary">
                <div class="w-100 d-flex justify-content-between  align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="" class="border mr-3 review-user-avatar" alt="">
                        <span></span>
                    </div>
                    <span class="text-muted"></span>
                </div>
                <hr class="border-light">
            </div>
        </div>
    </div>
</section>';
?>
</main>
      </div>
      <br>
      <br>
      <?php include 'footer.php'; ?>

      <script>
          var accordions = document.getElementsByClassName("accordion");

for (var i = 0; i < accordions.length; i++) {
  accordions[i].onclick = function() {
    this.classList.toggle('is-open');

    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      // accordion is currently open, so close it
      content.style.maxHeight = null;
    } else {
      // accordion is currently closed, so open it
      content.style.maxHeight = content.scrollHeight + "px";
    }
  }
}
      </script>
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
