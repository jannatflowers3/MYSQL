<?php
$db = new mysqli('localhost','root','','wdpf51');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <a href="studentlist.php">view student list</a> -->
    <a href="tablestudent.php">view student list</a>

    <?php

if(isset($_POST['submit'])){
    extract($_POST);
    $sql = " INSERT INTO students VALUES ('$id','$name','$email','$phone')";
    $db->query($sql);
    if($db->affected_rows>0){
echo "Successfully registation";
    }


}
    ?>
    <h1> student enty system</h1>
    <form action="" method="post">
        <input type="number" name ="id" placeholder = "enter your id"><br>
        <input type="text" name = "name" placeholder = "enter your name"><br>
        <input type="email" name = "email" placeholder = "enter your email"><br>
        <input type="number" name = "phone" placeholder = "enter your phone"><br>
        <input type="submit" name = "submit" value = "submit"><br>
    </form>
    

</body>
</html>