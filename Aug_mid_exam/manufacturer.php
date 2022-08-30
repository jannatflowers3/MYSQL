<?php
$db = new mysqli('localhost','root','','wdpf_exam');

?>
<?php
if(isset($_POST['submit'])){
    $detete_id = $_POST['manufac_id'];
    $sql = "DELETE FROM manufacturer WHERE id = '$detete_id'";
$db->query($sql);
if($db->affected_rows>0){
    echo "deleted";
}

}
// where id = manufacturer ar id name  === delete_id hosse form ar select name ar post method a rakha variable
?>

<form action="" method = "post">
   <select name="manufac_id" >
   <option value="disable" selected>Selectd One</option>
  

<?php
$sql = "SELECT *FROM manufacturer";
$result = $db->query($sql);
while($row = $result->fetch_assoc()){
 ?>

<option value= "<?php  echo $row['id']?>"> <?php  echo $row['name']?></option>

<?php
}

?>
 </select>
 <input type="submit" name="submit" value="delete">
 </form>