<?php

// Initialisation de la boucle : $i commence à 1 et la boucle continue tant que $i est inférieur ou égal à 100
for ($i = 1; $i <= 100; $i++) {
    // multiple de 3 ET 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz . <br>";
    } 
    // multiple de 3
    elseif ($i % 3 == 0) {
        echo "Fizz . <br>";
    } 
    //  multiple de 5
    elseif ($i % 5 == 0) {
        echo "Buzz . <br>";
    } 
    else {
        echo $i . "<br>";
    }
}

?>
