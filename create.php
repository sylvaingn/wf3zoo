<?php


//var_dump($_POST);


$newSexe;

if ($_POST["sexe"] === "male") {
    $newSexe = "0";
}
elseif ($_POST["sexe"] === "femelle") {
    $newSexe = "1";
} 


$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root');

$request = "INSERT INTO animal(espece, nom, taille, poids, date_de_naissance, pays_origine, sexe) VALUES ('".$_POST["espece"]."', '".$_POST["nom"]."', '".$_POST["taille"]."', '".$_POST["poids"]."', '".$_POST["date_de_naissance"]."', '".$_POST["pays_origine"]."', '".$newSexe."')";
//var_dump($request);
$response = $bdd->query($request);
$addAnimal = $response->fetchAll(PDO::FETCH_ASSOC);





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

    

    <?php include("partials/jumbotron.php"); ?>

    <?php if (empty($_POST["nom"])) :?>
        <h1>Message d'erreur !</h1>
    <?php endif ;?>
    
    <?php if (empty($_POST["espece"])) :?>
        <h1>Message d'erreur !</h1>
    <?php endif ;?>

    <?php if (empty($_POST["sexe"])) :?>
        <h1>Message d'erreur !</h1>
    <?php endif ;?>

    <?php if (empty($_POST["taille"])) :?>
        <h1>Message d'erreur !</h1>
    <?php endif ;?>

    <?php if (empty($_POST["poids"])) :?>
        <h1>Message d'erreur !</h1>
    <?php endif ;?>

    <?php if (empty($_POST["date_de_naissance"])) :?>
        <h1>Message d'erreur !</h1>
    <?php endif ;?>

    <?php if (empty($_POST["pays_origine"])) :?>
        <h1>Message d'erreur !</h1>
    <?php endif ;?>

    <?php if (!empty($_POST["nom"]) 
            and !empty($_POST["espece"]) 
            and !empty($_POST["sexe"])
            and !empty($_POST["taille"])
            and !empty($_POST["poids"])
            and !empty($_POST["date_de_naissance"])
            and !empty($_POST["pays_origine"])) :?>
        <h1>Bravo !</h1>
        <br>
        <br>
        <p>Votre animal a bien été ajouté !</p>
        <br>
        <br>
        <h3>Récapitulatif</h3>
        <br>
        <ul>
            <li>Nom : <?= $_POST["nom"]?></li>
            <li>Espèce : <?= $_POST["espece"]?></li>
            <li>Sexe : <?= $_POST["sexe"]?></li>
            <li>Taille : <?= $_POST["taille"]?></li>
            <li>Poids : <?= $_POST["poids"]?></li>
            <li>Date de naissance : <?= $_POST["date_de_naissance"]?></li>
            <li>Pays d'origine : <?= $_POST["pays_origine"]?></li>
        </ul>
    <?php endif ;?>


    


    



    

    <?php include("partials/footer.php")?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

    
