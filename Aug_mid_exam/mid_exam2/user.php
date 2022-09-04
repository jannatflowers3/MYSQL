<?php
$db = new mysqli("localhost","root","","wdpf_exam1");
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
    <h1>Login Form</h1>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM user WHERE user_name ='$name' AND user_pass ='$pass'";
        $result = $db->query($sql);
        if($result->num_rows>0){
            echo "valid user";
        }
        else {
            echo "invalid user";
        }
    }
    ?>
    <form action="" method="post">
        <input type="text" name = "name" placeholder ="enter valid name"><br>
        <input type="password" name = "pass" placeholder ="enter your valid password"><br>
        <input type="submit" name = "submit" value="submit">
    </form>
</body>
</html>