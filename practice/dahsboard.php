<?php
session_start();

    if(!$_SESSION['session_message']){
        header("Location:index.php");
    }


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

    <h1>this is dashboard page</h1>
  <?php
    echo "your email is". $_SESSION['session_message'];
 echo "<br>";
  ?>
    <a href="logout.php">logout</a>
</body>
</html>