<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir les pizzas</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <?php require 'components/navBar.php' ?>
    <main>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
            </tr>
            <?php
            require '../models/connexion.php';
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
    <?php require 'components/footer.php' ?>
</body>

</html>