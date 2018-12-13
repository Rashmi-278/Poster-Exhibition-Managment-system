
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
    <title>Orbit</title>
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
     <a href="logout.php">logout</a>
    
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
<!-- Banner section Ended-->


<!-- Blog Section Start -->
<section id="contact">
        <div class="container">
               <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                   <h2>Edit poster uploaded for competition</h2>
                   <p data-aos="fade-up" data-aos-delay="500">
                    
                   </p>
                   <form method="post" enctype="multipart/form-data">
                    
                     <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        
                                        <span>upload poster</span>
                                        <input type="file" class="form-control" name="image" id="image"/> 
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <span>poster name</span>
                                        <input type="text" class="form-control"  name="pname" placeholder=" poster name " required/>
                                    </div>
                                </div>
                            </div>
                                    
 
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-primary" />
                   
                  </form> 
                  <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                  
              </div></div></div>
                
                    
                  
                </div>
            </div>
        </div>
    </section>
<!-- Support Section Ended -->
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
<?php 
session_start();
$conn = mysqli_connect('localhost:3306','root','','orbit');
        
        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
          }
if(!$_SESSION['egid'])
    
{
  echo "
        not authorised
    ";
}
$epid=$_SESSION['epid'];
if(isset($_POST["insert"])) 
            
 {  $pname=$_POST['pname'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE `posters` SET `pname`= '$pname',`pimg`='$file' WHERE  pid =$epid;";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("Image edited into Database")</script>';  
      }  }

 ?>