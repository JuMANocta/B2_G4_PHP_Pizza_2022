<?php
require '../models/connexion.php';
$connec = connexionBDD();
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['portable']) && isset($_POST['email'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $portable = $_POST['portable'];
    $email = $_POST['email'];
    echo insererLivreurSecu($connec, $nom, $prenom, $portable, $email);
}