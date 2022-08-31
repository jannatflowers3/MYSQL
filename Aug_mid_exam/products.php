
 <h2>See All Products</h2>
<?php
$db = new mysqli('localhost','root','','wdpf_exam');

?>
<table border='1'>
<tr>
    <th>ID</th>
    <th>Product Name</th>
    <th>Price </th>
    <th>Manufactures</th>
</tr>
<?php
$sql = "SELECT *FROM product_info_view";
$result = $db->query($sql);
while($row = $result->fetch_assoc()){
 ?>
<tr>
<td><?php  echo $row['id'] ?></td>
<td><?php  echo $row['name'] ?></td>
<td><?php  echo $row['price'] ?></td>
<td><?php  echo $row['manufacturer_name'] ?></td>
</tr>
<?php
}

?>
</table>
<br>
<a href="manufacturer.php">Show Manufacturer</a>

