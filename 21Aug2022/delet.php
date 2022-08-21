<?php
$db = new mysqli('localhost','root','','wdpf51');
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE student_id='$id'";
$db->query($sql);
if($db->affected_rows>0){
    header("Location:tablestudent.php");
}

?>