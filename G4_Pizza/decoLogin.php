<?php
// demarrage de la session
session_start();

/* suppression des variables de session
    unset($_SESSION['login']);
    $_SESSION['login'] = '';
*/

// suppression des variables de session et de la session
session_destroy();
// redirection vers la page de login
header('Location: login.php');