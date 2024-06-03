<?php
$ecole = "LaPlateforme";
$mot1 = "Vive";
$symbole = "!";

echo $ecole . "<br>";
echo $mot1 . " " . $ecole . " " . $symbole . "<br>";


$note = 6;
echo "note de base : $note" . "<br>";

$note = $note + 4;
echo "note mise à jour (+4): $note". "<br>";


$etat = true;
echo "État initial : " . ($etat ? 'true' : 'false') . "<br>"; // Affiche l'état initial

$etat = false; // change valeur en false
echo "État mis à jour : " . ($etat ? 'true' : 'false');?>