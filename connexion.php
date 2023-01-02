<?php
define('BR', '<br>');

function connexionBDD()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $base = "G4_PIZZA";
    try {
        $connect = new PDO('mysql:host=' . $host . ';dbname=' . $base, $user, $pass);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<h3>Connexion réussie</h3>" . BR;
        return $connect;
    } catch (Exception $e) {
        echo "Erreur de connexion à la base de données";
        die('Erreur : ' . $e->getMessage());
    }
}


function afficherPizza(&$connect)
{
    $resultat = $connect->query("SELECT * FROM pizza");
    echo "Nombre de pizzas : " . $resultat->rowCount() . BR;
    while ($pizza = $resultat->fetch()) {
        echo $pizza['nom'] . " " . $pizza['prix'] . "€" . BR;
    }
    return $resultat;
}

function insererClient(&$connect, $nom, $prenom, $adresse, $portable, $email)
{
    $sql = "INSERT INTO client (nom, prenom, adresse, portable, email) VALUES ('" . $nom . "', '" . $prenom . "', '" . $adresse . "', '" . $portable . "', '" . $email . "')";
    $connect->exec($sql);
    return "Nouvel enregistrement créé à l'index " . $connect->lastInsertId() . BR;
}
