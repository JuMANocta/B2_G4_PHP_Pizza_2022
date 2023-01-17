<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des livreurs</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
    <?php require 'components/navBar.php' ?>
    <main>
        <h2>Liste des livreurs</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Portable</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require '../models/connexion.php';
                $connec = connexionBDD();
                $resultatLivreurs = afficherLivreur($connec);
                foreach ($resultatLivreurs as $livreur): ?>
                    <tr>
                        <td><?php echo $livreur['nom']; ?></td>
                        <td><?php echo $livreur['prenom']; ?></td>
                        <td><?php echo $livreur['portable']; ?></td>
                        <td><?php echo $livreur['email']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <?php require 'components/footer.php' ?>
</body>
</html>