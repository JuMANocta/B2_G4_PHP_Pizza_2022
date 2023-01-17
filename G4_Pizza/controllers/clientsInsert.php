<?php
require '../models/connexion.php';
$connec = connexionBDD();
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['portable']) && isset($_POST['email'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $portable = $_POST['portable'];
    $email = $_POST['email'];
    echo insererClientSecu($connec, $nom, $prenom, $adresse, $portable, $email);
}
