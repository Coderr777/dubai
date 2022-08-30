<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>
<?php
    $uid=$_POST["ad_guide_idup"];
    $gnm=$_POST["ad_guide_nameup"];
    $gtype=$_POST["ad_guide_typeup"];
    $gimg=$_POST["ad_guide_imgup"];

    $query=mysqli_query($con,"update guide set guide_name='$gnm',guide_type='$gtype',guide_img='$gimg' where guide_id=$uid");
    /*if ($query) {
        # code...
        echo'succesful';
    }
    else
    {
        echo mysqli_error($con);
    }*/
    header("location:ad_guide.php");

?>