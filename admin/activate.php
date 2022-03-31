<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update company set company_stat = 'Activated' where company_id = '$get_id'");
header('location:company.php');
?>