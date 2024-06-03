<?php

// i initalisé à 0 -> boucle continu d'incrémenter tps que i inf/= à 100
for ($i = 0; $i <= 100; $i++) {
// si $i=26,37,88 ou111 applique des styles spécifiques
if ($i == 42 ) {
    echo "La Plateforme_<br>";}

    elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br>";
    } 
    elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br>";
    } 
    else {
        echo $i . "<br>";
    }
}

?>
