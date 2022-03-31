<?php
include('dbcon.php');
if (isset($_POST['delete_proptype'])){
$id=$_POST['selector'];
$N = count($id);
for($i=1; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM proptype where proptype_id='$id[$i]'");
}
header("location: proptype.php");
}
?>