<?php

	function updateTask(){
		$id    =  $_GET['id'];
		$title =  $_POST['title'];
		$content =  $_POST['content'];

		$pdo = new PDO("mysql:host=localhost;dbname=notepad", "root", "root");
		$sql = "UPDATE `tasks` SET `id`=:id,`title`=:title,`content`=:content WHERE `id`=:id";
		$statement = $pdo->prepare($sql);
		$statement->execute(array(":title"=>$title, ":content"=>$content, ":id"=>$id));

		header("Location: /"); exit;
	}

	updateTask();
