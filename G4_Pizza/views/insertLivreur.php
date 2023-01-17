<?php require '../controllers/livreursInsert.php'?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza G4 - Ajouter un livreur</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <?php require 'components/navBar.php' ?>
    <main>
        <h2>Ajouter un livreur</h2>
        <form action="" method="post">
            <label for="nom">Nom :</label><br>
            <input type="text" name="nom" id="nom"><br>
            <label for="prenom">Prénom :</label><br>
            <input type="text" name="prenom" id="prenom"><br>
            <label for="portable">Téléphone portable :</label><br>
            <input type="text" name="portable" id="portable"><br>
            <label for="email">Email :</label><br>
            <input type="text" name="email" id="email"><br>
            <input type="submit" value="Ajouter">
        </form>
    </main>
    <?php require 'components/footer.php' ?>
</body>

</html>