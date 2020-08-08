<?php
	$pdo = new PDO ("mysql:host=localhost; dbname=notepad", "root", "root");
	$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
	$statement = $pdo->prepare($sql);
	$statement->execute($_POST); //true || false

	header("Location: /"); exit;
	
	// var_dump($result);
?>