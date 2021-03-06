<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <title>orbit</title>
    <style>
        .banner-home .col-1 {padding-top: 30px;padding-bottom: 20px;}
        .banner-home .col-1 a img {padding-bottom: 35px;}
    </style>
  </head>
  <body>

<!-- Header section Start-->
<!-- Header section Start-->
<header class="top">
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
    <a class="active" href="about.html">About</a>
    
    <a href="Poster.php">Posters</a>
    <a href="support.html">Helps</a>
    <a href="contact.html">Contact</a>
  </div>

<nav id="navbar">
   <!-- container Start-->
    <div class="container">
       <!--Row Start-->
       <div class="row">
        <div class="col-lg-4 col-6">
          <a href="index.php"><img src="images/logo.png" alt="logo"></a>
        </div>
         <div class="col-lg-8 col-6">
            <div class="social-icons square">
              <!-- Page Content -->
              <div id="page-content-wrapper">
                  <span class="slide-menu" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
              </div>
            </div>
         </div>
       </div>
       <!--Row Ended-->
    </div>
   <!-- container Ended-->
</nav>
</header>
<!-- Header section Ended-->
<section class="banner-home">
<!-- Banner section Start-->

       <!-- container Start-->
        <div class="container-fluid">
           <!--Row Start-->
            <div class="row">
                <div class="col-lg-5 col-sm-5 col-12 col-1">
                  <div class="gradient"></div>
                  <div class="left-content">
                </div>
                </div>
            </div>
           <!--Row Ended-->
        </div>
       <!-- container Ended-->
</section>

<section class="blog-page">
    <div class="container">
       <div class="heading">
           <h2>Schedule</h2>
           <h2>VENUE : 204/3rd block-Koramangala,Bengaluru @ 9am</h2>
       </div>
        
        <div class="row">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orbit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `title`, `dos` FROM `sessions` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h2><br> title:<br> ". $row["title"]. " <br> date:<br> ". $row["dos"] . "<br></h2>";
    }
} else {
    echo "0 results";
}

$ql = "CALL `get_judges`();";
$reesult = $conn->query($ql);

if ($reesult->num_rows > 0) {
    // output data of each row
    echo "<b><br>Judges are :  <br></b>";
    while($row = $reesult->fetch_assoc()) {
        echo "<br> first name: ". $row["fname"]. " <br> last name: ". $row["lname"] . "<br> Affiliation:   ". $row["affil"] . "<br>". $row["jemail"] . "<br>" ;
    }
} else {
    echo "0 results";
}






$conn->close();
?> 
</div></div></section>
<!-- Footer -->
    <footer>
        <div class="gradient"></div>
        


        <!-- Footer Links -->
        <div class="container">
                   <!-- Grid row-->
             <div class="row text-center d-flex justify-content-center">
                 <!-- Grid column -->
                 <div class="col-md-12">
                     <a href="index.php"><img src="images/logo.png" alt="footer-logo"></a>
                 </div>
                 <!-- Grid column -->
                 </div>
            <div class="row text-center d-flex justify-content-center">
                <!-- Grid column -->
                <div class="col-md-12">

                    <ul>
                        <li class="nav-item"><a class="page-scroll nav-link" href="index.php">Home</a></li>
                        <li class="hidden">|</li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="about.html">About </a></li>
                        <li class="hidden">|</li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="Poster.php">Posters</a></li>
                        <li class="hidden">|</li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="contact.html">contact</a></li>
                        <li class="hidden">|</li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="support.html">Help</a></li>
                    </ul>
                </div>
            </div>
            <!-- Grid row-->
            <div class="row d-flex text-center justify-content-center mb-md-0">

                <!-- Grid column -->
                <div class="col-md-8 col-12">
                    <address>
              <p><span>204/3rd block-Koramangala,Bangalore , India </span>
              <span>Opening Hours : Mo-Fr 11 am-11 pm, Sa-Su 10 am- 11pm</span>
              <span class="call">Call for registrations : 800 1234 56789</span></p>
          </address>
                    
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Links -->

    </footer>
    <!-- Footer -->
   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
    </script>
  </body>
</html>