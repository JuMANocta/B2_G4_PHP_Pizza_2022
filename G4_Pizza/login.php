<?php 
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] != '')  {
    header('Location: index.php');
    exit;
}else{
    echo "Vous n'êtes pas connecté";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="views/assets/style.css">
</head>

<body>
    <header>
        <h1>Pizza G4</h1>
    </header>
    <main>
        <h2>Login</h2>
        <form action="testLogin.php" method="post">
            <label for="login">Login :</label><br>
            <input type="text" name="login" id="login"><br>
            <label for="password">Mot de passe :</label><br>
            <input type="password" name="password" id="password"><br>
            <input type="submit" value="Envoyer">
        </form>
    </main>
    <footer>
        <p>Copyright Pizza G4</p>
    </footer>
</body>

</html>