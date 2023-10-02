<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="icon" href="img/icon.ico" type="image">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- css-->
      <link rel="stylesheet" href="style.css" type="text/css">
      <link rel="stylesheet" href="main.js" type="text/css">
      
      <!--fonts-->
      <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,200&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,300&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Lemonada&display=swap" rel="stylesheet"> 
      
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
    <title>home</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark color">
    <img src="img/logo.png" width="80" height="40" alt="Logo">    
  <p class="navbar-brand domainname">Khokan Gorain</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link hov" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item active">
        <a class="nav-link" href="services.php">Our services <span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item active">
        <a class="nav-link" href="aboutus.php">About us <span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact us <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
   <a href="login.php">  <button type="button" class="btn btn-outline-light ml-3">Login</button> </a>
   <a href="logout.php">   <button type="button" class="btn btn-outline-light ml-3">Logout</button> </a>
  </div>
</nav>
      
      <!--carosel-->
      
      <header>
          <div class="caro_sel">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/carosel2.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/carosel1.png" alt="Second slide">
                            </div>
                             <div class="carousel-item">
                                <img class="d-block w-100" src="img/carosel3.png" alt="Third slide">
                             </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/carosel4.jpg" alt="Fourth slide">
                             </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                </div>
    </header>
      <!--vision-->
      <section>
          <div class="container-fluid bgourservices">
      <div class="container">
          <h2 class="text-center pt-5">Our Vision</h2>
          <hr class="w-25 mx-auto" style="background:orange">
          <div class="row p-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
              <p class="khokan">There is a solution to every problem in this technology world. And it is our duty to keep you and your business moving forward with this technology. Because we know that the best technology is only as good as the people behind it. And it is an organization where your business is carried forward with the help of website, Android app, graphics design, Microsoft Office, editing. Our goal is to make your life simple and easy in this digital world.</p>
              </div>
          <div class="col-lg-6 col-md-6 col-sm-12 text-center">
              <img src="img/vision.png" class="img-fluid w-100">
              </div>
          </div>
          
          </div>
              </div>
      </section>
      
      
      
      <!--Footer-->
          <!--contact us -->
      <section>
           <div class="container-fluid bg-dark ">
              <div class="container">   
              <div class="row pt-5 pb-5">
                   <div class="col-lg-6 col-md-12 col-sm-12 ">  
                       <h3 class="mb-3">Services</h3>
                       <p class="text-white just">All types of websites, Android applications, graphics design work are done very easily here. Apart from this, the work of editing, Microsoft Office, banner design, poster design, YouTube channel, video editing, uploading video and YouTube channel ranking etc. are also done. If you want to get any kind of website, Android application, graphics design and other work done then contact us. Our team will always help you.</p>
                     
                    
                  </div>
                  
                  <div class="col-lg-4 col-md-12 col-sm-12 offset-lg-1">  
                      <h3 class="mb-3">Contact us</h3>
                   
                           <p class="text-white"> <i class='fas fa-map-marker-alt' style='font-size:20px;color:#4cb912'></i> &nbsp;&nbsp;&nbsp;&nbsp;Datiyarpur Dumka Jharkhand</p>
                    
                           <p class="text-white"><i class="fas fa-phone-alt" style='font-size:20px;color:#47af0f'></i>&nbsp;&nbsp;&nbsp;&nbsp;+916299013991</p>
                            
                           <p class="text-white"><i class="fas fa-envelope" style="font-size:20px;color:#ea3b3b"></i>&nbsp;&nbsp;&nbsp;&nbsp;support@khokangorain.com</p> 
                        
                           <p class="text-white"><i class="far fa-clock" style="font-size:20px;color:#2196F3"></i>&nbsp;&nbsp;&nbsp;&nbsp;Mon-Fri 10:00 AM to 04:00 PM</p>
                             
                      </div>
                  </div>
                  </div>
                  </div>
              </section>
      
      <!--footer-->
      <section>
      <div class="contaner-fluid bg-dark pb-4">
          <div class="contaner text-center">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <a href="https://www.facebook.com/khokan.gorain.12" target="_blank"><i class="fab fa-facebook-square text-white " style="font-size:30px"></i></a>
                      <i class="fab fa-instagram-square text-white ml-2" style="font-size:30px"></i>
                      <i class="fab fa-twitter-square text-white ml-2" style="font-size:30px"></i>
                      <i class="fab fa-linkedin text-white ml-2" style="font-size:30px"></i>
                      </div>
                  
                  </div>
          </div>
          </div>
      </section>
        <!--footer--> 
    <section>
      <div class="contaner-fluid bg-primary p-4">
        <div class="contaner">
          <p class="text-center text-white">Copyright © 2020 All Rights Reserved | Powerd by khokan gorain</p>
          
          </div>
        </div>
      </section>
      
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>