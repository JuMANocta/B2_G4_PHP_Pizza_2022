<?php
require '../models/connexion.php';
$connec = connexionBDD();
if (isset($_POST['nom']) && isset($_POST['prix'])) {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    echo insererPizzaSecu($connec, $nom, $prix);
}
