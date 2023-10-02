<?php
session_start();

if(isset($_SESSION['about'])){
    
}
else if(isset($_SESSION['google_user'])){
    
}
else
{
    header('location:login.php');
}
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
      <link rel="stylesheet" href="aboutusn.css" type="text/css">
      <link rel="stylesheet" href="about.css" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
    <title>about us</title>
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item active">
        <a class="nav-link" href="services.php">Our services <span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item active">
        <a class="nav-link" href="aboutusn.php">About us <span class="sr-only">(current)</span></a>
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
      <div class="container-fluid p-5">
         <div class="container">
          <div class="row">
             <div class="col-lg-5 col-md-5 col-sm-12">
              <img id="khokan" src="img/khokan.jpg" alt="khokan gorain" class="img-fluid"/>
              </div>
              <div  class="col-lg-7 col-md-7 col-sm-12 about p-5 h-25">
                  <div class="panel">
               <h2>Hello I am,<br>
                   Khokan Gorain</h2>
                  <p class="justkho text-muted mt-3"><span style="color:orange; text-style:bold;">I</span> <span style="color:orange; text-style:bold;">a</span>m a passionate, friendly, creative, and detail-oriented web developer from Datiyarpur, Dumka. Currently i am pursuing Bachelors in Computer Application from Sido Kanhu Murmu University, Dumka, I have work exprience in web development project's from two years. Apart from this, I am also very interested to develop any kind of android app using java programming language. Because Java is known as one of the most-liked programming languages of our time. It is the most widely-used programming language and is designed for the distributed environment of the Internet. I have done six month Android App development course from Udacity in 2020. Thank You. </p>
                      
                    <div class="text-center mt-5">
                      <a href="https://www.facebook.com/khokan.gorain.12" target="_blank"><i class="fab fa-facebook-square" style="font-size:30px;color: orange"></i></a>
                      <i class="fab fa-instagram-square ml-2" style="font-size:30px;color:orange"></i>
                      <i class="fab fa-twitter-square ml-2" style="font-size:30px;color: orange"></i>
                      <i class="fab fa-linkedin ml-2" style="font-size:30px;color: orange"></i>
                       </div>
                      </div>
              </div>
              
             </div>
          </div>
         </div>
      </section>
      
      <?php 
      if(isset($_SESSION['mail'])){
        ?>
          <p id="passwrong" class="text-center"> <?php echo $_SESSION['mail']; ?></p>
         <?php 
      }
      else
      {
          echo $_SESSION['mail'] ="";
      }
      
      
      ?>
      <section>  
     
          <div class="container">
          
      <div class="row pl-3 pr-3">
                 <div class="col-lg-2 col-md-2 col-sm-2 col-6  font-div text-center text-white py-1" data-toggle="collapse" data-target="#home"  style="background:#2e7d32">
                 <i class="far fa-heart d-block p-2 fa-2x" aria-hidden="true"></i>Hobby
                 </div>
                 <div class="col-lg-2 col-md-2 col-sm-2 col-6  font-div text-center text-white py-1" data-toggle="collapse" data-target="#gradutaion" style="background:#424242">
                 <i class="fa fa-graduation-cap d-block p-2 fa-2x" aria-hidden="true"></i>Education
                 </div>
                 <div class="col-lg-2 col-md-2 col-sm-2 col-6  font-div text-center text-white py-1" data-toggle="collapse" data-target="#skill" style="background:#0277bd">
                    <i class="fa fa-code d-block p-2 fa-2x" aria-hidden="true"></i>Skills
                 </div>
                 <div class="col-lg-2 col-md-2 col-sm-2 col-6  font-div text-center text-white py-1" data-toggle="collapse" data-target="#intrest" style="background:#ad1457">
                    <i class="fa fa-thumbs-up d-block p-2 fa-2x" aria-hidden="true"></i>Interest
                 </div>
                 <div class="col-lg-2 col-md-2 col-sm-2 col-6  font-div  text-center text-white py-1" data-toggle="collapse" data-target="#work" style="background:#f9a825">
            <i class="fa fa-briefcase d-block p-2 fa-2x" aria-hidden="true"></i>Work
          </div>
                 <div class="col-lg-2 col-md-2 col-sm-2 col-6  font-div text-center text-white py-1" data-toggle="collapse" data-target="#message" style="background:#6a1b9a">
            <i class="fa fa-envelope d-block p-2 fa-2x" aria-hidden="true"></i>Message</div>
             </div>
             
              </div>
          
      </section>
      
      <!--Home-->
        <section>
            <div class="container-fluid">
      <div class="container mt-2">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="collapse" id="home">
            <div class="text-white p-5" style="background:#2e7d32">
                <h3 class="text-light">Hobby</h3>
                <p class="just">"When passion meets work, Work becomes hobby."</p>
                <p class="ml-5">-Aniekee Tochukwu Ezekiel</p>
                </div>
      
              <div class="card card-body">
              <div class="pl-3 pr-3">
                  
              <h4 class="text-center bcaa">My Hobby</h4>
                  <hr class="w-25 mx-auto" style="background:orange">
                  <div class="row justify-content-center">
                  <div class="row mt-5">
                          <div class="col-lg-4 col-md-4 col-12 offset-lg-2 offset-md-2">
                          <img src="img/book%20reading.png" alt="book reading" class="img-fluid w-50">
                          </div>
                      <div class="col-lg-6 col-md-6 col-12 ">
                 <h5><span style="color:orange">Book</span> <span style="color:blue">Reading</span></h5>
                  <p class="just">Reading good books is a very good habit that one must develop in life. Good books are informative and improve your knowledge. Reading improves your knowledge and gets you to a whole new level of intellect. Reading makes you wiser and competitive.</p>
                      </div></div>
                  
                      <div class="row mt-5">
                          <div class="col-lg-4 col-md-4 col-12 offset-lg-2 offset-md-2">
                          <img src="img/learning.png" alt="Learning" class="img-fluid w-50">
                          </div>
                          <div class="col-lg-6 col-md-6 col-12">
                     <h5><span style="color:orange">Learning</span> <span style="color:blue">New Technology</span></h5>
                    <p class="just">Technology is basically the way we execute the discoveries of science and blend it with our own needs. Technology is a general term used to refer to the different tools, machines and equipment we use in everyday life. These tools and equipment have been invented by man to make the tasks faster, easier and more comfortable.</p>
                          </div></div>
                          
                          <div class="row mt-5">
                          <div class="col-lg-4 col-md-4 col-12 offset-lg-2 offset-md-2">
                          <img src="img/cycling.png" alt="Learning" class="img-fluid w-50">
                          </div>
                          <div class="col-lg-6 col-md-6 col-12">
                     <h5><span style="color:orange">Cyc</span> <span style="color:blue">ling</span></h5>
                    <p class="just">Cycling is my favourite sports to do whenever i have free time.  Not just because it good for our health, it we also can enjoy the scenery and feel the natural winds.  Most of the time i am cycling with my bestfriend, while we cycling we were chatting or even gossiping about anything.</p>
                  </div>
                          
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
              </div>  
            </div> 
      </div>
      
      </section>
      
       <!--Education-->
        <section>
            <div class="container-fluid">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="collapse" id="gradutaion">
            <div class="text-white p-5" style="background:#424242">
                <h3 class="text-light">Education</h3>
                <p class="just">"Education is not the learning of facts, but the training of the mind to think."</p>
                <p class="ml-5">-Albert Einstein</p>
                </div>
                
                 
              <div class="card card-body">
                  <div class="pl-3 pr-3">
                  <h4 class="text-center bcaa">Bachelors Of Computer Application</h4>
                      <hr class="w-50 mx-auto" style="background:orange">
                  <p class="text-muted just ml-3 mr-3">Bachelors in Computer Application (BCA) is a three-year undergraduate degree course for students who wish to delve into the world of Computer languages. The BCA course is one of the most popular options to get started with a career in Information Technology. A degree in BCA is at par with a B.Tech/B.E degree in Computer Science or Information Technology. For a BCA aspirant, this degree would help in setting up a sound academic base for an advanced career in Computer Applications.</p>
                 </div>
                      <div class=" row p-3 ml-2">
                          <div class="col-lg-6 col-md-6 col-12">
                              <h5 class=""><samp style="color:orange">My Favou</samp> <samp style="color:blue">rite Subject</samp></h5>
                     <ul class="mt-3">
                         <h6>Data Structure</h6>
                          <h6>Operation System</h6>
                          <h6>Computer Network</h6>
                          <h6>Software Enginnering</h6>
                          <h6>Database Managment System</h6>
                          <h6>Internet Technologies</h6>
                          <h6>Artificial Intelligent</h6>
                          <h6>Computer Graphics</h6>
                          <h6>Data Mining</h6>
                      </ul>
                    </div> 
                    
                 
                  <div class="col-lg-6 col-md-6 col-12">
                       <h5 class=""><samp style="color:orange">Educ</samp> <samp style="color:blue">ation</samp></h5>
                      <div class="mt-3">
                  <p class="justkho">2017-Present <samp style="text-style:bold">BCA</samp><br>
                 Sido Kanhu Murmu University, Dumka <br><br>
                      2015-2017  <samp style="text-style:bold">Class 12</samp><br>
                      +2 Zila School Dumka <br><br>
                      2015 <samp style="text-style:bold">Class 10</samp><br>
                      Utkramit High School Mohanpur, Masalia.
                    </p>
                  </div>
                  </div>
                  </div>
                </div>
              </div>
          </div>
          </div>
            </div>
            </div>
   
      
      </section>
      
       <!--skill-->
        <section>
            <div class="container-fluid">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="collapse" id="skill">
            <div class="text-white p-5" style="background:#0277bd">
                <h3 class="text-white">Skills</h3>
                <p class="just">"Build your skills, not your resume."</p>
                <p class="ml-5">-Sheryl Sandberg</p>
                </div>
                
                 
              <div class="card card-body">
                  <div class="pl-3 pr-3">
              <h4 class="text-center bcaa">My Programming Skills</h4>
                      <hr class="w-25 mx-auto" style="background:orange">
                  <P class="text-muted ml-3 mr-3 just">Computer programmer skills are methods and processes that provide computers with instructions on what actions to perform. Collectively known as “code”, these instructions are written by computer programmers in order to solve problems or perform specific tasks.</P>
              </div>
                  <div class="pt-3 pl-5 pr-5">
                    
                  <div class="p-2">
                    <h6>HTML</h6>
                     <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 65%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  </div>
                      
                  <div class="p-2">
                    <h6>CSS</h6>
                     <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 55%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div></div>
                      
                      <div class="p-2">
                      <h6>JAVASCRIPT</h6>
                     <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 43%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></div>
                      
                      <div class="p-2">
                      <h6>JQUERY</h6>
                     <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 26%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></div>
                      
                      <div class="p-2">
                      <h6>PHP</h6>
                     <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 46%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></div>
                      
                      <div class="p-2">
                      <h6>C</h6>
                     <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></div>
                      
                      <div class="p-2">
                      <h6>C++</h6>
                     <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 49%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></div>
                      
                      <div class="p-2">
                      <h6>JAVA</h6>
                     <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width:57%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></div>
                      
                      <div class="p-2">
                      <h6>KOTLIN</h6>
                     <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></div>
                      
                      
                  
                  </div>
              </div>
          </div>
          </div>
            </div>
                </div>
            </div>
      
      </section>
      
       <!--intrest-->
        <section>
            <div class="container-fluid">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="collapse" id="intrest">
            <div class="text-white p-5" style="background:#ad1457">
                <h3 class="text-light">Interest</h3>
                <p class="just">"Interest is the most important thing in life, happiness is temporary, but interest is continuous."</p>
                <p class="ml-5">-Georgia O'Keeffe</p>
                </div>
                
                 
              <div class="card card-body">
                  <div class="pl-3 pr-3">
              <h4 class="bcaa text-center">My Interest</h4>
                      <hr class="w-25  mx-auto" style="background:orange">
                  <p class="text-muted ml-3 mr-3 just">I am very interested to solving the daily problems of human life with the help of Android App. Apart from this, I  like to do competitive coding. java is my favourite  programming language. Because Java is a object oriented programming language as well as platform independent. I am interested to know and learn about new technology, computer, universe, physics. Because I think that everything in the universe is connected to something.</p>
              </div>
                  <div class="intrest">
                      <div class="row justify-content-center mt-4">
                          <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-3">
                  <div class="card sha" style="width:18rem;">
                      <img class="card-img-top" src="img/andlogo.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title text-warning">Android App</h5>
                            <p class="card-text just text-muted mb-3">Using Java, Kotlin and Flutter.</p>
                       
                      </div>
                      </div>
                      </div>
                      
                      <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-3">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                   <div class="carousel-item active">
                    
                    <div class="card sha" style="width: 18rem;">
                      <img class="card-img-top" src="img/khokan.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title text-warning">Coding</h5>
                            <p class="card-text just text-muted"></p>
                        
                      </div>
                      </div>
                    
                </div>
                          
                          
                <div class="carousel-item">
                
                    <div class="card sha" style="width: 18rem;">
                      <img class="card-img-top" src="img/khokan.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title text-warning">CyberSecurity</h5>
                            <p class="card-text just text-muted"></p>
            
                      </div>
                      </div>
                     </div>
                       </div>  
                 </div>
             </div>
                  
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-3">
                      <div class="card sha" style="width: 18rem;">
                      <img class="card-img-top h-75" src="img/weblogo.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title text-warning">Website Design</h5>
                            <p class="card-text just text-muted">Using html, css, javascript, bootstrap and php.</p>
            
                      </div>
                      </div>
                      
           </div>       
              </div>
                  </div>
              </div>
          </div>
          </div>
            </div>
            </div>
            </div>
      </section>
      
       <!--work-->
        <section>
            <div class="container-fluid">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="collapse" id="work">
            <div class="text-white p-5" style="background:#f9a825">
                <div class="">
                <h3 class="text-light">Work</h3>
                <p class="just">"Well begun is half done."</p>
                    <p class="ml-5">-Aristotle</p>
                 
                </div></div>  
                 
              <div class="card card-body">
                  <div class="pl-3 pr-3">
              <h4 class="text-center bcaa">My Work</h4>
                      <hr class="w-25  mx-auto" style="background:orange">
                  <p class="text-muted ml-3 mr-3 just">I am a computer programmer with knowledge of variou programming language like c, c++, java, javascript and php. I have created all these apps with the help of Java programming language. I love my work.</p>
                  </div>
                  
                  <div class="intrest mt-4">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-3">
                  <div class="card sha" style="width: 18rem;">
                      <img class="card-img-top" src="img/covid.jpg" alt="Card image cap">
                      </div>
                      </div>
                      
                      <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-3">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                   <div class="carousel-item active">
                    
                    <div class="card sha" style="width: 18rem;">
                      <img class="card-img-top" src="img/11111.jpg" alt="Card image cap">
                      </div>
                    
                </div>
                        
                        
                        <div class="carousel-item">
                    
                    <div class="card sha" style="width: 18rem;">
                      <img class="card-img-top" src="img/22222.jpg" alt="Card image cap">
                      </div>
                    
                </div>
                          
                <div class="carousel-item">
                
                    <div class="card sha" style="width: 18rem;">
                      <img class="card-img-top" src="img/33333.jpg" alt="Card image cap">
                      </div>
                     </div>
                        <div class="carousel-item">
                
                    <div class="card sha" style="width: 18rem;">
                      <img class="card-img-top" src="img/4444.jpg" alt="Card image cap">
                      </div>
                     </div>
                        
                       </div>  
                 </div>
             </div>
                  
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-3">
                      <div class="card sha" style="width: 18rem;">
                      <img class="card-img-top" src="img/singh.jpg" alt="Card image cap">
                      </div>
                      
           </div>       
              </div>
                  </div>
              
              </div>
          </div>
          </div>
            </div>
            </div>
      </div>
      
      </section>
      
       <!--Message-->
        <section>
            <div class="container-fluid">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="collapse" id="message">
            <div class="text-white p-5" style="background:#6a1b9a">
                <h3 class="text-light">Contact</h3>
                <p class="just">If you have any query. Than contact us. And please given your feedback.</p>
                </div>
                
                 
              <div class="card card-body">
                  
                 <div class="row justify-content-center">
                  <div class="col-lg-8 col-md-8 col-12">
                     <form action="mail_send.php" method="post">
                      <div class="form-group">
                         <div class="input-group input-group-lg">
                          <span class="input-group-addon  text-white p-3" style="background:#6a1b9a">
                             <i class="fa fa-user"></i>
                             </span>
                             <input type="text" name="user" class="form-control bg-dark text-white" placeholder="Enter Your Name"/>
                          </div>
                         </div>
                         
                         <div class="form-group">
                         <div class="input-group input-group-lg">
                          <span class="input-group-addon  text-white p-3" style="background:#6a1b9a">
                             <i class="fa fa-envelope"></i>
                             </span>
                             <input type="text" name="email" class="form-control bg-dark text-white" placeholder="Enter Your Email"/>
                          </div>
                         </div>
                         
                         <div class="form-group">
                         <div class="input-group input-group-lg">
                          <span class="input-group-addon text-white p-3" style="background:#6a1b9a">
                             <i class="fa fa-envelope"></i>
                             </span>
                             <input type="text" name="msg" class="form-control bg-dark text-white" placeholder="Write Message"/>
                          </div>
                         </div>
                         
                         <input type="submit" class="btn text-white" value="Send" style="background:#6a1b9a"/>
                      </form>
                     </div>
                  </div>
              
              
              </div>
          </div>
          </div>
            </div>
            </div>
      </div>
      
      </section>
     
      <!--prime membership plan-->
      
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
      
      <script>
      $('.font-div').click(function(){
         $('.collapse').collapse('hide'); 
      });
      </script>
          
  </body>
</html>

<?php

?>
