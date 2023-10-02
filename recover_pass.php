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

    
	$emaile = mysqli_real_escape_string($con, $_GET['email']) ;

    
    $sql = " select * from email where email='$emaile' ";
    $query = mysqli_query($con, $sql);
    $emailcount = mysqli_num_rows($query);
       
      if($emailcount){
          
          
                $userdata = mysqli_fetch_array($query);
                $username = $userdata['username'];
                $tokan = $userdata['tokan'];
                
          
                 $subject = "Reset Your Password";
                $body = "Hi, $username Click hear to reset your password...
                https://khokangorain.com/reset_pass.php?tokan=$tokan ";
                    $headers = "From: support@khokangorain.com";

                    if (mail($emaile, $subject, $body, $headers)) {
                      $_SESSION['msg']= " Check your email $emaile to reset your password ";
                      header('location:login.php');
                         
                   
                     } else {
                   ?>
                     <script>
                    alert("Email <?php echo $emaile ; ?> Send Failed... ");
                         location.href = 'recover_email.php';
                   </script>
                      
                   <?php 
                        }
            } else
            {
                $_SESSION['msg'] = "Your email $emaile are not matching. Please try again...";
               header('location:recover_email.php');
            }
                
        
           
    
?>