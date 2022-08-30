<?php
    $id=$_GET["uid"];
    include 'connection.php';
    $query=mysqli_query($con,"delete from adminlogin where admin_id=$uid");
    header("location:ad_dashboard.php");
?>
