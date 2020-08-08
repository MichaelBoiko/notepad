
<?php
	// 1. Подключиться к БД
	$pdo = new PDO("mysql:host=localhost; dbname=notepad", "root", "root");
	//2. Подготовить запрос
	$sql = "SELECT * FROM tasks";
	$statement = $pdo->prepare($sql); //подготовить
	$result = $statement->execute(); //true || false
	$tasks = $statement->fetchAll(PDO::FETCH_ASSOC); // $tasks = $statement->fetchAll(2);
	//Получаем записи
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Notepad</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>All Tasks</h1>
				<a href="create.php" class="btn btn-success">Add task</a>
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($tasks as $task):?>
							<tr>
									<td><?= $task["id"];?></td>
									<td><?= $task["title"];?></td>
									<td>
											<a href="show.php?id=<?= $task["id"];?>" class="btn btn-info">
													Show
											</a>
											<a href="edit.php?id=<?= $task["id"];?>" class="btn btn-warning">
													Edit
											</a>
											<a  href="delete.php?id=<?= $task["id"];?>" class="btn btn-danger">Delete</a>
									</td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>