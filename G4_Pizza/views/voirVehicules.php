<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des véhicules</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <?php require 'components/navBar.php' ?>
    <main>
        <h2>Liste des véhicules</h2>
        <table>
            <thead>
                <tr>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Immatriculation</th>
                </tr>
            </thead>
            <tbody><?php
                    require '../models/connexion.php';
                    $connec = connexionBDD();
                    $resultatVehicules = afficherVehicule($connec);
                    foreach ($resultatVehicules as $vehicule) : ?>
                    <tr>
                        <td><?php echo $vehicule['marque']; ?></td>
                        <td><?php echo $vehicule['modele']; ?></td>
                        <td><?php echo $vehicule['immatriculation']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <?php require 'components/footer.php' ?>
</body>

</html>