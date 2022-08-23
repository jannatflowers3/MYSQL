
<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location:login_index.php');
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
    <h1>WELCOME </h1>
<?php


echo "Logged by ".$_SESSION['email'];
echo "<br>";
echo "welcome to our home page";
echo session_id();
?>
<a href="log_out.php">Logout</a>
</body>
</html>