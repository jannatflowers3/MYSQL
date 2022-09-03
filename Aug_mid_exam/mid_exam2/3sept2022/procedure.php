<?php
  $db = new mysqli("localhost","root","","wdpf_exam2");

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
    <h1>procedure  entry</h1>
    <?php
if(isset($_POST['submit'])){
    extract($_POST);
    $sql = "CALL add_student('$fstname','$fst_address','$fst_mobile')";
    $db->query($sql);
    if($db->affected_rows>0){
        echo "added";
    }
}
    ?>
    <form action="" method = "post">
<input type="text" name="fstname"placeholder="enter your student name"><br>
<input type="text" name = "fst_address" placeholder="enter your student address"><br>
<input type="text"name ="fst_mobile" placeholder ="enter your phone"><br>
<input type="submit" name ="submit" value="submit">

    </form>
</body>
</html>