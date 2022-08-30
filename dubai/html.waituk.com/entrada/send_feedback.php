<?php require_once "controllerUserData.php"; 
    require "connection.php";
?>
<?php 
$email = $_SESSION['email'];
$subject=$_POST['subject'];
  $fesql= mysqli_query($con,"INSERT INTO feedback(email,feedback,repchk) VALUES ('$email','$subject',reply)");
  header('Location:feedback.php');  
?>