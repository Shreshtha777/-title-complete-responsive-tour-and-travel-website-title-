<?php  
session_start();
require "connect.php"; 

//getting username and pass
$email=$_POST['email'];
$pass=$_POST['password'];



$sql="SELECT `id`, `email`, `password` FROM `admin` WHERE email='$email' and password='$pass'";
$retval=mysqli_query($conn, $sql);  
if(mysqli_num_rows($retval)>0){ 
    $row = mysqli_fetch_assoc($retval);
    $_SESSION["email"]= $row['email'];
    header('location:admin.php');
    
 }else{  
    header('location:index.php');
}   

// if(mysqli_fetch_array($retval) == 1){ 
//     $row = mysqli_fetch_assoc($retval);
//     $_SESSION['email']=$row['email'];
//     header('location:travel/admin.php');
    
//  }else{  
//     header('location:travel/index.php');
// }   
mysqli_close($conn);  
?>