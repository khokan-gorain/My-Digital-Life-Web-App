<?php
 session_start();
$con = mysqli_connect('localhost','root','root');
if($con){
    echo "Connection Successfull";
}
    else{
        echo "No Connection ";
}
   
mysqli_select_db($con,'root');

    $user = $_GET['username'];
	$emaile = $_GET['email'];
	$password = $_GET['pass'];
    $cpassword = $_GET['pass'];

      $pass = password_hash($password, PASSWORD_BCRYPT);
      $cpass = password_hash($password, PASSWORD_BCRYPT);
      $token =bin2hex(random_bytes(15));
      
       


  
    
    $sql = " select * from email where email='$emaile' ";
    $query = mysqli_query($con, $sql);
    $emailcount = mysqli_num_rows($query);
       
      if($emailcount > 0){
          
           $_SESSION['emailexist']= " Your email $emaile are already exists...";
                      header('location:signup.php');
          
         
        } else {
       
           $insertquery = "insert into email (username, email, password, cpassword, tokan, status) value (
           '$user', '$emaile', '$pass', '$cpass', '$token', 'incative' )" ;
            
            $iquery = mysqli_query($con, $insertquery);
            if($iquery){
             
                 $subject = "Verify Your Email";
                $body = "Hi, $user Click hear to activate your account...
                https://khokangorain.com/verify.php?tokan=$token ";
                    $headers = "From: support@khokangorain.com";

                    if (mail($emaile, $subject, $body, $headers)) {
                      $_SESSION['msg']= " Check email $emaile to activate your account ";
                      header('location:login.php');
                         
                   
                     } else {
                        
                        
                        $_SESSION['emailexist']= "$emaile send failed...";
                       header('location:signup.php');
                    
                        }
            } else
            { 
                $_SESSION['emailexist']= "Sorry! Your Registration failed. Please try again...";
                       header('location:signup.php');
            }
                
        }
           
    
?>