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
<!DOCTYPE html>
<html>
  
<!-- Mirrored from html.waituk.com/entrada/city-tour.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:37 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Dubai</title>
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
              <a href="">
                <img class="normal" src="img/logos/logo4.png" alt="Entrada" />
                <img
                  class="gray-logo"
                  src="img/logos/logo5.jpg"
                  alt="Dubai Tourism"
                />
              </a>
            </div>
            <?php include 'nav.php'; ?>
        </header>
        <!-- main banner -->
        <section
          class="banner banner-inner parallax"
          data-stellar-background-ratio="0.5"
          id="activity-city-tour"
        >
          <div class="banner-text">
            <div class="center-text text-center">
              <div class="container">
                <h1>Dubai City</h1>
                <strong class="subtitle"
                  >The modern City</strong
                >
              </div>
            </div>
          </div>
        </section>
        <!-- main container -->
        <main id="main">
          <div class="content-intro">
            <div class="container">
              <div class="row">
              </div>
            </div>
          </article>
          <!-- recent block -->
          <br>
      <center><img src="about_dubai/3.jpg" height="70%" width="40%">                  
      <img src="about_dubai/1.jpg" height="80%" width="40%"></center>
      <br>
      <h2><b>Dubai</b> </h2>
      <p>Dubai, Gulf Arabic pronunciationis the most populous city in the United Arab Emirates (UAE) and the capital of the Emirate of Dubai. Established in the 18th century as a small fishing village, the city grew rapidly in the early 21st century into a cosmopolitan metropolis with a focus on tourism and hospitality. Dubai is one of the world's most popular tourist destinations. It has the second most five-star hotels in the world and the tallest building in the world, the Burj Khalifa.

        Located in the eastern part of the Arabian Peninsula on the coast of the Persian Gulf, Dubai aims to be the business hub of Western Asia. It is also a major global transport hub for passengers and cargo. Oil revenue helped accelerate the development of the city, which was already a major mercantile hub. A centre for regional and international trade since the early 20th century, Dubai's economy relies on revenues from trade, tourism, aviation, real estate, and financial services. Oil production contributed less than 1 percent of the emirate's GDP in 2018. According to government data, the population of Dubai is estimated at around 3,456,058 as of 2021
      
        </p>
        <br>
        <br>
       <center> <img src="about_dubai/2.jpg" height="70%" width="40%"></center>                  
        <h4><b>Establishment of modern Dubai</b></h4>
<p>
Al Fahidi fort in the 1950s
Dubai is thought to have been established as a fishing village in the early 18th century and was, by 1822, a town of some 700–800 members of the Bani Yas tribe and subject to the rule of Sheikh Tahnun bin Shakhbut of Abu Dhabi.

In 1833, following tribal feuding, members of the Al Bu Falasah tribe seceded from Abu Dhabi and established themselves in Dubai. The exodus from Abu Dhabi was led by Obeid bin Saeed and Maktoum bin Butti, who became joint leaders of Dubai until Ubaid died in 1836, leaving Maktum to establish the Maktoum dynasty.

Dubai signed the General Maritime Treaty of 1820 with the British government along with other Trucial States, following the British campaign in 1819 against the Ras Al Khaimah. This led to the 1853 Perpetual Maritime Truce. Dubai also like its neighbours on the Trucial Coast entered into an exclusivity agreement in which the United Kingdom took responsibility for the emirate's security in 1892.


Al Fahidi Fort, built-in 1787, houses the Dubai Museum
In 1841, a smallpox epidemic broke out in the Bur Dubai locality, forcing residents to relocate east to Deira. In 1896, fire broke out in Dubai, a disastrous occurrence in a town where many family homes were still constructed from barasti palm fronds. The conflagration consumed half the houses of Bur Dubai, while the district of Deira was said to have been totally destroyed. The following year, more fires broke out. A female slave was caught in the act of starting one such blaze and was subsequently put to death.


A watchtower in Bur Dubai, c. 19th century
In 1901, Maktoum bin Hasher Al Maktoum established Dubai as a free port with no taxation on imports or exports and also gave merchants parcels of land and guarantees of protection and tolerance. These policies saw a movement of merchants not only directly from Lingeh, but also those who had settled in Ras Al Khaimah and Sharjah to Dubai. An indicator of the growing importance of the port of Dubai can be gained from the movements of the steamer of the Bombay and Persia Steam Navigation Company, which from 1899 to 1901 paid five visits annually to Dubai. In 1902 the company's vessels made 21 visits to Dubai and from 1904 on,[34] the steamers called fortnightly – in 1906, trading seventy thousand tonnes of cargo.[35] The frequency of these vessels only helped to accelerate Dubai's role as an emerging port and trading hub of preference. Lorimer notes the transfer from Lingeh 'bids fair to become complete and permanent',[33] and also that the town had by 1906 supplanted Lingeh as the chief entrepôt of the Trucial States.

The 'great storm' of 1908 struck the pearling boats of Dubai and the coastal emirates towards the end of the pearling season that year, resulting in the loss of a dozen boats and over 100 men. The disaster was a major setback for Dubai, with many families losing their breadwinner and merchants facing financial ruin. These losses came at a time when the tribes of the interior were also experiencing poverty. In a letter to the Sultan of Muscat in 1911, Butti laments, 'Misery and poverty are raging among them, with the result that they are struggling, looting and killing among themselves'.

In 1910, in the Hyacinth incident the town was bombarded by HMS Hyacinth, with the loss of 37 killed.
      </p>
     <center> <img src="about_dubai/4.jpg" height="70%" width="40%">                  
      <img src="about_dubai/5.jpg" height="70%" width="40%"></center> 
      <br>                
      <h4><b>Modern Dubai</b></h4>
      <p>
        Dubai Palm Jumeirah and Marina in 2011
        During the 1970s, Dubai continued to grow from revenues generated from oil and trade, even as the city saw an influx of immigrants fleeing the Lebanese civil war.Border disputes between the emirates continued even after the formation of the UAE; it was only in 1979 that a formal compromise was reached that ended disagreements.The Jebel Ali port, a deep-water port that allowed larger ships to dock, was established in 1979. The port was not initially a success, so Sheikh Mohammed established the JAFZA (Jebel Ali Free Zone) around the port in 1985 to provide foreign companies unrestricted import of labour and export capital.Dubai airport and the aviation industry also continued to grow.
        
        The Gulf War in early 1991 had a negative financial effect on the city, as depositors withdrew their money and traders withdrew their trade, but subsequently, the city recovered in a changing political climate and thrived. Later in the 1990s, many foreign trading communities—first from Kuwait, during the Gulf War, and later from Bahrain, during the Shia unrest—moved their businesses to Dubai.Dubai provided refuelling bases to allied forces at the Jebel Ali Free Zone during the Gulf War, and again during the 2003 Invasion of Iraq. Large increases in oil prices after the Gulf War encouraged Dubai to continue to focus on free trade and tourism.</p>
  

        <?php
        include 'footer.php';
        ?>
    </div>
    <!-- scroll to top -->
    <div class="scroll-holder text-center">
      <a href="javascript:" id="scroll-to-top"
        ><i class="icon-arrow-down"></i
      ></a>
    </div>
    <!-- jquery library -->
    <script src="vendors/jquery/jquery-2.1.4.min.js"></script>
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
    <!-- custom script -->
    <script src="js/jquery.main.js"></script>
  </body>

<!-- Mirrored from html.waituk.com/entrada/city-tour.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 06:50:38 GMT -->
</html>
