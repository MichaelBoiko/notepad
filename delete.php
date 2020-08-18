<?php
		$id = $_GET["id"];

		function deleteTask($id){
				$pdo = new PDO("mysql:host=localhost; dbname=notepad", "root", "root");
				$sql = "DELETE FROM tasks WHERE id=:id";
				$statement = $pdo->prepare($sql);
				$statement->bindParam("id", $id);
				$statement->execute();

				header("Location: /");
		}

		deleteTask($id);
?>