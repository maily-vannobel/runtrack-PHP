<?php

// i initalisé à 0 -> boucle continu d'incrémenter tps que i inf/= à 1337
for ($i = 0; $i <= 1337; $i++) {
// si $i=26,37,88 ou111 applique des styles spécifiques
if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
    echo null;
} else {
    // sinn affiche justre valeur de $i
    echo $i . "<br>";
}
}
?>