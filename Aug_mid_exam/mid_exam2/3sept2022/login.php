<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Login Page</h1>
    <?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $db = new mysqli("localhost","root","","wdpf_exam2");
    $sql = "SELECT * FROM user WHERE email ='$email' AND password= '$pass'";
    $result = $db->query($sql);
    if($result->num_rows==1){
        echo "valid";
    }
    else{
        echo "not valid";
    }
}
    ?>
    <!-- $result->num_rows>0 dewya jabe -->
    <!-- insert update delete connection ar jonno affected rows use korte hobe -->
    <form action="" method ="post">
       Email : <input type="email" name="email" placeholder="enter your email"><br>
        Password :<input type="password" name="password"placeholder="enter your password"><br>
        <input type="submit" name="submit"value="submit">
    </form>
</body>
</html>