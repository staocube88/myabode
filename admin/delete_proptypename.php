<?php
include('dbcon.php');
if (isset($_POST['delete_proptypename'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM proptypename where proptypename_id='$id[$i]'");
}
header("location: proptypename.php");
}
?>