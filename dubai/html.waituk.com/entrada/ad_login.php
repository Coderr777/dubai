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

<!--<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
        margin: 0;
        padding: 0;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
        background-size: 1300px 700px;
    }
    h2{
        color: chartreuse;
    }
    form {
        margin-top: 50px;
        text-align: center;
    }

    form h1 {
        margin-bottom: 30px;
        color: cyan;
        border-bottom: 5px solid yellow;
    }

    input {
        display: block;
        color: chartreuse;
        width: 300px;
        height: 40px;
        margin: 20px;
        border: none;
        outline: none;
        font-size: 20px;
        border-bottom: 2px solid yellow;
        background: transparent;
    }
                                        
    ::placeholder {
        color: cyan;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form name='login' action="" method="POST" autocomplete="">
                    <h2 class="text-center">Admin Login</h2>
                    <div class="form-group">
                        <input class="form-control" type="text" name="adname" placeholder="Enter name" required />
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="adpassword" placeholder="Password" required />
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-success" name="adlogin">Login</button>
                    </div>
                    <div class="link forget-pass text-left"><a href="#">Forgot password?</a></div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>-->
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Admin Login</title>

    <link rel="stylesheet" href="ad_login.css">

  </head>

  <body>

<form class="box" action="" method="post">

  <h1>Admin Login</h1>

  <input type="text" name="adname" placeholder="Username">

  <input type="password" name="adpassword" placeholder="Password">

  <input type="submit" name="adlogin" value="Login">
  
  <div class="link forget-pass text-left"><a href="ad_for_pwd.php">Forgot password?</a></div>
</form>

  </body>

</html>
    