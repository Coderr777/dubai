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


<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Previous Booking</title>
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
  <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/logo1.png"
    />

</head>

<body>
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
        <section
        class="banner banner-inner parallax"
          data-stellar-background-ratio="0.5"
          id="activity-jungle"
        >
  </section>
  <br>
  <br>
  <?php
    $em=$_SESSION['email'];
    $selact="select * from booking where email='$em'";
    $resact=mysqli_query($con,$selact);
    $n=mysqli_num_rows($resact);


for ($i=1; $i <=$n; $i++) 
{     $row=mysqli_fetch_row($resact);
    $mn=$row[1];

    $pack="select * from packages where Package_id='$row[0]'";
    $resp=mysqli_query($con,$pack);
    $row1=mysqli_fetch_row($resp);
  echo "
<div class='row featurette'>
          <div class='col-md-7'>
            <h2 class='featurette-heading'>".$row1[1]."<span class='text-muted'> ".$row1[2]." package</span></h2>
            <p class='lead'>".$row1[3]."</p>
        <span class='badge bg-dark'>Booked</span>
          </div>
          <div class='col-md-5'>
            <img src='package_img/$row1[5]' width: 500px; height: 500px; >
          </div>
        </div>
        <br>
        <br>";
      }
      ?>
<br>

  <?php
    $em=$_SESSION['email'];
    $selact="select * from booking_cancel where email='$em'";
    $resact=mysqli_query($con,$selact);
    $n=mysqli_num_rows($resact);

for ($i=1; $i <=$n; $i++) 
{     $row=mysqli_fetch_row($resact);
    $mn=$row[1];

    $pack="select * from packages where Package_id='$row[0]'";
    $resp=mysqli_query($con,$pack);
    $row1=mysqli_fetch_row($resp);
  echo "
<div class='row featurette'>
          <div class='col-md-7'>
            <h2 class='featurette-heading'>".$row1[1]."<span class='text-muted'> ".$row1[2]." package</span></h2>
            <p class='lead'>".$row1[3]."</p>
        <span class='badge bg-dark'>Cancelled</span>
          </div>
          <div class='col-md-5'>
            <img src='package_img/$row1[5]' width: 500px; height: 500px; >
          </div>
        </div>
        <br>
        <br>";
      }
    ?>
<br>
      <br>
<?php
    include 'footer.php'; 
  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>