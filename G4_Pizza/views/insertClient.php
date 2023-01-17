<?php require "../controllers/clientsInsert.php" ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza G4 - Ajouter un client</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <?php require 'components/navBar.php' ?>
    <main>
        <main>
            <h2>Ajouter un client</h2>
            <form action="" method="post">
                <label for="nom">Nom :</label><br>
                <input type="text" name="nom" id="nom"><br>
                <label for="prenom">Prénom :</label><br>
                <input type="text" name="prenom" id="prenom"><br>
                <label for="adresse">Adresse :</label><br>
                <input type="text" name="adresse" id="adresse"><br>
                <label for="portable">Téléphone portable :</label><br>
                <input type="text" name="portable" id="portable"><br>
                <label for="email">Email :</label><br>
                <input type="text" name="email" id="email"><br><br>
                <input type="submit" value="Envoyer">
            </form>
        </main>
    </main>
    <?php require 'components/footer.php' ?>
</body>

</html>