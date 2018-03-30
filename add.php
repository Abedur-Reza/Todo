<?php 
/*
	PROJECT     : TODO APPLICATION
	CREATED BY  : MD. ABEDUR REZA
	EMAIL       : abedurreza314@gmail.com
*/ 
	include 'db.php';
	if (isset($_POST['send'])) {
		$name = $_POST['task'];

		$sql = "INSERT INTO tasks(task) values ('$name')";

		$eval = $db->query($sql);

		if ($eval) {
			header('location: index.php');
		}
	}
?>