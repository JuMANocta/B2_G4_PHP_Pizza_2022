<?php
// Démarre la session
session_start();

// Vérification de l'utilisateur
require 'models/connexion.php';
$connec = connexionBDD();

// Vérification des données reçu en POST
// var_dump($_POST);
// var_dump($_SESSION);
//array(2) { ["login"]=> string(4) "test" ["password"]=> string(4) "test" }

// Vérification des données reçu et comparaison des données
if (isset($_POST['login']) && isset($_POST['password'])) {
    // Récupération des données
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Hashage du mot de passe
    //$password = hash('sha512',$_POST['password']);

    // Comparaison des données
    if (verifConnexion($connec, $login, $password)) {
        echo 'Vous êtes connecté';
        $_SESSION['login'] = $login;
        echo '<br>Session: ' . $_SESSION['role'];
        echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";
    } else {
        echo 'Login ou mot de passe incorrect';
        session_destroy();
        header('Location: login.php');
    }
}
?>
<br>
<a href="decoLogin.php">Déconnexion</a>