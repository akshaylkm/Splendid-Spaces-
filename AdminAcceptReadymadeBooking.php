<?php
	include 'dbconnect.php';
	$id = $_REQUEST['id'];
	$query = "update ready_cust_order set status = 'Delivered' where roid = '$id'";
	mysql_query($query);
		echo "<script type = \"text/javascript\">
					alert(\"Successfully Accepted\");
					window.location = (\"AdminViewReadymadePlan.php\")
				</script>";
	
?>