<?php

include('connection.php');
if(isset($_POST['adlogin']))
    {
        
        $adname=$_POST['adname'];
        $adpassword=$_POST['adpassword'];
        $query="select * from adminlogin where ad_name='$adname' and ad_password='$adpassword'";
        $result=mysqli_query($con,$query);
        
        if(mysqli_num_rows($result)>=1)
        {
            session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['adname'] = $adname;
            header("location:ad_dashboard.php");
        }
        else
        {    
          echo '<script language="javascript">alert("Invalid name or password")</script>';
        }
    } 
?>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Forget Password</title>

    <link rel="stylesheet" href="ad_login.css">

  </head>

  <body>

<form class="box" action="ad_fpwd.php" method="post">

  <h1>Forget Password</h1>

  <input type="text" name="adname" placeholder="Please enter Username">

  <input type="password" name="adpassword" placeholder="New Password">

  <input type="submit" name="adlogin" value="Submit">
  
  <div class="link forget-pass text-left"><a href="ad_login.php">Login</a></div>
</form>

  </body>

</html>
    