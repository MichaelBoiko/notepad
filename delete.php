<?php
	$pdo = new PDO("mysql:host=localhost; dbname=notepad", "root", "root");
	$id = $_GET["id"];
	$sql = "DELETE FROM tasks WHERE id=:id";
	$statement = $pdo->prepare($sql);
	$statement->bindParam("id", $id);
	$statement->execute();

	header("Location: /");
?>