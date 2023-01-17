<!DOCTYPE html>
<html>

<head>
    <title>Pizza G4 - Ajouter un client</title>
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
            <li><a href="insertPizza.php">Ajouter Pizzas</a></li>
            <li><a href="voirPizzas.php">Nos Clients</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <main>
        <main>
            <h2>Ajouter un client</h2>
            <form action="ajouterclient.php" method="post">
                <label for="nom">Nom :</label><br>
                <input type="text" name="nom" id="nom"><br>
                <label for="prenom">Prénom :</label><br>
                <input type="text" name="prenom" id="prenom"><br>
                <label for="adresse">Adresse :</label><br>
                <input type="text" name="adresse" id="adresse"><br>
                <label for="portable">Téléphone portable :</label><br>
                <input type="text" name="portable" id="portable"><br>
                <label for="email">Email :</label><br>
                <input type="text" name="email" id="email"><br><br>
                <input type="submit" value="Envoyer">
            </form>
        </main>
    </main>
    <footer>
        <p>Copyright Pizza G4</p>
    </footer>
    <?php
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['portable']) && isset($_POST['email'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $portable = $_POST['portable'];
        $email = $_POST['email'];
        echo insererClientSecu($connec, $nom, $prenom, $adresse, $portable, $email);
    }
    ?>
</body>

</html>