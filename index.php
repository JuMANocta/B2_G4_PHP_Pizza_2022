<?php
require 'connexion.php';
//En général, il est recommandé d'utiliser require plutôt que include, car cela garantit que le fichier est bien inclus et que le script s'exécute correctement.
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion BDD</title>
</head>

<body>
    <h1>Connexion à la base de données</h1>
    <?php
    $connec = connexionBDD();
    $resultatPizza = afficherPizza($connec);
    echo "Nombre de pizzas : " . $resultatPizza->rowCount() . BR;
    echo "Liste des pizzas : " . BR;
    while ($pizza = $resultatPizza->fetch()) {
        echo $pizza['nom'] . " " . $pizza['prix'] . "€" . BR;
    }
    $resultatClient = afficherClient($connec);
    echo "Nombre de clients : ". $resultatClient->rowCount() . BR;
    echo "Liste des clients : " . BR;
    while ($client = $resultatClient->fetch()) {
        echo $client['nom'] . " " . $client['prenom'] . " " . $client['adresse'] . " " . $client['portable'] . " " . $client['email'] . BR;
    }
    //echo insererPizzaSecu($connec, "Pepperoni", 12);
    ?>
</body>

</html>