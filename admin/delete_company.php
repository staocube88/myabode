<?php
include('dbcon.php');
if (isset($_POST['delete_company'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM company where company_id='$id[$i]'");
}
header("location: company.php");
}
?>