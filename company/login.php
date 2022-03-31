<?php
		include('../admin/dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* user */
		
			$query = "SELECT * FROM company WHERE comp_username='$username' AND com_pass='$password' AND company_stat='Activated'";
			$result = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($result);
			$num_row = mysql_num_rows($result);
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['company_id'];
		echo 'true';	
		}else{ 
				echo 'false';
		}
		?>