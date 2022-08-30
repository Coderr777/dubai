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

<html>
<body>
    
            <!-- main navigation -->
            <nav class="navbar navbar-default">
              <div class="navbar-header">
                <button
                  type="button"
                  class="navbar-toggle nav-opener"
                  data-toggle="collapse"
                  data-target="#nav"
                >
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <!-- main menu items and drop for mobile -->
              <div class="collapse navbar-collapse" id="nav">
                <!-- main navbar -->
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="home.php" 
                      >Home <b class="icon-angle-down"></b
                    ></a>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                      >Packages <b class="icon-angle-down"></b
                    ></a>
                    <div class="dropdown-menu">
                      <ul>
                        <li>
                          <a href="holiday_package.php"
                            >Holiday Package</a
                          >
                        </li>
                        <li>
                          <a href="exclusive_package.php"
                            >Exclusive Package</a
                          >
                        </li>
                        <li>
                          <a href="premium_package.php"
                            >Premium Package</a
                          >
                        </li>
                        <li>
                          <a href="honeymoon_package.php"
                            >Honeymoon Package</a
                          >
                        </li>
                        <li>
                          <a href="pre_book.php"
                            >Previous Bookings</a
                          >
                        </li>
                      </ul>
                    </div>
                  </li>       

                  
                  <li class="dropdown">
                    <a href="places.php" 
                      >Places
                    </a>
                    </li>

                    
                  <li class="dropdown">
                    <a href="hotels.php" 
                      >Hotels
                    </a>
                    </li>
                  <li class="dropdown">
                    <a href="maps.php" 
                      >Maps <b class="icon-angle-down"></b
                    ></a>
                  </li>
                  
                  <li class="dropdown">
                    <a href="ab_dubai.php" 
                      >About Dubai
                    </a>
                    </li>
                  
                    <li class="dropdown">
                    <a href="up_events.php" 
                      >Upcoming Events
                    </a>
                    </li>
                    
                    <li class="dropdown">
                    <a href="activities.php" 
                      >Activities
                    </a>
                    </li>
                    <li class="dropdown">
                    <a href="feedback.php" 
                      >Feedback
                    </a>
                    </li>
                    <li class="dropdown">
                    <a href="about.php" 
                      >About us
                    </a>
                    </li>
                  
                  <li class="hidden-xs hidden-sm v-divider">
                    <a href="logout-user.php" class="icon icon-user">
                    </a>

                  </li> 
                </nav>
          </div>
</body>
</html>