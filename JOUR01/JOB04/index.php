<?php

// i initalisé à 0 -> boucle continu d'incrémenter tps que i inf/= à 1337
for ($i = 0; $i <= 1337; $i++) {
// Si $i vaut 42, applique des styles spécifiques
if ($i == 42) {
    echo "<b><u>$i</b></u><br>";
} else {
    // sinn affiche justre valeur de $i
    echo $i . "<br>";
}
}
?>