<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback reply</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
html,body{
    background: url("backgroungimg/bg13.jpg");
    background-repeat: no-repeat;
    background-size: 150%;
    font-family: 'Poppins', sans-serif;
}
::selection{
    color: #fff;
    background: #6665ee;
}
.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.container .form{
    background: #fff;
    padding: 30px 35px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.container .form form .form-control{
    height: 40px;
    font-size: 15px;
}
.container .form form .forget-pass{
    margin: -15px 0 15px 0;
}
.container .form form .forget-pass a{
   font-size: 15px;
}
.container .form form .button{
    background: #f5a60a;
    border-radius:25px;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    transition: all 0.3s ease;
}
.container .form form .button:hover{
    background: #5757d1;
}
.container .form form .link{
    padding: 5px 0;
}
.container .form form .link a{
    color: #6665ee;
}
.container .login-form form p{
    font-size: 14px;
}
.container .row .alert{
    font-size: 14px;
}

    </style>
</head>
<body>
    <?php
        $uid=$_GET['uid'];
        $selpack="select * from feedback where feedback_id=$uid";
$respack=mysqli_query($con,$selpack);
$n=mysqli_num_rows($respack);
$row=mysqli_fetch_row($respack);

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="ad_feed_rep.php" method="POST" autocomplete="">
                    <h2 class="text-center">Feedback Reply</h2>
                    <br>
                    <div class="form-group">
                        <input class="form-control" type="text" name="sub" placeholder="Subject" required>
                    </div>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" name="fer" placeholder="Reply" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2"></label>
                    </div>
                        <input class="form-control form-control-lg" id="formFileLg" name="fid" value="<?php echo $uid; ?>" type="hidden">
                        <input class="form-control form-control-lg" id="formFileLg" name="em" value="<?php echo $row[1]; ?>" type="hidden">
                    <br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Reply">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>