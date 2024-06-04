<?php 

//définir variables, recup le champ NAME dans le form de la superglobale POST
$number = $_GET["number"];

  //si le reste de la division de $number par 2 égal à 0; PAIR
    if ($number %2 == 0) {
        echo "Ce nombre est pair";
    } else {
        echo "Ce nombre est impair";
    }
?>