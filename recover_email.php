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
      <link rel="stylesheet" href="recover_email.css" type="text/css">
    <link rel="icon" href="img/icon.ico" type="image">
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
    <title>forgot password</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
               <h3>Recover Your Account</h3>
          </div>
        
        <?php
            if(isset($_SESSION['msg'])){
              ?>
                <p id="passwrong"> <?php echo $_SESSION['msg']; ?></p>
        
                <?php        
            }
        else{
            echo $_SESSION['msg'] = "";
        }
        
        
        
        ?>
                 <form class="form" id="form">
                     
                      <div class="form-control">
                     <label>Email</label>
                         <input type="Email" name="" id="email" placeholder="Enter Your Email" autocomplete="off">
                         <i class="fas fa-check-circle"></i>
                         <i class="fas fa-exclamation-circle"></i>
                         <small>error Msg</small>
                     </div>
                     
                     
               <input type="submit" value="Send Mail" class="btn" name="">
              </form>
                <p class="tag1">Have an account ? Please <a href="login.php" >Login</a></p>
        
              </div>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script type="text/javascript"> 
           
            const form = document.getElementById('form');
            const email = document.getElementById('email');
        
           
           //add event
            
           form.addEventListener('submit',(Event)=>{
               Event.preventDefault();
               validate();
           } )
           
               
              const sendData = (emailVal, sRate, count) => {
                  if(sRate === count){
                      //alert("Registration Successfull");
                      //swal("Welcome! "+usernameVal, "Registration Successfull!", "success");
                    location.href = `recover_pass.php?email=${emailVal}`
                      
                      
              }
              }
              //final data validation
               const successMsg = (emailVal) => {
                   let formCon = document.getElementsByClassName('form-control');
                   var count = formCon.length - 1;
                   for(var i=0;i<formCon.length;i++){
                       if(formCon[i].className === "form-control success"){
                           var sRate = 0 + i;
                           sendData( emailVal, count, sRate);
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
            const emailVal = email.value.trim();
               
               //username valadation
               
               
               if(emailVal === ""){
                   setErrorMsg(email,'Email cannot be blank');
               }else if(!isEmail(emailVal)){
                    setErrorMsg(email,'Not a valid email');
               }else {
                    setSuccessMsg(email);
               }
               
                successMsg(emailVal);
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

