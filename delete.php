<?php 
/*
	PROJECT     : TODO APPLICATION
	CREATED BY  : MD. ABEDUR REZA
	EMAIL       : abedurreza314@gmail.com
*/ 
	include 'db.php';

	if (isset($_REQUEST['id'])) {
		$id = $_REQUEST['id'];
		
		$sql = "DELETE from tasks where id = '$id'";

		$eval = $db->query($sql);

		if ($eval) {
			header('location: index.php');
		}
	}
?>