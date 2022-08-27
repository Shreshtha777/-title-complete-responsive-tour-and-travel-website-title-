<?php  

require "connect.php"; 
$id=$_GET['id'];
$sql="SELECT * FROM users where id=$id";
$row=mysqli_query($conn, $sql);  
$singleRow = mysqli_fetch_assoc($row);

    ?>
    <form action="edit.php" method="post" >
            <div class="inputBox">
            <input type="text" name="id" readonly value="<?php echo $singleRow['id'];?>" placeholder="name">
                <input type="text" name="name" value="<?php echo $singleRow['name']?>;" placeholder="name">
                <input type="email" name="email" value="<?php echo $singleRow['email'];?>" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="text" name="contact" value="<?php echo $singleRow['contact'];?>" placeholder="contact">
                <input type="text"  name="subject" value="<?php echo $singleRow['subject'];?>" placeholder="subject">
            </div>
            <textarea placeholder="message" name="message"  id="" cols="30" rows="10"><?php echo $singleRow['message'];?></textarea>
            <input type="submit" class="btn" value="update">
        </form>
        <?php
mysqli_close($conn);  
?>