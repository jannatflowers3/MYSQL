<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
    width: 400px;
    margin: 0 auto;
}
.label1{
    padding:30px
}
.label2{
    padding:20px;
}
.label11{
    margin-bottom:20px;
}
.submit{
    margin-left: 108px;
    margin-top: 23px;

}
    </style>
</head>
<body>
  
    <form action="check_use.php" method = "post">
    <h1> Login Form</h1>
        <div class="label11">
        <label for="email"  class="label1">Email :</label>
        <input type="email" name ="email" placeholder="Enter your email"><br>
        </div>
        <div class="label22">
        <label for="pass" class="label2"> Password</label>
        <input type="password" name ="pass" placeholder="Enter your password"><br>
        </div>
        <input type="submit" name ="submit" value="submit" class="submit">
        <?php
    // session_start();
    if(isset($_GET['m'])){
        $mege = $_GET['m'];
        echo  "<div class = 'alert alert_danger'> $mege</div>";
    }
    ?>
    </form>

    
</body>
</html>