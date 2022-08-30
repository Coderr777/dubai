<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>
<?php
    $uid=$_POST["ad_pack_idup"];
    $pnm=$_POST["ad_pack_nameup"];
    $pt=$_POST["ad_pack_typeup"];
    $pdt=$_POST["ad_pack_detailsup"];
    $ppri=$_POST["ad_pack_priceup"];
    $pimg=$_POST["ad_pack_imgup"];

    $query=mysqli_query($con,"update packages set Package_name='$pnm',Package_type='$pt', Package_details='$pdt', Package_price='$ppri', Package_image='$pimg' where Package_id =$uid");
    /*if ($query) {
        # code...
        echo'succesful';
    }
    else
    {
        echo mysqli_error($con);
    }*/
    header("location:ad_package.php");

?>