<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$db = new mysqli("localhost","root","","wdpf_exam2");
?>
<h1> student result view</h1>
<table border='1'>
<tr>
    <th>id</th>
    <th>student_name</th>
    <th>student_mobile</th>
    <th>module name</th>
    <th>total marks</th>
</tr>
<?php
$sql = "SELECT * FROM student_result";
$result = $db->query($sql);
while($row = $result->fetch_assoc()){
echo "<br>";
?>
<tr>
    <td><?php  echo $row ['id']?></td>
    <td><?php  echo $row ['stname']?></td>
    <td><?php  echo $row ['st_mobile']?></td>
    <td><?php  echo $row ['module_name']?></td>
    <td><?php  echo $row ['totalmarks']?></td>
</tr>
<?php 
}
?>
</table>
</body>
</html>