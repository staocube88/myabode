<?php
include('dbcon.php');
if (isset($_POST['delete_agent'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM agent where agent_id='$id[$i]'");
}
header("location: agent.php");
}
?>