<?php

// i initalisé à 0 -> boucle continu d'incrémenter tps que i inf/= à 1337
for ($i = 0; $i <= 1337; $i++) {
// si $i=42, appliquer style
if ($i == 42) {
    echo "<b><u>$i</b></u><br>";
} else {
    // sinn affiche juste  $i
    echo $i . "<br>";
}
}
?>