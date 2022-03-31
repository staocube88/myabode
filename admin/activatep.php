<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update property set status = 'Activated' where property_id = '$get_id'");
header('location:property.php');
?>