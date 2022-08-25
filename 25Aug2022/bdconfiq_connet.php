<?php
// Connect to the database server
$mysqli = new mysqli('localhost', 'catalog_user', 'secret',
'corporate');
if ($mysqli->connect_errno) {
printf("Unable to connect to the database:<br /> %s",
$mysqli->connect_error);
exit();
}
?>