<?php
/*
	PROJECT     : TODO APPLICATION
	CREATED BY  : MD. ABEDUR REZA
	EMAIL       : abedurreza314@gmail.com
*/ 
	include 'db.php';
	
	$id = $_GET['id'];

	$sql = "SELECT * FROM tasks WHERE id='$id'";

	$rows = $db-> query($sql);

	$row = $rows-> fetch_assoc();

	if (isset($_REQUEST['send'])) {
		$task = $_REQUEST['task'];
		$sql = "UPDATE tasks SET task='$task'";

		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Todo List</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<center><h1>UPDATE TASK</h1></center>
				<div class="col-md-10 col-md-offset-1">
					<form method="POST" action="">
						<div class="form-group">
							<label>Task Name</label>
							<input type="text" name="task" repuired class="form-control" value="<?php echo $row['task']; ?>">
						</div>
						<input type="submit" name="send" value="Send" class="form-control btn btn-success">
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery224.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>