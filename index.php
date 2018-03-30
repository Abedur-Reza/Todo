<?php
/*
	PROJECT     : TODO APPLICATION
	CREATED BY  : MD. ABEDUR REZA
	EMAIL       : abedurreza314@gmail.com
*/ 
	include 'db.php';

	$sql = "SELECT * FROM tasks";
	$rows = $db->query($sql);

	global $id;
	$id = 1;
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
				<center><h1>TODO LIST</h1></center>
				<div class="col-md-10 col-md-offset-1">
					<table class="table">
						<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
						<!-- Add Modal -->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Add Task</h4>
									</div>
									<div class="modal-body">
										<form method="POST" action="add.php">
											<div class="form-group">
												<label>Task Name</label>
												<input type="text" name="task" repuired class="form-control">
											</div>
											<input type="submit" name="send" value="Send" class="form-control btn btn-success">
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<button type="button" class="btn btn-default pull-right" onclick="print();">Print</button>
						<hr> <br />
						<thead>
							<tr>
								<th>No.</th>
								<th>Task</th>
							</tr>
						</thead>
						<tbody>
						<?php while($row = $rows->fetch_assoc()): ?>
							<tr>								
								<th scope="row"><?php echo $id++ ?></th>
								<td class="col-md-10"><?php echo $row['task'] ?></td>
								<td><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a></td>
								<td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
							</tr>
						<?php endwhile; ?>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery224.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>