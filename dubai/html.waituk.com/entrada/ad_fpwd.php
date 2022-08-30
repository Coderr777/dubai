<?php

include('connection.php');
if(isset($_POST['adlogin']))
    {
        
        $adname=$_POST['adname'];
        $adpassword=$_POST['adpassword'];
        $query="select * from adminlogin where ad_name='$adname' and ad_password='$adpassword'";
        $result=mysqli_query($con,$query);
        
        if(mysqli_num_rows($result)>=1)
        {
            session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['adname'] = $adname;
            header("location:ad_dashboard.php");
        }
        else
        {    
          echo '<script language="javascript">alert("Invalid name or password")</script>';
        }
    } 
?>
<?php
  $adnm=$_POST['adname'];
  $adpwd=$_POST['adpassword'];

  $que1="select ad_name from adminlogin where ad_name='$adnm'";
  $res1=mysqli_query($con,$que1);
  
  if($res1)
  {
    $query1="update adminlogin set ad_password='$adpwd' where ad_name='$adnm'";
    $result1=mysqli_query($con,$query1);
   /* if($result1)
    {
      echo 'success';
    }
    else
    {
      echo mysqli_error($con);
    }*/
        header("location:ad_login.php");
  }
  else
  {
    echo ' wrong username ';
  }

?>