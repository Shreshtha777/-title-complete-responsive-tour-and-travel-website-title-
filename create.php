<?php  
require "connect.php"; 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $edit=$_POST['edit'];
  $delete=$_POST['delete'];


$sql = "INSERT INTO users VALUES (null,'.$name.','.$email.','.$contact.','.$subject.','.$message.','.$edit.','.$delete.')";  
if(mysqli_query( $conn,$sql)){  
    header("Location:success.php");
die();
}else{  
echo "Sorry ".mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  