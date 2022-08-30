<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>
<?php
    $uid=$_POST["ad_place_idup"];
    $pnm=$_POST["ad_place_nameup"];
    $pdt=$_POST["ad_place_detailsup"];
    $pdt2=$_POST["ad_place_detailsup2"];
    $pimg=$_POST["ad_place_imgup"];
    $pimg2=$_POST["ad_place_imgup2"];
    $pimg3=$_POST["ad_place_imgup3"];

    $query=mysqli_query($con,"update places set Place_name='$pnm',Place_desc='$pdt',places_longdesc=$pdt2,Place_img='$pimg',places_img2=$pimg2,places_img3=$pimg3 where place_id=$uid");
    /*if ($query) {
        # code...
        echo'succesful';
    }
    else
    {
        echo mysqli_error($con);
    }*/
    header("location:ad_places.php");

?>