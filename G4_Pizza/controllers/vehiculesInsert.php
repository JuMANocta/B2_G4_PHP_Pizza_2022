<?php
require '../models/connexion.php';
$connec = connexionBDD();
if (isset($_POST['immatriculation']) && isset($_POST['marque']) && isset($_POST['modele']) ) {
    $immatriculation = $_POST['immatriculation'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    echo insererVehiculeSecu($connec, $immatriculation, $marque, $modele);
}