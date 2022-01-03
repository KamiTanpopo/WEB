<?php

$data = [
    "name" => $_POST['name'],
    "text" => $_POST['text']
];

$connection = new PDO('mysql:host=localhost; dbname=coment', 'root', '');
$sql = 'INSERT INTO coments (name, text) VALUES (:name, :text)';
$connection->prepare($sql);
$statement = $connection->prepare($sql);
$result = $statement->execute($data);
var_dump($result);



?>