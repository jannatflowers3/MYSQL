<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login form</h1>
    <?php
      if(isset($_GET['m'])){
        $mess = $_GET['m'];
        echo $mess;
      }
    ?>
    <form action="user_check.php" method="post" >
        <input type="email" name="myemail" placeholder="enter your email"><br>
        <input type="password" name ="mypass" placeholder="enter your pass"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>