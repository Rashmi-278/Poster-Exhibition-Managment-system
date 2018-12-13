
<?php
session_start();
if($_SESSION['gid'])
{
    echo "<script>
                            alert(' Registerion ID:  " .$_SESSION['gid'] .   "');
                          
                        </script>";
}
?>

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
</head>

<body>
    <!-- Header section Start-->
    <header class="top">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="active" href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="Poster.php">Poster</a>
            <a href="support.html">Help</a>
            <a href="contact.html">Contact</a>
            <a href="register.php">Register</a>
            <a href="results.html">Results</a>
            <a href="judgelogin.html">judge login</a>
            <a href ="disp_Esession.php">display sessions</a>
            <a href="test.php">testing</a>
        </div>

        <nav id="navbar">
            <!-- container Start-->
            <div class="container">
                <!--Row Start-->
                <div class="row">
                    <div class="col-lg-4 col-9 logo">
                        <a href="index.php"><img src="images/logo.png" alt="logo"></a>
                    </div>
                    <div class="col-lg-8 col-3">
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
                    <div class="left-content" data-aos="fade-up" data-aos-delay="300">
                        <h2><span> posters that bring change</span>
                          
                            <span class="space">//</span></h2>
                        <p>Art is an expression which can have colosal impact on people</p>
                        <p>We are  an organisation which provides graphics designers a oppurtunity to make an impact on world by their art</p>
                        
                        <h6><i class="fa fa-map-marker" aria-hidden="true"></i><span>204/3rd block-Koramangala,Bengaluru</span></h6>
                        
                        <h6><i class="fa fa-phone" aria-hidden="true"></i><span>800 1234 56789</span></h6>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-7 col-12 col-2" data-aos="fade-left" data-aos-delay="300">
                    <h1><span></span>
                        <span> Orbit Global Exhibit 2018</span>
                        <span></span></h1>
                    <div class="more-button">
                        <a href="register.php" class="btn btn-primary btn-lg">register</a>
                        
                    </div>
                </div>
            </div>
            <!--Row Ended-->
        </div>
        <!-- container Ended-->
    </section>
    <!-- Banner section Ended-->

    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12 col-12" data-aos="fade-up" data-aos-delay="300">
                    <h2>About <span>folio plus</span></h2>
                    <p>One of the finest food and restaurant theme on the net, cleaniest and simplistic wordpress theme, browse it and experience it Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    <p>Dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                    <div class="more-button">
                        <a href="php/disp_Esession.php" class="btn btn-primary btn-lg">view sessions</a>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    

    
    <!-- Footer -->
    <footer>
        <div class="gradient"></div>
        


        <!-- Footer Links -->
        <div class="container">
                   <!-- Grid row-->
             <div class="row text-center d-flex justify-content-center">
                 <!-- Grid column -->
                 <div class="col-md-12">
                     <a href="index.html"><img src="images/logo.png" alt="footer-logo"></a>
                 </div>
                 <!-- Grid column -->
                 </div>
            <div class="row text-center d-flex justify-content-center">
                <!-- Grid column -->
                <div class="col-md-12">

                    <ul>
                        <li class="nav-item"><a class="page-scroll nav-link" href="index.html">Home</a></li>
                        <li class="hidden">|</li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="about.html">About </a></li>
                        <li class="hidden">|</li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="poster.html">Posters</a></li>
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

    <!-- BackToTop Button -->
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>

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
<?php
session_destroy();
 ?>