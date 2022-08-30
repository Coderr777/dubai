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
<?php
    $pid=$_POST['bookpid'];
    $bemail=$_POST['bookem'];
    $bnm=$_POST['booknm'];
    $bst=$_POST['bookstdt'];
    $bedt=$_POST['bookenddt'];
    $bmem=$_POST['mem'];
    $bprc=$_POST['bookprc'];
    $bcntry=$_POST['bookcntry'];
    $insert_query=mysqli_query($con,"INSERT INTO `booking_pend`(`Package_id`, `email`, `name`, `st_date`, `end_date`, `members`, `price`, `Country`) VALUES ('$pid','$bemail','$bnm','$bst','$bedt','$bmem','$bprc','$bcntry')");
    /*if($insert_query)
    {
        echo'successful';
    }
    else
    {
        echo 'error';
    }*/
    header("location:confirm.php");
?>
