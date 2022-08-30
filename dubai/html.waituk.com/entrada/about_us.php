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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
      background:url(wood.jpg) no-repeat;
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
  <title>About us</title>
</head>

<body>
  <br>
  <h2 style="text-align:center">Our Team</h2>
  <div class="box-container">
    <div class="box">
      <img src="" alt="">
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
      <img src="" alt="">
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
      <img src="" alt="">
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
      <img src="" alt="">
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
  </div>

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