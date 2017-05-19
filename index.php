<?php

$takuzuGrid = array();

//generation aléatoire et remplissage de la première ligne
//création de la premiere ligne.
$firstLigneRandom = array(0, 0, 0, 0, 1, 1, 1, 1);

//tant que l'on trouve trois chiffres identiques a la suite on continue a mélanger.
//une fois la condition remplis on pousse dans le tableau de la grille 
//la premiere ligne
while (FALSE) {
    shuffle($firstLigneRandom);
}

array_push($takuzuGrid, $firstLigneRandom);
print_r($takuzuGrid);

//for ($i = 0; $i <= 7; $i++) {
//    $random = rand(0, 1);
//    array_push($firstLigneRandom, $random);
//    //    echo $random;
//}


//fonction de remplissage des autres lignes
    //vérification des deux derniers index sur l'axe X
    //vérification des deux derniers index sur l'axe Y
    //completion de l'index actuel en fonction du résultat de l'axe X et Y
    //comparaison pour eviter les lignes identiques

