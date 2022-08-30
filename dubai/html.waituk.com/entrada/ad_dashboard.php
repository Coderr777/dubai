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
  <style>
    .datetime:hover{
    background: #2E94E3;
    box-shadow: 0 0 30px #2E94E3;
  }
  </style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="index.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body onload="initClock()">
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>DUBAI</span>Tourism</p>
  <a href="ad_dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="ad_users.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Users</a>
  <a href="ad_package.php"class="icon-a"><i class="fa fa-plane icons"></i> &nbsp;&nbsp;Packages</a>
  <a href="ad_hotel.php"class="icon-a"><i class="fa fa-hotel icons"></i> &nbsp;&nbsp;Hotels</a>
  <a href="ad_up_event.php"class="icon-a"><i class="fa fa-calendar icons"></i> &nbsp;&nbsp;Upcoming mega events</a>
  <a href="ad_feedback.php"class="icon-a"><i class="fa fa-comments icons"></i> &nbsp;&nbsp;Feedbacks</a>
  <a href="ad_places.php"class="icon-a"><i class="fa fa-location-arrow icons"></i> &nbsp;&nbsp;Places</a>
  <a href="ad_activities.php"class="icon-a"><i class="fa fa-tripadvisor icons"></i> &nbsp;&nbsp;activities</a>
  <a href="ad_guide.php"class="icon-a"><i class="fa fa-tripadvisor icons"></i> &nbsp;&nbsp;Guides</a>
  
</div>
<?php
$seluser="select * from usertable";
$resuser=mysqli_query($con,$seluser);
$nuser=mysqli_num_rows($resuser);

$selpack="select * from packages";
$respack=mysqli_query($con,$selpack);
$npack=mysqli_num_rows($respack);

$selad="select * from adminlogin";
$resad=mysqli_query($con,$selad);
$nuad=mysqli_num_rows($resad);
?>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color:white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color:white;" class="nav2"  >&#9776; Dashboard</span>
</div>
<form class="form-inline my-2 my-lg-0">
<?php
		echo'<h3 style="color: white; text-align: right;">'.$_SESSION['adname'].'</h3>';
    echo '<a href="logout-admin.php"><button class="btn btn-outline-warning" type="submit">Logout</button></a>';
	?>
          </form>
	<div class="col-div-6">
	
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $nuser;?><br/><span>Users</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $npack;?><br/><span>Packages</span></p>
			<i class="fa fa-plane box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $nuser;?><br/><span>Feedbacks</span></p>
			<i class="fa fa-comments box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $nuser;?><br/><span>Places</span></p>
			<i class="fa fa-location-arrow box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>



	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
	<?php
		echo'<table>
  <tr>
    <th>#</th>
    <th>Admin name</th>
	<th> </th>
  </tr>';

  for($i=1;$i<=$nuad;$i++)
  {
	$row=mysqli_fetch_row($resad);
	  echo'<tr>
	  			<td>'. $row[0].'
				<td>'.$row[1] .'
				<td><a href="admin_delete.php?uid=$row[0]"><button type="button" class="btn btn-info"><i class="fa fa-trash"></i></button></a></tr>';
  }
echo'</table>';
?>
		</div>
	</div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
      <br>
      <br>
		<div class="datetime" style="color: #fff;
  background: #2E94E3;
  font-family: 'Segoe UI', sans-serif;
  width: 250px;
  padding: 15px 10px;
  border: 3px solid #2E94E3;
  border-radius: 5px;
  -webkit-box-reflect: below 1px linear-gradient(transparent, rgba(255, 255, 255, 0.1));
  transition: 0.5s;
  transition-property: background, box-shadow;">
      <div class="date" style="font-size: 13px;
  font-weight: 600;
  letter-spacing: 3px;">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <br>
      <div class="time" style="font-size: 20px;
  justify-content: center;
  align-items: center;
  display: flex;
  letter-spacing: 3px;">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
    <!--digital clock end-->

    <script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";

          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    </script>

         </div>
  </div>
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
