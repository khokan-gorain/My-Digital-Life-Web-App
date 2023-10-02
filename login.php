<?php

include('config.php');

$login_button = '';

if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
      $username = $data['given_name'];
  }
     
     if(!empty($data['id']))
  {
   $_SESSION['client_id'] = $data['id'];
         $userid = $data['id'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
      $userlastname = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
      $emailid = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
      $gender = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{
   $login_button = '<a href="'.$google_client->createAuthUrl().'">
   
   <center> <div class="google">
                     <img src="img/googlebg.png" />
                      </div></center>
   
   </a>'; 

}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  -->
     
     <!--fonts-->
      <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,200&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,300&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Lemonada&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
     
     <!-- css-->
      <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="icon" href="img/icon.ico" type="image">
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
    <title>login</title>
  </head>
  <body>
    <div class="containerr">
      <div class="header">
               <h3>Login</h3>
          </div>
       
    
   <?php
   if($login_button == '')
   {  
       $con = mysqli_connect("localhost","root","root");
       if($con){
           echo "connect";
       }else{
           echo "no connect";
       }
       mysqli_select_db($con, 'root');
       
       if(isset($userid)){
           
           $userfullname = "$username  "."$userlastname" ;
          $_SESSION['google_user'] = "$userfullname";
           
    $sql = " select * from google_user where userid='$userid' ";
    $query = mysqli_query($con, $sql);
    $match = mysqli_num_rows($query);
           
           if(!$match){
               $insertquery = "insert into google_user (userid, userfullname, email, gender) value (
              '$userid', '$userfullname', '$emailid', '$gender')" ;
            
              $query = mysqli_query($con, $insertquery);
              
           if($query){
               header('location:aboutus.php');
           }
           else
           {
               $_SESSION['msg'] = 'Somthing is wrong!...';
               header('location:signup.php');
           }
       }
           else
           {
               header('location:aboutus.php');
           }
       }
       
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>      
         
            <?php
            if(isset($_SESSION['msg']))
            {
              if($_SESSION['msg'] == "Incorrect Password..." || $_SESSION['msg'] == "Incorrect Username..." ||
                $_SESSION['msg'] == "You are logout..." || $_SESSION['msg'] == "Account not update...")
              {
                 ?>
                    <p id="passwrong"> <?php echo $_SESSION['msg']; ?></p>
                <?php
              }
                else
                {
                    ?>
                  <p id="sendmail"><?php echo $_SESSION['msg']; ?></p> 
                <?php
                }
            }
             else
            {
              echo $_SESSION['msg'] = "";  
            }
             ?> 
              
        
        
                 <form class="form" id="form">
                     <div class="form-control">
                     <label>Username</label>
                         <input type="text" name="" id="username" placeholder="Enter Your Full Name" autocomplete="off">
                         <i class="fas fa-check-circle"></i>
                         <i class="fas fa-exclamation-circle"></i>
                         <small>error Msg</small>
                     </div>
                     
                     
                     
                      <div class="form-control">
                     <label>Password</label>
                         <input type="password" name="" id="password" placeholder="Enter Your Password" autocomplete="off">
                         <i class="fas fa-check-circle"></i>
                         <i class="fas fa-exclamation-circle"></i>
                         <small>error Msg</small>
                     </div>
                     
                      
               <input type="submit" value="Login" class="btn" name="">
              </form>
                
                        
        <p class="tag1">Forgot password no worry ? <a href="recover_email.php" >Click hear</a></p> 
        <p class="tag2">Not have an account ? Please <a href="signup.php" >SignUp</a></p>        
         
              </div>
      
      
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script type="text/javascript"> 
           
            const form = document.getElementById('form');
            const username = document.getElementById('username');
            
            const password = document.getElementById('password');
          
           
           //add event
            
           form.addEventListener('submit',(Event)=>{
               Event.preventDefault();
               validate();
           } )
           
               
              const sendData = (usernameVal, passwordVal, sRate, count) => {
                  if(sRate === count){
                      //alert("Registration Successfull");
                      //swal("Welcome! "+usernameVal, "Registration Successfull!", "success");
                    location.href = `loginvery.php?username=${usernameVal}&pass=${passwordVal}`
                      
                      
              }
              }
              //final data validation
               const successMsg = (usernameVal, passwordVal) => {
                   let formCon = document.getElementsByClassName('form-control');
                   var count = formCon.length - 1;
                   for(var i=0;i<formCon.length;i++){
                       if(formCon[i].className === "form-control success"){
                           var sRate = 0 + i;
                           sendData(usernameVal, passwordVal, count, sRate);
                       }else {
                           return false;
                       }
                   }
               }
           
           
             //more email validate
           
        
                                
               //define validate fuction
           const validate = () => {
            const usernameVal = username.value.trim();
          
            const passwordVal = password.value.trim();
           
               
               //username valadation
               
               if(usernameVal === ""){
                   setErrorMsg(username,'username cannot be blank');
               }else if(username.lenght <=2){
                    setErrorMsg(username,'username minimum three character');
               }else {
                    setSuccessMsg(username);
               }
               
    
               
               if(passwordVal === ""){
                   setErrorMsg(password,'Password cannot be blank');
               }else if(passwordVal.length <= 6){
                    setErrorMsg(password,'Minimum 6 character');
               }else {
                    setSuccessMsg(password);
               }
               
               
                successMsg(usernameVal, passwordVal);
           }
               function setErrorMsg(input, errormsg){
                   const formControl = input.parentElement;
                   const small = formControl.querySelector('small');
                   formControl.className = "form-control error";
                   small.innerText = errormsg;
               }
               function setSuccessMsg(input){
                   const formControl = input.parentElement;
                   formControl.className = "form-control success";
               }
           
           
      </script>
  </body>
</html>

<?php

?>

