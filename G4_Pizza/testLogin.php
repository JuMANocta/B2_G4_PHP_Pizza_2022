<?php
// Démarre la session
session_start();

// Vérification des données reçu en POST
var_dump($_POST);
var_dump($_SESSION);
//array(2) { ["login"]=> string(4) "test" ["password"]=> string(4) "test" }

// Vérification des données reçu et comparaison des données
if (isset($_POST['login']) && isset($_POST['password'])) {
    // Récupération des données
    $login = $_POST['login'];

    // Hashage du mot de passe
    $password = hash('sha512',$_POST['password']);

    // Comparaison des données
    if ($login == 'test' && $password == 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff') {
        echo 'Vous êtes connecté';
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        echo '<br>Session: ' . $_SESSION['password'];
    } else {
        echo 'Login ou mot de passe incorrect';
        unset($_SESSION['login']);
    }
}
?>
<br>
<a href="decoLogin.php">Déconnexion</a>