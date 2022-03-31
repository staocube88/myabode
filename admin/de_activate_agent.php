<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update agent set agent_stat = 'Deactivated' where agent_id = '$get_id'");
header('location:agent.php');
?>