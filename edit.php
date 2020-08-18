<?php
	function getTask($id){
		$pdo = new PDO ("mysql:host=localhost; dbname=notepad", "root", "root");
		$statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
		$statement->bindParam(":id", $id);
		$statement->execute();
		$task = $statement->fetch(PDO::FETCH_ASSOC);
		return $task;
	}

	$id = $_GET['id'];
	$task = getTask($id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Edit</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Edit Task</h1>
				<form action="update.php?id=<?= $task["id"];?>" method="post">
					<div class="form-group">
						<input type="text" name="title" class="form-control" value="<?= $task["title"];?>">
					</div>
					<div class="form-group">
						<textarea name="content" class="form-control"><?= $task["content"];?></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-warning">Edit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>