<?php require "../controllers/pizzasInsert.php" ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insérer Des Pizzas</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <?php require 'components/navBar.php' ?>
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
    </main>
    <?php require 'components/footer.php' ?>
</body>

</html>