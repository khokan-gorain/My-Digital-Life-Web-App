<?php
session_start();

$con = mysqli_connect("localhost","root","root");
if($con){
    echo "Connection successfull";
}
else
{
    echo "No connection";
}
mysqli_select_db($con, 'root');


   
       if(isset($_GET['tokan'])){
       
       $tokan = $_GET['tokan'];
        
       
       $update= "update email set status ='active' where tokan='$tokan' ";
           
      
       $query = mysqli_query($con, $update);
       
       
       if($query){
           if(isset($_SESSION['msg']))
           {
               $_SESSION['msg'] = 'Account update successfully';
               
               header('location:login.php');
           }
           else
           {
                $_SESSION['msg'] = 'You are logout';
               
               header('location:login.php');
           }
       }
       else
       {
            $_SESSION['msg'] = 'Account not update';
               header('location:signup.php');
       }
  }




?>