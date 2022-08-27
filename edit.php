<?php  
require "connect.php"; 
  
$id=$_POST['id'];  
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$subject=$_POST['subject'];
$message=$_POST['message'];
 
$sql = "update users set name='$name',email='$email',contact='$contact',subject='$subject',message='$message'where id=$id";  
if(mysqli_query($conn, $sql)){  
 echo "Record updated successfully";
 header("Location: view.php?status=success");  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  