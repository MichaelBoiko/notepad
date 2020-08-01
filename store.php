<?php
	$pdo = new PDO ("mysql:host=localhost; dbname=notepad", "root", "root");
	$sql = "INSERT INTO tasks(title, content) VALUES(:title, :content)";
	$statement = $pdo->prepare($sql);

	$statement->bindPARAM(":title", $_POST["title"]);
	$statement->bindPARAM(":content", $_POST["content"]);
	$result = $statement -> execute();

	header("Location: /"); exit;
	
	// var_dump($result);
?>