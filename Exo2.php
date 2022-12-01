<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="test" id=""></div>
    <?php
    for ($i = 0; $i < 10; $i++) {
    ?><div></div>
    <?php } ?>
    <div></div>
    <div></div>
    <div></div>
    <?php
    $tabtab = ['DUPONT' => ['prénom' => 'PAUL', 'profession' => 'ministre', 'age' => 50], 'DURAND' => ['prénom' => 'ROBERT', 'profession' => 'agriculteur', 'age' => 45]];
    ?>
    <table>
        <thead>
            <tr>
                <th colspan="1">Clé</th>
                <th colspan="2"> Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tabtab as $key => $valeur) { ?>
                <tr>
                    <td rowspan="4"><?= $key ?></td>
                    <td>Clé</td>
                    <td>Valeur</td>
                </tr>
                <?php foreach ($valeur as $valeurKey => $valeurValeur) { ?>
                    <tr>
                        <td><?= $valeurKey ?></td>
                        <td><?= $valeurValeur ?></td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
    <?php
    $banniere = [
        'banniere1' => [
            'titre' => 'image1',
            'texte' => 'Lorem ipsum dolor sit amet consectetur ',
            'image' => 'image1.jpg'
        ],
        'banniere2' => [
            'titre' => 'image2',
            'texte' => 'Lorem ipsum dolor sit amet consectetur',
            'image' => 'image2.jpg'
        ],
        'banniere3' => [
            'titre' => 'image3',
            'texte' => 'Lorem ipsum dolor sit amet consectetur',
            'image' => 'image3.jpg'
        ],
    ];
    $rand = array_rand($banniere);
    ?>
    <img src="<?=$banniere[$rand]['image']?>" alt="<?=$banniere[$rand]['texte']?>">';
</body>

</html>

<?php
//creer un tableau contenant les chiffres de 1 à 10
$tab1 = [];
for ($i = 1; $i <= 10; $i++) {
    $tab1[] = $i;
}
//créer un tableau contenant les chiffres de 11 à 20
$tab2 = [];
for ($i = 11; $i <= 20; $i++) {
    $tab2[] = $i;
}
// créer un autre tableau contenant la somme de chaque élément des deux tableaux précédents
$tab3 = [];
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[] = $tab1[$i] + $tab2[$i];
}

// créer un tableau de 10 valeur au hasard entre 1 et 100
$tab4 = [];
for ($i = 0; $i < 10; $i++) {
    $tab4[] = rand(1, 100);
}
// trier le tableau du plus petit au plus grand
sort($tab4);
// afficher le tableau séparer par des ; et afficher la chaine
echo implode(";", $tab4);


?>