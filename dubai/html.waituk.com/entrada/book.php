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
    <title>Book</title>
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
  <style>
      
  </style>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
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
          <?php include'nav.php' ?>            
        </header>
        <!-- main banner -->
              </header>
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


              <br>
              <?php
                  
          $pid=$_GET["uid"];
          $em=$_SESSION['email'];
          
    $seluser1="select * from usertable where email= '$em'";
    $resuser1=mysqli_query($con,$seluser1);
    $nuser1=mysqli_num_rows($resuser1);
    $rowuser1=mysqli_fetch_row($resuser1);
      
    
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

?>
<form class="form-horizontal" action="book_ins.php" method="post">
<div class="form-group">
    <div class="col-sm-10">
      <input type="hidden" name="bookpid" class="form-control" id="email" value="<?php echo $pid; ?>">
    </div>
  </div>  
<div class="form-group">
    <div class="col-sm-10">
      <input type="hidden" name="bookem" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>">
    </div>
  </div>  
<div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" placeholder="Enter email" readonly>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="pwd" name="booknm" value="<?php echo $rowuser1[1]; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pwd" value="<?php echo $rowuser1[1]; ?>" placeholder="Enter name" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Tour Start date:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="pwd" name="bookstdt">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Tour End Date:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="pwd" name="bookenddt">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Select Members:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="pwd" placeholder="Enter members" name="mem"> 
</div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
    <input type="hidden" name="bookprc" class="form-control" id="pwd" value="<?php echo ($row[4]) ?>"> 
</div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Price:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="pwd" value="<?php echo ($row[4]) ?>/person" readonly> 
</div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
    <input type="hidden" class="form-control" name="bookcntry" id="pwd" value="<?php echo $rowuser1[3]; ?>"> 
</div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Country :</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="pwd" value="<?php echo $rowuser1[3]; ?>" readonly> 
</div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>    
</main>
      </div>
      <br>
      <br>
      <?php include 'footer.php'; ?>


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
