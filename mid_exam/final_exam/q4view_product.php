
 <h2>See All Products from product view</h2>
<?php
$db = new mysqli('localhost','root','','wdpf_exam1');

?>


<table border='1'>
<tr>
    <th style ="color:green;">ID</th>
    <th style ="color:green;">Product Name</th>
    <th style ="color:green;">Price </th>
    <th style ="color:green;">Manufacture Name</th>
</tr>
<?php
$sql = "SELECT *FROM product_list_view";
$result = $db->query($sql);
while($row = $result->fetch_assoc()){
 ?>
<tr>
<td><?php  echo $row['product_id'] ?></td>
<td><?php  echo $row['pr_name'] ?></td>
<td><?php  echo $row['pr_price'] ?></td>
<td><?php  echo $row['manufac_name'] ?></td>
</tr>


<?php
}

?>
</table>



