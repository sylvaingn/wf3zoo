<?php


var_dump($_GET);

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root');
$request = "DELETE FROM animal where id =".$_GET["id"];
var_dump($request);
$response = $bdd->query($request);
$animal = $response->fetch(PDO::FETCH_ASSOC);

header('Location: index.php');



?>