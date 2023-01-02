<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insérer Des Pizzas</title>
</head>

<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <label for="nom">Nom de la pizza</label>
                </td>
                <td>
                    <input type="text" name="nom" id="nom">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="prix">Prix de la pizza</label>
                </td>
                <td>
                    <input type="text" name="prix" id="prix">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Envoyer">
                </td>
            </tr>
            </tr>
        </table>
    </form>
    <?php
    //var_dump($_POST);
    require 'connexion.php';
    $connec = connexionBDD();
    if (isset($_POST['nom']) && isset($_POST['prix'])) {
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        echo insererPizzaSecu($connec, $nom, $prix);
    }
    ?>
</body>

</html>