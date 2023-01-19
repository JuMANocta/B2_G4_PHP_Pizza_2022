<?php
define('BR', '<br>');

function connexionBDD(){
    $host = "localhost";
    $user = "g4_pizza";
    $pass = "g4_pizza";
    $base = "G4_PIZZA";
    try {
        $connect = new PDO('mysql:host=' . $host . ';dbname=' . $base, $user, $pass);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "<h3>Connexion réussie</h3>" . BR;
        return $connect;
    } catch (Exception $e) {
        echo "Erreur de connexion à la base de données";
        die('Erreur : ' . $e->getMessage());
    }
}

function afficherPizza(&$connect){
    $resultat = $connect->query("SELECT * FROM pizza");
    return $resultat;
}
function afficherClient(&$connect){
    $resultat = $connect->query("SELECT * FROM client");
    return $resultat;
}

function afficherVehicule(&$connect){
    $resultat = $connect->query("SELECT * FROM vehicule");
    return $resultat;
}

function afficherLivreur(&$connect){
    $resultat = $connect->query("SELECT * FROM livreur");
    return $resultat;
}

// function afficherCommande(&$connect){
//     $resultat = $connect->query("SELECT * FROM commande");
//     return $resultat;
// }

function insererClientSecu(&$connect, $nom, $prenom, $adresse, $portable, $email){
    $stmt = $connect->prepare("INSERT INTO client (nom, prenom, adresse, portable, email) VALUES (:nom,:prenom,:adresse,:portable,:email)");
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":adresse", $adresse);
    $stmt->bindParam(":portable", $portable);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    return "Nouveau Client " . $nom . " " . $prenom . " créé à l'index " . $connect->lastInsertId() . BR;
}
function insererPizzaSecu(&$connect, $nom, $prix){
    $stmt = $connect->prepare("INSERT INTO pizza (nom, prix) VALUES (:nom,:prix)");
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prix", $prix);
    $stmt->execute();
    return "Nouvelle Pizza " . $nom . " créé à l'index " . $connect->lastInsertId() . BR;
}

function insererVehiculeSecu(&$connect, $immatriculation, $marque, $modele){
    $stmt = $connect->prepare("INSERT INTO vehicule (immatriculation, marque, modele) VALUES (:immatriculation,:marque,:modele)");
    $stmt->bindParam(":immatriculation", $immatriculation);
    $stmt->bindParam(":marque", $marque);
    $stmt->bindParam(":modele", $modele);
    $stmt->execute();
    return "Nouveau Vehicule " . $immatriculation . "de la marque ". $marque ." créé à l'index " . $connect->lastInsertId() . BR;
}

function insererLivreurSecu(&$connect, $nom, $prenom, $portable, $email){
    $stmt = $connect->prepare("INSERT INTO livreur (nom, prenom, portable, email) VALUES (:nom,:prenom,:portable,:email)");
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":portable", $portable);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    return "Nouveau Livreur " . $nom . " " . $prenom . " créé à l'index " . $connect->lastInsertId() . BR;
}

function verifConnexion(&$connect, $login, $pass){
    $stmt = $connect->prepare("SELECT * FROM users WHERE login = :login");
    $stmt->bindParam(":login", $login);
    $stmt->execute();
    $resultat = $stmt->fetch();
    if(!empty($resultat) && verifPass($pass, $resultat['password'])){
        $_SESSION['role'] = $resultat['role'];
        return true;
    }else{
        return false;
    }
}

function verifPass($pass, $passHash){
    $hash = hash('sha512', $pass);
    if($hash == $passHash){
        return true;
    }else{
        return false;
    }
}