
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
  height: 10px;
 
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
</head>
<body>
   
<?php  
require "connect.php"; 
$sql='SELECT * FROM users';
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){ 
    echo "<table border=1>"; 
    echo "<tr><td>ID</td><td>Name</td><td>Email</td><td>Contact</td><td>Subject</td><td>Message</td><td>edit</td><td>delete</td></tr>";
 while($row = mysqli_fetch_assoc($retval)){  
    echo "<tr ><td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['email']}</td>
    <td>{$row['contact']}</td>
    <td>{$row['subject']}</td>
    <td>{$row['message']}</td>
    <td><a href='update.php?id={$row['id']}'>edit</a></td>
    <td><a href='delete.php?id={$row['id']}'>delete</a></td>
    </tr>"; 
    
 } 
 echo "</table>" ;
 //end of while  
}else{  
echo "0 results";  
}   
mysqli_close($conn);  
?>
</body>
</html>


