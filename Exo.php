// Exo 1
// créer une constante Vitesse_lumiere est égale à 299792 km/s.
// afficher "la vitesse de la lumière est de 299792 km/s" en utilisant la constante

// Exo 2
// créer une constante de PI égal à 3.141592
// afficher sa valeur entière précédée de la phrase :"la valeur de PI est :" en utilisant la constante

// Exo 3
// Ecrire une boucle permettant d'afficher tous les nombres de 1 à 20 séparé par un espace

// Exo 4
// copier l'exo 3 et mettre tous les nombres < 10 en vert et les autres en rouge.
<?php
for($i=1; $i <= 20; $i++){
    //echo $i." "
    if($i <= 10){
        echo "<span style='color:green'>".$i."</span> ";
    }else{
        echo "<span style='color:red'>".$i."</span> ";
    }
}

$tab1 = [6,25,35,61];
$tab2 = [12,24,46];

foreach($tab2 as $value){
    foreach ($tab1 as $value0) {
        $value * $value0;
    }
}

