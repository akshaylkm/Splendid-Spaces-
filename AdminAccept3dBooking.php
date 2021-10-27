<?php
	include 'dbconnect.php';
	$id = $_REQUEST['id'];
	$query = "update 3d_cust_order set status = 'Delivered' where oid = '$id'";
	mysql_query($query);
		echo "<script type = \"text/javascript\">
					alert(\"Successfully Accepted\");
					window.location = (\"AdminViewfrontelevation.php\")
				</script>";
	
?>