<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insérer Des Pizzas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h1>Pizza G4</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="voirPizzas.php">Nos pizzas</a></li>
            <li><a href="voirPizzas.php">Nos Clients</a></li>
            <li><a href="insertClient.php">Ajouter un Client</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <main>
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
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="Envoyer">
                    </td>
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
    </main>
    <footer>
        <p>Copyright Pizza G4</p>
    </footer>
</body>

</html>