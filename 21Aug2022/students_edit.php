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
    <h1>Student edit </h1>
    <!-- <a href="studentlist.php">view student list</a> -->
    <a href="tablestudent.php">view student list</a>

    <?php
// echo $id = $_GET['id'];
 $id = $_GET['id'];

$sql = "SELECT * FROM students where student_id ='$id'";
$db->query($sql);
$data = $db->query($sql);


if(isset($_POST['submit'])){
    extract($_POST);
    $sql = " UPDATE INTO students  SET student_id = '$id',student_name = '$name',student_email ='$email',student_phone = '$phone' WHERE student_id = '$id'";
    $db->query($sql);
    if($db->affected_rows>0){
echo "Successfully updated";
    }


}
    ?>
    <h1> student edit system</h1>
    <form action="" method="post">
    <input type="number" name="id" value="<?php echo $id; ?>"placeholder="Enter Unique ID"><br>
        <input type="text" name="name" value="<?php echo $data['student_name']; ?>" placeholder="Enter name"><br>
        <input type="email" name="email" value="<?php echo $data['student_email']; ?>" placeholder="Enter unique email"><br>
        <input type="text" name="phone" value="<?php echo $data['student_phone']; ?>" placeholder="Enter phone number"><br>
        <input type="submit" name = "submit" value = "update"><br>
    </form>
    

</body>
</html>