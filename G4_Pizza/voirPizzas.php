<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Voir les pizzas</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h1>Pizza G4</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="insertPizza.php">Ajouter Pizzas</a></li>
            <li><a href="voirClients.php">Nos Clients</a></li>
            <li><a href="insertClient.php">Ajouter un Client</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <main>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
            </tr>
            <?php
            require 'connexion.php';
            $connec = connexionBDD();
            $resultatPizza = afficherPizza($connec);
            while ($pizza = $resultatPizza->fetch()) {
                ?>
                <tr>
                    <td>
                        <?= $pizza['nom']; ?>
                    </td>
                    <td>
                        <?= $pizza['prix']; ?> €
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </main>
    <footer>
        <p>Copyright Pizza G4</p>
    </footer>
</body>

</html>