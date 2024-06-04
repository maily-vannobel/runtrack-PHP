<?php
    
    $compteur = 0;//initialiser le compter à 0
    //boucle foreach qui parcourt le tableau
    //$cle = var qui conteitn clé de chaque element (nom champ dans form)
    //compteur s'incrémente à chaque itération pour compter
    foreach ($_POST as $cle => $valeur) {
        $compteur++;
    }
    echo $compteur;
?>
