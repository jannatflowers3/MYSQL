<?php
include_once('db_confiq.php');

// echo $email = $_POST['email'];
$email = $_POST['email'];
$pass = $_POST['pass'];
// echo $pass = $_POST['pass'];
echo "<br>";
$pass = sha1($pass);

// echo "SELECT * FROM users_table WHERE  email = '$email' AND password= '$pass'";
$sql = "SELECT * FROM users_table WHERE  email = '$email' AND password= '$pass'";
// $db->query($sql);
$result = $db->query($sql);
// echo $result->num_rows;
if($result->num_rows!=1){

$mesg = "email or password may be wrong";
  header("Location:login_index.php?m=$mesg");
}
else {
    session_start();
$_SESSION['email'] = $email;
header('Location:dashboard.php');
}

?>