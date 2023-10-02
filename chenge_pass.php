 <?php
 session_start();
 ob_start();
$con = mysqli_connect('localhost','root','root');
if($con){
    echo "Connection Successfull";
}
    else{
        echo "No Connection ";
}
   
mysqli_select_db($con,'root');

 
      
       $tokan = $_GET['tokan'];
    $password = $_GET['pass'];
	$cpassword = $_GET['cpass']; 
     
     
    
     
      $pass = password_hash($password, PASSWORD_BCRYPT);
      $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
          
     
    $updateq = " update email set password='$pass' , cpassword='$cpass' where tokan='$tokan' " ;
   
    $query = mysqli_query($con, $updateq);
      if($query){
                 $_SESSION['msg'] = 'Your password has been updated';
                 header('location:login.php');
                }
           else
               {
                 $_SESSION['password'] = 'Your password is not updated';
                 header('location:login.php');
               }
               
          
 
           


?>