<?php
 session_start();
$con = mysqli_connect('localhost','root','root');
if($con){
    echo "Connection Successfull";
}
    else{
        echo "No Connection ";
}
   
mysqli_select_db($con,"root");

    $user = $_GET['username'];
	$password = $_GET['pass'];
  

      $pass = password_hash($password, PASSWORD_BCRYPT);
      $cpass = password_hash($password, PASSWORD_BCRYPT);
      $token =bin2hex(random_bytes(15));
      
         $_SESSION['about'] = $_GET['username'];

    $sql = " select * from email where username='$user' and status='active' ";
    $query = mysqli_query($con, $sql);
    $emailcount = mysqli_num_rows($query);
       
      if($emailcount){
          $email_pass = mysqli_fetch_assoc($query);
          $db_pass = $email_pass['password'];
          $_SESSION['username'] = $email_pass['username'];
          $user_db = $email_pass['username'];
          $pass_decode = password_verify($password, $db_pass);
              
           if($pass_decode)
              {
                header('location:aboutus.php');
              }
           else
               {
                 $_SESSION['msg'] = 'Incorrect Password...';
                 header('location:login.php');
               }
          }
            else {
            
                    $_SESSION['msg'] = 'Incorrect Username...';
                    header('location:login.php');
                }   
        
           
    
?>