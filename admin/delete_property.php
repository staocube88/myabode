<?php
include('dbcon.php');
if (isset($_POST['delete_property'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM property where property_id='$id[$i]'");
}
header("location: property.php");
}
?>