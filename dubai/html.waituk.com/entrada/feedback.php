<!DOCTYPE html>
<html>
  
<!-- Mirrored from html.waituk.com/entrada/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:40 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!--    <link rel="stylesheet" href="feedback.css">
--><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
 
 <style>
    * {
      box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid rgb(70, 68, 68);
      border-radius: 4px;
      resize: vertical;
    }

    input[type=email],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid rgb(70, 68, 68);
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: rgb(37, 116, 161);
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      
      padding: 20px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
  </style>    
<title>Feedback</title>
    <!-- favion -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/logo1.png"
    />
   <!-- link to font awesome -->
    <link
      media="all"
      rel="stylesheet"
      href="vendors/font-awesome/css/font-awesome.css"
    />
    <!-- link to material icon font -->
    <link
      media="all"
      rel="stylesheet"
      href="vendors/material-design-icons/material-icons.css"
    />
    <!-- link to custom icomoon fonts -->
    <link
      rel="stylesheet"
      type="text/css"
      href="css/fonts/icomoon/icomoon.css"
    />
    <!-- link to wow js animation -->
    <link media="all" rel="stylesheet" href="vendors/animate/animate.css" />
    <!-- include bootstrap css -->
    <link media="all" rel="stylesheet" href="css/bootstrap.css" />
    <!-- include owl css -->
    <link
      media="all"
      rel="stylesheet"
      href="vendors/owl-carousel/owl.carousel.css"
    />
    <link
      media="all"
      rel="stylesheet"
      href="vendors/owl-carousel/owl.theme.css"
    />
    <!-- include main css -->
    <link media="all" rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div class="preloader" id="pageLoad">
      <div class="holder">
        <div class="coffee_cup"></div>
      </div>
    </div>
    <!-- main wrapper -->
    <div id="wrapper">
      <div class="page-wrapper">
        <!-- main header -->
        <header id="header">
          <div class="container-fluid">
            <!-- logo -->
            <div class="logo">
              <a href="index-2.html">
                <img class="normal" src="img/logos/logo4.png" alt="Entrada" />
                <img
                  class="gray-logo"
                  src="img/logos/logo5.jpg"
                  alt="Entrada"
                />
              </a>
            </div>
            <?php include 'nav.php'; ?>
        </header>
        <!-- main banner -->
        <section
          class="banner banner-inner parallax"
          data-stellar-background-ratio="0.5"
          id="banner-contact"
        >
          <div class="banner-text">
            <div class="center-text">
              <div class="container">
                <h1>Feedback Form</h1>
                
                
                <!-- breadcrumb -->
                <nav class="breadcrumbs">
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <!-- main container -->
        <main id="main">
          <!-- main contact information block -->
          <div class="content-block bg-white">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">Feedback</h2>
                <strong class="main-subtitle"
                  >Contact us by email, phone or through our web form
                  below.</strong
                >
                <div class="seperator"></div>
              </header>
              <br>
              <br>
              <br>
       <div class="container">
    <form method="POST" action="send_feedback.php">
      <div class="row">
        <div class="col-25">
          <label for="email">Email Id</label>
        </div>
        <div class="col-75">
          <input type="email" id="email" value="<?php echo $_SESSION['email']; ?>" readonly />
        </div>
        <div class="col-75">
          <input type="hidden" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" />
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="feed_back">Message</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        </div>
      </div>
      <div class="row">
        <input type="submit" name="submit" value="submit" >
  </div>
    </form>
  </div>
  <br>
                <br>
    <?php
    include 'footer.php';
    ?>              



    <!-- jquery library -->
    <script src="vendors/jquery/jquery-2.1.4.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
      function sendEmail()
      {
        Email.send({
          Host : "smtp.gmail.com",
          Username : "darpansarda7@gmail.com",
          Password : "Darpan@123",
          To : 'darpansarda7@gmail.com',
          From : document.getElementById("email").value,
          Subject : "Feedback Form",
          Body : "Message :"+document.getElementById("subject")
      }).then(
        message => alert("message Sent Sucessfully")
      );
      }
      </script>
    <!-- external scripts -->
    <script src="vendors/bootstrap/javascripts/bootstrap.min.js"></script>
    <script src="vendors/jquery-placeholder/jquery.placeholder.min.js"></script>
    <script src="vendors/match-height/jquery.matchHeight.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/stellar/jquery.stellar.min.js"></script>
    <script src="vendors/validate/jquery.validate.js"></script>
    <script src="vendors/waypoint/waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="vendors/fancybox/jquery.fancybox.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jcf/js/jcf.js"></script>
    <script src="vendors/jcf/js/jcf.select.js"></script>
    <script src="vendors/retina/retina.min.js"></script>
    <script src="vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
    <!-- mailchimp newsletter subscriber -->
    <script src="js/mailchimp.js"></script>
    <!-- contact form script -->
    <script src="js/contact-form.js"></script>
    <!-- custom script -->
    <script src="js/jquery.main.js"></script>
  </body>

<!-- Mirrored from html.waituk.com/entrada/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:40 GMT -->
</html>
