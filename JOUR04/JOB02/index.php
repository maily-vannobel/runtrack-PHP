<?php

// Vérif si cookie 'nbVisites' existe, sinn initialise à0
if (!isset($_COOKIE['nbVisites'])) {
    $nbVisites = 0;
} else {
    // Si le cookie existe, récupère sa valeur et la stocke dans la variable $nbVisites
    $nbVisites = $_COOKIE['nbVisites'];
}

$nbVisites++;

// Met à jour le cookie 'nbVisites' avec la nouvelle valeur de $nbVisites
// Le cookie est valide pendant 30 jours (3600 secondes * 24 heures * 30 jours)
setcookie('nbVisites', $nbVisites, time() + 3600 * 24 * 30);

// Vérifie si le bouton 'reset' a été cliqué (si le formulaire a été soumis avec le bouton 'reset')
if (isset($_POST['reset'])) {
    // Si le bouton 'reset' a été cliqué, expire le cookie immédiatement en définissant une date d'expiration passée
    setcookie('nbVisites', 0, time() - 3600);
    // Réinitialise la variable $nbVisites à 0
    $nbVisites = 0;
}

// Affiche le nombre de visites
echo "Nombre de visites : " . $nbVisites;
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
