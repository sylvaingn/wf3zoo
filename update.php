<?php 

var_dump($_POST);
var_dump($_GET);

$newSexe;

if ($_POST["sexe"] === "male") {
    $newSexe = "0";
}
elseif ($_POST["sexe"] === "femelle") {
    $newSexe = "1";
} 

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root');
$request = "UPDATE animal 
            SET espece = :espece, nom = :nom, taille = :taille, poids = :poids, date_de_naissance = :date_de_naissance, 
                pays_origine = :pays_origine, sexe = :sexe
            WHERE id = :id ";
//var_dump($request);
$response = $bdd->prepare($request);

$response->execute([
    "id"                => $_GET["id"],
    "espece"            => $_POST["espece"],
    "nom"               => $_POST["nom"],
    "taille"            => $_POST["taille"],
    "poids"             => $_POST["poids"],
    "date_de_naissance" => $_POST["date_de_naissance"],
    "pays_origine"      => $_POST["pays_origine"],
    "sexe"              => $newSexe,
]);



header('Location: index.php');



?>