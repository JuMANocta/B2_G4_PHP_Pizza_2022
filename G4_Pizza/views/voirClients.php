<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza G4 - Voir les clients</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <?php require 'components/navBar.php' ?>
    <main>
        <h2>Liste des clients</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Téléphone portable</th>
                <th>Email</th>
            </tr>
            <?php
            require '../models/connexion.php';
            $connec = connexionBDD();
            $clients = afficherClient($connec);
            while ($client = $clients->fetch()) : ?>
                <tr>
                    <td><?php echo $client['nom']; ?></td>
                    <td>
                        <?php echo $client['prenom']; ?>
                    </td>
                    <td><?php echo $client['adresse']; ?></td>
                    <td>
                        <?php echo $client['portable']; ?>
                    </td>
                    <td><?php echo $client['email']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </main>
    <?php require 'components/footer.php' ?>
</body>

</html>