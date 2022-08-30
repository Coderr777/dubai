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
    <title>Update Activity</title>
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
   $uid=$_GET["uid"];
   $upactquery=mysqli_query($con,"select * from activities where activity_id=$uid");
   $uprow=mysqli_fetch_row($upactquery);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="ad_activities_up.php" method="POST" autocomplete="">
                    <h2 class="text-center">Update Activities</h2>
                    <br>
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="ad_act_idup"  value=<?php echo $uprow[0]; ?>>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="ad_act_nameup" placeholder="Activity Name" value=<?php echo $uprow[1]; ?>>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="ad_act_detailsup" placeholder="Activity Details"   id="floatingTextarea2" style="height: 100px"><?php echo $uprow[2]; ?></textarea>
                        <label for="floatingTextarea2"></label>
                    </div>
                    <div>
                        <label for="formFileLg" class="form-label">Activity Image</label>
                        <input class="form-control form-control-lg" id="formFileLg" name="ad_act_imgup" value="<?php echo $uprow[3]; ?>" type="file">
                    </div>
                    <br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Update Activity">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>