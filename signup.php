<?php

session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
-->
     
     <!--fonts-->
      <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,200&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,300&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Lemonada&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
     <!-- css-->
      <link rel="stylesheet" href="signup.css" type="text/css">
    <link rel="icon" href="img/icon.ico" type="image">
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
    <title>signup</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
               <h3>Signup</h3>
          </div>
        
           <!--login with google-->
            <?php
                if(isset($_SESSION['emailexist'])){
                    ?>
                <p id="passwrong"> <?php echo $_SESSION['emailexist']; ?></p>
        
                    <?php            
                }
                else {
                    echo $_SESSION['emailexist'] = "";
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
                     <label>Email</label>
                         <input type="Email" name="" id="email" placeholder="Enter Your Email" autocomplete="off">
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
                     
                      <div class="form-control">
                     <label>Confirm Password</label>
                         <input type="password" name="" id="cpassword" placeholder="Confirm Password" autocomplete="off">
                         <i class="fas fa-check-circle"></i>
                         <i class="fas fa-exclamation-circle"></i>
                         <small>error Msg</small>
                     </div>
               <input type="submit" value="Submit" class="btn" name="">
              </form>
        
             <p class="tag1">Have an account ? Please <a href="login.php" >Login</a></p>
        
              </div>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script type="text/javascript"> 
           
            const form = document.getElementById('form');
            const username = document.getElementById('username');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const cpassword = document.getElementById('cpassword');
           
           //add event
            
           form.addEventListener('submit',(Event)=>{
               Event.preventDefault();
               validate();
           } )
           
               
              const sendData = (usernameVal, emailVal, passwordVal, sRate, count) => {
                  if(sRate === count){
                      //alert("Registration Successfull");
                      //swal("Welcome! "+usernameVal, "Registration Successfull!", "success");
                    location.href = `demo.php?username=${usernameVal}&email=${emailVal}&pass=${passwordVal}`
                      
                      
              }
              }
              //final data validation
               const successMsg = (usernameVal, emailVal, passwordVal) => {
                   let formCon = document.getElementsByClassName('form-control');
                   var count = formCon.length - 1;
                   for(var i=0;i<formCon.length;i++){
                       if(formCon[i].className === "form-control success"){
                           var sRate = 0 + i;
                           sendData(usernameVal, emailVal, passwordVal, count, sRate);
                       }else {
                           return false;
                       }
                   }
               }
           
           
             //more email validate
           
           const isEmail = (emailVal) =>{
               var atSymbol = emailVal.indexOf("@");
               if(atSymbol < 1) return false;
               var dot = emailVal.lastIndexOf('.');
               if(dot <= atSymbol + 2) return false;
               if(dot === emailVal.length - 1) return false;
               return true;
           }
                                
               //define validate fuction
           const validate = () => {
            const usernameVal = username.value.trim();
            const emailVal = email.value.trim();
            const passwordVal = password.value.trim();
            const cpasswordVal =cpassword.value.trim();
               
               //username valadation
               
               if(usernameVal === ""){
                   setErrorMsg(username,'username cannot be blank');
               }else if(username.lenght <=2){
                    setErrorMsg(username,'username minimum three character');
               }else {
                    setSuccessMsg(username);
               }
               
               if(emailVal === ""){
                   setErrorMsg(email,'Email cannot be blank');
               }else if(!isEmail(emailVal)){
                    setErrorMsg(email,'Not a valid email');
               }else {
                    setSuccessMsg(email);
               }
               
               if(passwordVal === ""){
                   setErrorMsg(password,'Password cannot be blank');
               }else if(passwordVal.length <= 6){
                    setErrorMsg(password,'Minimum 6 character');
               }else {
                    setSuccessMsg(password);
               }
               
               if(cpasswordVal === ""){
                   setErrorMsg(cpassword,'Confirm password cannot be blank');
               }else if(passwordVal != cpasswordVal){
                    setErrorMsg(cpassword,'Password are not maching');
               }else {
                    setSuccessMsg(cpassword);
               }
                successMsg(usernameVal, emailVal, passwordVal);
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

