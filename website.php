<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
      <!--fonts-->
      <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,200&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,300&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Lemonada&display=swap" rel="stylesheet"> 
      
     <!-- css-->
      <link rel="stylesheet" href="website.css" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image">
     
      
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
    <title>website</title>
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
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>
         <li class="nav-item active dropdown">
             <div class="dropdown" id="anc">
              <a class="nav-link " href="#">Our services <span class="sr-only"></span></a>
                 <div class="dropdown-content">
                     <a class="nav-link" href="website.php">Web Design<span class="sr-only"></span></a>
                     <a class="nav-link" href="android.php">Android App<span class="sr-only"></span></a>
                     <a class="nav-link" href="youtube.php">Youtube<span class="sr-only"></span></a>
                     <a class="nav-link" href="graphics.php">Gui Design<span class="sr-only"></span></a>
                     <a class="nav-link" href="services.php">Our Services<span class="sr-only"></span></a>
                 </div>
             </div>
      </li>
             
         <li class="nav-item active">
        <a class="nav-link" href="aboutus.php">About us <span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact us <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <a href="login.php"> <button type="button" class="btn btn-outline-light ml-3">Login</button> </a>
    <a href="logout.php">  <button type="button" class="btn btn-outline-light ml-3">Logout</button> </a>
  </div>
</nav>
      
      <!--our services-->
      <section>
          <div class="container-fluid bgourservices">
      <div class="container">
          <h2 class="text-center pt-5">Website</h2>
          <hr class="w-25 mx-auto" style="background:orange">
          <div class="row p-3" id="first-letter">
          <div class="col-lg-6 col-md-6 col-sm-12">
              <p class="just">A website is a collection of web pages and related content that is identified by a common domain name and published on at least one web server. Notable examples are wikipedia.org, google.com, and amazon.com.<br>

All publicly accessible websites collectively constitute the World Wide Web. There are also private websites that can only be accessed on a private network, such as a company's internal website for its employees.Websites are typically dedicated to a particular topic or purpose, such as news, education, commerce, entertainment, or social networking. Hyperlinking between web pages guides the navigation of the site, which often starts with a home page.</p>
              </div>
          <div class="col-lg-6 col-md-6 col-sm-12 text-center mb-4">
              <img src="img/websitew.jpg" class="img-fluid w-75">
              </div>
          </div>
          
          </div>
              </div>
      </section>
      
      <!--use techonology-->
      <section>
      <div class="container-fluid p-5 usetechonolog">
          <div class="container">
              <h2 class="text-center">Use Technology</h2>
          <hr class="w-25 mx-auto" style="background:orange">
              
              <div class="row mt-5">
                  <div class="col-lg-6 col-md-6 col-sm-12 text-center">
              <img src="img/htmlcssjs.png" alt="Front-end" class="img-fluid w-75">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
              <h3 class="text-primary">FRONT-END</h3>
                  <p class="justkho">The front end of a website is the part that users interact with. Everything that you see when you’re navigating around the Internet, from fonts and colors to dropdown menus and sliders, is a combo of HTML, CSS, and JavaScript being controlled by your computer’s browser.</p>
              </div>
              </div>
              <div class="row">
                  
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h4 class="">HTML</h4>
                  <p class="just">Hypertext Markup Language (HTML) is the standard markup language for documents designed to be displayed in a web browser. Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document</p>
                  </div></div>
                  
              <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h4 class="">CSS</h4>
                  <p class="just">Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language like HTML. CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts.</p>
                  </div></div>
                  
              <div class="row">
              <div class="col-lg-12 col-md-12 col-12">
                  <h4 class="">JAVASCRIPT</h4>
                  <p class="just">JavaScript is one of the core technologies of the World Wide Web. JavaScript enables interactive web pages and is an essential part of web applications. The vast majority of websites use it for client-side page behavior,and all major web browsers have a dedicated JavaScript engine to execute it.</p>
                  </div>
                  
              </div>
               <hr class="bg-warning">
              
              <div class="row mt-5">
                   <div class="col-lg-6 col-md-6 col-sm-12 text-center">
              <img src="img/phpjava.png" alt="Front-end" class="img-fluid w-75">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
              <h3 class="text-primary">BACK-END</h3>
                  <p class="justkho">So what makes the front end of a website possible? Where is all that data stored? This is where the back end comes in. The back end of a website consists of a server, an application, and a database. A back-end developer builds and maintains the technology that powers those components which, together, enable the user-facing side of the website to even exist in the first place.</p>
              </div>
             
              </div>
             
              <div class="row">
                  
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h4 class="frontend">PHP</h4>
                  <p class="just">PHP is a general-purpose scripting language that is especially suited to web development.It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor</p>
                  </div></div>
              
              <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h4 class="frontend">JAVA</h4>
                  <p class="just">Java is a programming language and computing platform first released by Sun Microsystems in 1995. There are lots of applications and websites that will not work unless you have Java installed, and more are created every day. Java is fast, secure, and reliable. From laptops to datacenters, game consoles to scientific supercomputers, cell phones to the Internet, Java is everywhere!</p>
                  </div></div>
              
              <hr class="bg-warning">
              
              <div class="row mt-5">
                  <div class="col-lg-6 col-md-6 col-sm-12 text-center">
              <img src="img/database.png" alt="Front-end" class="img-fluid w-75">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
              <h3 class="text-primary">DATABASE</h3>
                  <p class="justkho">A database is an organized collection of data, generally stored and accessed electronically from a computer system. Where databases are more complex they are often developed using formal design and modeling techniques.
                  The database management system (DBMS) is the software that interacts with end users, applications, and the database itself to capture and analyze the data. The DBMS software.</p>
              </div>
              
              </div>
              <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h4 class="frontend">MYSQL</h4>
                  <p class="just">MySQL is an open-source relational database management system (RDBMS). Its name is a combination of "My", the name of co-founder Michael Widenius's daughter,and "SQL", the abbreviation for Structured Query Language. A relational database organizes data into one or more data tables in which data types may be related to each other; these relations help structure the data. SQL is a language programmers use to create, modify and extract data from the relational database, as well as control user access to the database.</p>
                  </div></div>
             <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h4 class="frontend">MONGODB</h4>
                  <p class="just">MongoDB is a cross-platform document-oriented database program. Classified as a NoSQL database program, MongoDB uses JSON-like documents with optional schemas. MongoDB is developed by MongoDB Inc. and licensed under the Server Side Public License (SSPL).</p>
                  </div></div>
         
          </div>
          </div>
      </section>
      
      <!--Provides services-->
      <section>
          <div class="container-fluid p-5 provideservicesbg">
          <div class="container">
              <h2 class="text-center">Services</h2>
            <hr class="w-25 mx-auto" style="background:orange">
              <div class="row mt-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <p class="justkho text-white">If you take services from our place then you will be provided many facilities. Also, if you need more services, you can also get a premium membership plan. These services are something like this...</p>
             </div>
          </div>
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-1 offset-md-1" id="liste">
                  <ul>
                      <li>Full web design blue-print.</li>
                      <li>A Responseway Website. Which will open well on any computer, tablet or mobile.</li>
                      <li>Your website will be updated every month.</li>
                      <li>100% secure and safe.</li>
                      <li>We are responsible for getting domain name and hosting.</li>
                      <li>An attractive logo will also be designed.</li>
                      <li>Don't worry if you are not from technical background.</li>
                      <li>The entire website will be created and hosted online.</li>
                      <li>A professional email will be made.</li>
                      <li>If you have any questions, contact us.</li>
                  </ul>
                  </div>
                     <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-1 offset-md-1 text-center">
                    <img src="img/sedness.png" class="img-fluid w-100 mt-2">
                  </div>

              </div>
        </div>
    </div>
      </section>
     
      <!--prime membership plan-->
      <section>
          <div class="container-fluid bg-success p-5">
          <div class="container">
              <h2 class="text-center">Premium Plan</h2>
              <hr class="w-25 mx-auto" style="background:orange">
              <div class="row mt-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <p class="justkho text-white">If you take our premium membership plan then you will be provided with all these facilities. These services are something like this...</p>
             </div>
          </div>
              <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-1 offset-md-1" id="liste">
                 <ul>
                     <li>Lifetime services.</li>
                     <li>Your website will be updated from time to time.</li>
                     <li>Your website will be linked with Google AdSense.</li>
                     <li>Your website will be ranked on Google</li>
                     <li>An Android app will be designed for your website.</li>
                  </ul>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-1 offset-md-1 text-center">
                  <img src="img/happyness.png" class="img-fluid w-100">
                  </div>
              </div>
            </div>
          </div>
      </section>
      
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
      
          
  </body>
</html>