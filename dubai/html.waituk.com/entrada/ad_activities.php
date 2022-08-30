<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>

<!Doctype HTML>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="index.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>DUBAI</span>Tourism</p>
  <a href="ad_dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="ad_users.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Users</a>
  <a href="ad_package.php"class="icon-a"><i class="fa fa-plane"></i> &nbsp;&nbsp;Packages</a>
  <a href="ad_hotel.php"class="icon-a"><i class="fa fa-hotel"></i> &nbsp;&nbsp;Hotels</a>
  <a href="ad_up_event.php"class="icon-a"><i class="fa fa-calendar icons"></i> &nbsp;&nbsp;Upcoming mega events</a>
  <a href="ad_feedback.php"class="icon-a"><i class="fa fa-comments"></i> &nbsp;&nbsp;Feedbacks</a>
  <a href="ad_places.php"class="icon-a"><i class="fa fa-location-arrow"></i> &nbsp;&nbsp;Places</a>
  <a href="ad_activities.php"class="icon-a"><i class="fa fa-tripadvisor icons"></i> &nbsp;&nbsp;activities</a>
  <a href="ad_guide.php"class="icon-a"><i class="fa fa-tripadvisor icons"></i> &nbsp;&nbsp;Guides</a>
</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color:white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color:white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<?php
		echo'<h3 style="color: white; text-align: right;">'.$_SESSION['adname'].'</h3>';
	?>
  <a href="ad_activities_insert.php"><button type="button" class="btn btn-info" style="text-align: right;"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
  <center>
    <h4 style="color:#68FF33";>Activity table </h4>
</center>
    <?php
                
 //define total number of results you want per page  
 $results_per_page = 3;  
  
 //find the total number of results stored in the database  
 $query = "select *from activities";  
 $result = mysqli_query($con, $query);  
 $number_of_result = mysqli_num_rows($result);  

 //determine the total number of pages available  
 $number_of_page = ceil ($number_of_result / $results_per_page);  

 //determine which page number visitor is currently on  
 if (!isset ($_GET['page']) ) {  
     $page = 1;  
 } else {  
     $page = $_GET['page'];  
 }  

 //determine the sql LIMIT starting number for the results on the displaying page  
 $page_first_result = ($page-1) * $results_per_page;  

 //retrieve the selected results from database   
 $query = "SELECT *FROM activities LIMIT " . $page_first_result . ',' . $results_per_page;  
 $result = mysqli_query($con, $query);  
   for($page = 1; $page<= $number_of_page; $page++) {  
  echo '<a href = "ad_activities.php?page=' . $page . '">' . $page . ' </a>';  
}  
/*
$selact="select * from activities";
$resact=mysqli_query($con,$selact);
$n=mysqli_num_rows($resact);*/
echo'<table class="table table-striped table-hover">';
echo "<h1>";
echo"<th style='padding-top: 20px;'>   #
     <th style='padding-top: 20px;'>  Name
     <th style='padding-top: 20px;'>  Details
     <th style='padding-top: 20px;'> Image   
     <th>
     <th> 
";
$i=0;
while ($row = mysqli_fetch_array($result))

//for ($i=1; $i <=$n; $i++) 
{ 
  $i++;
  //  $row=mysqli_fetch_row($resact);
    echo"<tr style='padding-top: 60px;'> 
              <td style='padding-top: 20px;'>$i
              <td style='padding-top: 20px;'>$row[1]
              <td style='padding-top: 20px;'>$row[2]
              <td style='padding-top: 20px;'><img src='activity_img/$row[3]' width='100px' alt='image'>
              <td><a href='ad_activities_delete.php?uid=$row[0]'><button type='button' class='btn btn-danger'><i class='fa fa-trash'></i></button></a>
              <td><a href='ad_activities_update.php?uid=$row[0]'><button type='button' class='btn btn-warning'><i class='fa fa-pencil'></i></button></a>";
}   

echo "</table>";
?>
		</div>
	</div>
	</div>
	<div class="clearfix"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>

</body>


</html>
