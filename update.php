<?php

$data = [
    "id"    =>  $_GET['id'],
    "title" =>  $_POST['title'],
    "content"   =>  $_POST['content']
];

$pdo = new PDO("mysql:host=localhost;dbname=notepad", "root", "root");
// $sql = 'UPDATE tasks SET title=:title, content=:content WHERE tasks. id=:id';
$sql = "UPDATE tasks SET title=[:title] content=[:content] WHERE id=[:id]";

$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->bindParam(":content", $_POST['content']);
$statement->bindParam(":title", $_POST['title']);


$result = $statement->execute($data);

header("Location: /"); exit;