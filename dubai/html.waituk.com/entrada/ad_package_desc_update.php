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
    <title>Add Package description</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
html,body{
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
    color: #fff;
    border-radius: 25px;
    font-size: 17px;
    font-weight: 500;
    transition: all 0.3s ease;
}
.container .form form .button:hover{
    background: #785105;
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
   $uppackquery=mysqli_query($con,"select * from package_desc where Package_id=$uid");
   $uprow=mysqli_fetch_row($uppackquery);
    ?>
<form action="ad_package_desc_up.php" method="POST">
<h2 class="text-center">Update Package Description</h2>
<div class="mb-3">
<div class="form-group">
    <input class="form-control" type="hidden" name="pack" placeholder="Package Name" value=<?php echo $uprow[0]; ?>>
</div>
                    
  <label for="exampleFormControlTextarea1" class="form-label">Day1</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="d1" rows="3"><?php echo $uprow[1]; ?></textarea>
</div>
<br>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Day2</label>
  <textarea class="form-control" id="exampleFormControlTextarea1"  name="d2" rows="3"><?php echo $uprow[2]; ?></textarea>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Day3</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="d3" rows="3"><?php echo $uprow[3]; ?></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Day4</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="d4" rows="3"><?php echo $uprow[4]; ?></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Day5</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="d5" rows="3"><?php echo $uprow[5]; ?></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Day6</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="d6" rows="3"><?php echo $uprow[6]; ?></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Day7</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="d7" rows="3"><?php echo $uprow[7]; ?></textarea>
</div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Activity 1 id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="act1" value="<?php echo $uprow[8]; ?>" aria-describedby="emailHelp">
   </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Activity 2 id</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="act2" value="<?php echo $uprow[9]; ?>">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Hotel id</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="htl" value="<?php echo $uprow[10]; ?>">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Guide id</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="gid" value="<?php echo $uprow[11]; ?>">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Place 1 id</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pla1" value="<?php echo $uprow[12]; ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Place 2 id</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pla2" value="<?php echo $uprow[13]; ?>">
  </div>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Place 3 id</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pla3" value="<?php echo $uprow[14]; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Place 4 id</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pla4" value="<?php echo $uprow[15]; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Event id</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="eve" value="<?php echo $uprow[16]; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>