<!DOCTYPE html>
<html>

<head>
    <title>Pizza G4 - Voir les clients</title>
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
            <li><a href="insertPizza.php">Ajouter une pizza</a></li>
            <li><a href="insertClient.php">Ajouter un Client</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
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
            require 'connexion.php';
            $connec = connexionBDD();
            $clients = afficherClient($connec);
            while ($client = $clients->fetch()): ?>
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
    <footer>
        <p>Copyright Pizza G4</p>
    </footer>
</body>

</html>