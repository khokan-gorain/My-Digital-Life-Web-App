 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

session_start();

$user = $_POST['user'];
$email = $_POST['email'];
$msg = $_POST['msg'];

 
 $emaile = "khokangorain144@gmail.com";
 $headers = "From: $email ";

    if (mail($emaile, $user, $msg, $headers)) {
    $_SESSION['mail'] = "Welcome $user, Your Mail send successfully";
    header('location:aboutus.php');  
    }
   else
       $_SESSION['mail'] = "Mail send failed...";
      header('location:aboutus.php'); 
    

?>