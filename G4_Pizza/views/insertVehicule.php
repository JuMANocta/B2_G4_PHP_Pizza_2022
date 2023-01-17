<?php require '../controllers/vehiculesInsert.php'?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza G4 - Ajouter un véhicule</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <?php require 'components/navBar.php' ?>
    <main>
        <h2>Ajouter un véhicule</h2>
        <form action="" method="post">
            <label for="marque">Marque :</label><br>
            <input type="text" name="marque" id="marque"><br>
            <label for="modele">Modèle :</label><br>
            <input type="text" name="modele" id="modele"><br>
            <label for="immatriculation">Immatriculation :</label><br>
            <input type="text" name="immatriculation" id="immatriculation"><br>
            <input type="submit" value="Envoyer">
        </form>
    </main>
    <?php require 'components/footer.php' ?>
</body>

</html>