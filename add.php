<?php





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

    <form method="post" action="create.php">

        <div class="form-group">
            <p>Sélectionner votre rôle :<p>
            <select name="sexe">                            
                <option value="male">Mâle</option>
                <option value="femelle">Femelle</option>
            </select>
        </div>

        <div class="form-group">
            <label for="formName">Nom de l'animal :</label>
            <input id="formName" name="nom" type="text" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="forEspece">Espèce :</label>
            <input id="forEspece" name ="espece" type="text" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="forTaille">Taille (cm) :</label>
            <input id="forTaille" name="taille" type="text" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="forPoids">Poids (kg) :</label>
            <input id="forPoids" name ="poids" type="text" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="forDate">Date de naissance (AAAA-MM-JJ):</label>
            <input id="forDate" name ="date_de_naissance" type="text" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="forPays">Pays d'origine :</label>
            <input id="forPays" name ="pays_origine" type="text" class="form-control" required>
        </div>

        <input class="btn btn-primary" name="submit" type="submit" value="Créer un animal">
    </form>


    



    

    <?php include("partials/footer.php")?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>