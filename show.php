<?php

//var_dump($_GET);

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root');
$request = "SELECT * FROM animal where id =".$_GET["id"];
$response = $bdd->query($request);
$animal = $response->fetch(PDO::FETCH_ASSOC);

$newSexe;

if ($animal["sexe"] === "0") {
    $newSexe = "Mâle";
}
elseif ($animal["sexe"] === "1") {
    $newSexe = "Femelle";
} 
else {
    $animal = "Le sexe n'est pas renseigné !";
}


$newDate = strtotime($animal["date_de_naissance"]);





?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Web Force 3 Zoo</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    
    
    <?php include("partials/navbar.php") ?>

    <main role="main">

    <img class="showAnimal" src="img/<?=$animal["nom"]?>.jpg" alt="">

    <h1><?= $animal["nom"]?></h1>
    <br>
    <br>
    <br>
    <ul>
        <li>Espèce : <?= $animal["espece"]?></li>
        <li>Sexe : <?= $newSexe ?></li>
        <li>Taille (cm) : <?= $animal["taille"]?></li>
        <li>Poids (kg) : <?= $animal["poids"]?></li>
        <li>Date de naissance : <?= $newDate?></li>
        <li>Pays d'origine : <?= $animal["pays_origine"]?></li>
        

    </ul>

    <?php include("partials/jumbotron.php"); ?>


    



    </main>

    <?php include("partials/footer.php")?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>