<?php
define('BR', '<br>');
$host = "localhost";
$user = "root";
$pass = "";
$base = "G4_PIZZA";
try{
    $connect = new PDO('mysql:host='.$host.';dbname='.$base, $user, $pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>Connexion réussie</h1>".BR;
    afficherPizza($connect)->closeCursor();
}catch(Exception $e){
    echo "Erreur de connexion à la base de données";
    die('Erreur : '.$e->getMessage());
}

function afficherPizza($connect){
    $resultat = $connect->query("SELECT * FROM pizza");
    echo "Nombre de pizzas : ".$resultat->rowCount().BR;
    while($pizza = $resultat->fetch()){
        echo $pizza['nom']." ".$pizza['prix']."€".BR;
    }
    return $resultat;
}