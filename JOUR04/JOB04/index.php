<?php
session_start();

// si 'deco' cliqué, supression du cooklie 'prenom'
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Expirer le cookie en définissant une date dans le passé
    header("Refresh:0"); // Rafraîchir la page pour appliquer les changements
    exit();
}

// Vérifier si le formulaire de connexion a été soumis
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    setcookie('prenom', $prenom, time() + 3600 * 24 * 30); // Cookie valide pour 30 jours
    header("Refresh:0"); // Rafraîchir la page pour appliquer les changements
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
<?php
// Vérifier si le cookie "prenom" existe
if (isset($_COOKIE['prenom'])) {
    // Si le cookie existe, afficher le message de bienvenue et le bouton de déconnexion
    echo "Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !";
    echo '<form method="post">
              <button type="submit" name="deco">Déconnexion</button>
          </form>';
} else {
    // Si le cookie n'existe pas, afficher le formulaire de connexion
    echo '<form method="post">
              <input type="text" name="prenom" required>
              <button type="submit" name="connexion">Se connecter</button>
          </form>';
}
?>
</body>
</html>
