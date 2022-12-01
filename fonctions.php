<?php
define('BR', '<br>');
// nom_fonction($paramètres){ici le code à exécuter}
// créer une fonction de calcul du prix TTC
function calcul_ttc($prixHT){
    return $prixHT * 1.2;
}
$prixHT = 200;
$prixTTC = calcul_ttc($prixHT);
echo "Le prix TTC est de ".$prixTTC."€";

function calcul_ttc_tva($prixHT, $tauxTVA){
    return $prixHT * (1 + $tauxTVA/100);
}

// portée des variables
$mot ="Salut";
function afficherMot($mot){
    echo $mot;
}
echo afficherMot("Bonjour");
echo $mot;

// portée de la variable dans la fonction
function afficherMot2(){
    global $mot;
    return $mot;
}

// valeur magique $GLOBALS
echo "<pre>";
var_dump($GLOBALS);

// variable static
function afficherNombre(){
    static $nombre = 0;
    $nombre++;
    echo $nombre;
}
afficherNombre();
afficherNombre();

// php permet d'utiliser des fonctions natives
$phrase = "Bonjour tout le monde";
if(isset($phrase)){
    echo "La variable existe";
}else{
    echo "La variable n'existe pas";
}
if(empty($phrase)){
    echo "La variable est vide";
}else{
    echo "La variable n'est pas vide";
}

// passage par valeur
function ajouter_monsieur($param){
    $param = "Monsieur ".$param;
    return $param;
}

// passage par référence
function afficherTexte(&$param){
    $param = "Monsieur ".$param;
    return $param;
}
echo BR;
echo $phrase;
echo BR;
echo afficherTexte($phrase);
echo BR;
echo $phrase;

// fonction sur la gestion de fonction
function afficher_param($param1, $param2){
    echo "La valeur du param1 est ".func_get_arg(0).BR;
    echo "La valeur du param2 est ".func_get_arg(1).BR;
}
if(function_exists('afficher_param')){
    echo "La fonction existe";
}else{
    echo "La fonction n'existe pas";
}
echo BR;

// la récurcivité
function fonction_recursive($n){
    $n++;
    echo $n.",";
    if($n<10){
        fonction_recursive($n);
    }
}
fonction_recursive(0);

// fonction mail()
ini_set('display_errors', 1);
error_reporting(E_ALL);
$from = "test@test.com";
$to = "";
$sujet = "Sujet du mail";
$message = "Bonjour, voici le message du mail";
$headers = 'From: '. $from;
mail($to, $sujet, $message,$headers);