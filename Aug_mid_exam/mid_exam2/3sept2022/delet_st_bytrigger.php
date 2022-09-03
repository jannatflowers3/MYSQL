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

<h1> student result view</h1>
<!-- delete result from studentid -->
<?php

if(isset($_POST['submit'])){
    $st_delet = $_POST['student_delet'];
    $sql = "DELETE FROM student WHERE id = '$st_delet'";
   
$result = $db->query($sql);
//  echo$db->query($sql);
    if($db->affected_rows>0){
       echo "deleted"; 
    }
}
?>
<!-- TRIGGER AR JONNO EDIT KORTE hole  student k delete korle result tbale theke delete hobe
DELETE FROM student WHERE id = OLD.ID -->
<!-- affected rows update insert and delete ar joonno hobe -->
<form action="" method= "post">

    <select name="student_delet" >
        <option value="disable" selected>Select One</option>
        <?php
$sql = "SELECT * FROM student";
$result = $db->query($sql);
while($row = $result->fetch_assoc()){

?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['stname'];?>
        <?php
}
?>
    </option>
    </select>
    <input type="submit" name = "submit" value="delete">
</form>
</body>
</html>