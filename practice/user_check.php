<?php
include_once("dbconfig.php");
$email = $_POST['myemail'];
$pass = $_POST['mypass'];
$pass = sha1($pass);

$sql = " SELECT * FROM users WHERE email ='$email' AND password = '$pass'";
$result = $db->query($sql);

if($result->num_rows!=1){
    $message = "email and pass are wrong";
    header("Location:index.php?m=$message");
}
else{
    session_start();
    $_SESSION['session_message']=$email;
    header("Location:dahsboard.php");
}

?>