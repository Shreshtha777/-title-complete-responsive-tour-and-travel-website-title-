<?php  
require "connect.php"; 
  
$id=$_GET['id'];  
$sql = "delete from users where id=$id"; 
if(mysqli_query($conn, $sql)){  
  header("Location: view.php?status=success");  
}else{  
echo "Could not deleted record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  