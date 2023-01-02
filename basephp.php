<?php
echo "Bonjour l\"in\"dex !!";

$age = 25; // variable de type int
$age = "vingt cinq"; // variable de type string

echo "J'ai $age";
echo "J'ai ". $age;

define('PI',3.1415926535);
echo PI;
define('BR','<br>');
echo BR;

$prenom = "Julien";
// condition en IF ELSE
if($prenom == 'Julien'){
    echo "Mon prénom est $prenom";
}
// Opérateurs
// == != < > <= >=

$age = 30;
if($age > 20){
    if($age == 30){
        echo "T'as $age ouaich";
    }
}else{
    echo "t'es trop jeune fuis";
}

$prenom = "Jean";
switch($prenom){
    case 'Julien':
        echo $prenom;
        break;
    case 'Jean':
        echo $prenom;
        break;
    default:
        echo "t'as pas de prénom";
}

//FOR
for ($i=0; $i < 10; $i++) { 
    for ($y=0; $y < 10; $y++) { 
        for ($z=0; $z < 10; $z++) { 
            //echo "Je t'ai bien eu !!";
        }
        if($y == 5){
            break;
        }
    }
}

// while
$i = 1;
while($i <= 10){
    echo "Début de while";
    $i = $i +1;
    echo $i;
    $i += 1;
    echo $i;
    $i++;
    echo $i;
}

// Transtipage
$variable = 15.325;
echo "La valeur entière est ".(int)$variable;
echo "La valeur entière est ".(bool)$variable;
echo "La variable est un string". (string)$variable;
echo BR;
echo BR;
// tableaux
$tableau = array('Jean', 'Robert', 'Paul', 'Joe', 'Alain');

// comment afficher Paul?
echo $tableau[2];
echo BR;
// comment j'afficher tous les prenom du tableau
echo "<pre>";
echo var_dump($tableau);
echo "</pre>";

for ($i=0; $i < sizeof($tableau); $i++) { 
    echo $tableau[$i]." ";
}

// foreach
foreach ($tableau as $value) {
    echo $value." ";
}

// tableau associatif
$tableau2 = array(
    'prenom' => 'Julien',
    'nom' => 'Boulay',
    'age' => 25,
    'ville' => 'Paris'
);

// foreach
foreach ($tableau2 as $key => $value) {
    echo $key." : ".$value.BR;
}

print_r($tableau2);

// longeur d'un tableau
$nbelem = sizeof($tableau2);
echo $nbelem;
$nbelemcount = count($tableau2);
echo $nbelemcount;

// existence d'une valeur dans un tableau
if(in_array('Julien', $tableau)){
    echo "Julien est dans le tableau";
}

if(array_search('Julien', $tableau)){
    echo "Julien est dans le tableau";
}

// exeiste une clé dans un tableau
if(array_key_exists('prenom', $tableau2)){
    echo "La clé prenom existe";
}else{
    echo "La clé prenom n'existe pas";
}

// trier un tableau par ordre alphabétique
sort($tableau);
foreach ($tableau as $key => $value) {
    echo $key." : ".$value.BR;
}
var_dump($tableau2);
sort($tableau2);
var_dump($tableau2);
foreach ($tableau2 as $key => $value) {
    echo $key." : ".$value.BR;
}

/*
asort : trier un tableau par ordre alphabétique en conservant les clés
rsort : trier un tableau par ordre alphabétique inverse
arsort : trier un tableau par ordre alphabétique inverse en conservant les clés
ksort : trier un tableau par ordre alphabétique des clés
krsort : trier un tableau par ordre alphabétique inverse avec des clés
*/
echo BR.array_search('Joe', $tableau);
echo $tableau[array_search('Alain', $tableau)];

// découper une chaine de caractère pour devenir un tableau
$message = "Bonjour tout le monde";
echo $message;
var_dump($message);
$exploded = explode(' ', $message);
var_dump($exploded);
// regrouper un tableau en une chaine de caractère
$imploded = implode(' ', $exploded);
echo $imploded;

// sélection aléatoire d'un element d'un tableau
$random = array_rand($tableau);

$winGame = [
    "Tu as gagné un voyage à New York",
    "Tu as gagné un voyage à Paris",
    "Tu as gagné un voyage à Londres",
    "Tu as gagné un voyage à Tokyo",
    "Tu as gagné un voyage à Sydney",
    "Tu as gagné un voyage à New Delhi",
    "Tu as perdu"
];
$retourX = array_rand($winGame, 2);

foreach ($retourX as $value) {
    echo $winGame[$value].BR;
}

// découper une chaîne en longeur fixe dans un tableau
$chaine = "Bonjour tout le monde, je suis Julien";
$chaine = str_split($chaine, 5);
var_dump($chaine);

// ajouter un ou plusieurs éléments à la fin d'un tableau
array_push($tableau, 'Julien', 'Boulay');
var_dump($tableau);

// supprimer un élément du tableau
unset($tableau[0]);
var_dump($tableau);
// supprimer le dernier élément du tableau
$recup = array_pop($tableau);
var_dump($tableau);
echo $recup;

// créer un tableau à 2 dimentions
$tab2D = array(
    array('prenom' => 'Julien', 'nom' => 'Boulay', 'age' => 25),
    array('prenom' => 'Jean', 'nom' => 'Dupont', 'age' => 30),
    array('prenom' => 'Paul', 'nom' => 'Durand', 'age' => 35),
    array('prenom' => 'Robert', 'nom' => 'Martin', 'age' => 40),
    array('prenom' => 'Joe', 'nom' => 'Doe', 'age' => 45),
    array('prenom' => 'Alain', 'nom' => 'Dupond', 'age' => 50)
);
echo $tab2D[5]['age'];
$tab2D[3]['prenom'] = 'ives';