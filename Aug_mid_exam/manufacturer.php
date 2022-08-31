<?php
$db = new mysqli('localhost','root','','wdpf_exam');

?>
<?php
// delete manufacture id
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

<!-- entry manufac_id -->
<?php
if(isset($_POST['manufacture_entry'])){
    extract($_POST);
    $sql = "CALL add_manufacturer('$namuf_name','$namuf_address','$namuf_phone')";
$db->query($sql);
if($db->affected_rows>0){
    echo "added";
}
}
// call korsi proceduer jai name create korsi ..add_manufacturer then nicher form ar value dilam

?>
<h1>Manufacturer List</h1>
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
 <hr>
 <h1> Manufacturer Entry</h1>
 <form action="" method="post">
    <input type="text" name="namuf_name" placeholder="enter manufacture name"><br>
    <input type="text" name="namuf_address" placeholder="enter manufacture address"><br>
    <input type="text" name="namuf_phone" placeholder="enter manufacture phone"><br>
    <input type="submit" name= "manufacture_entry" value="save manufacture">
  
 </form>
 <a href="products.php">Products</a>