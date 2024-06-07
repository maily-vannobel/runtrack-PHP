<!--Lorsque
l’on valide le formulaire, le contenu est ajouté dans une variable de session.
Affichez l’ensemble des prénoms.
Ajoutez un bouton “reset” qui permet de réinitialiser la liste -->




<?php
    session_start();

    //utilisation de issets pour verif si la variable existe, sinon l'initialiser
    if (!isset($_SESSION['prenom'])) {
    $_SESSION['prenom'] = [];
}
    // Vérifier si la requête est de type POST 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ajouter un prénom à la session si le formulaire est soumis
    if (isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
        if ($prenom !== '') {
            $_SESSION['prenoms'][] = $prenom;
        }
    }
    // Réinitialiser la liste des prénoms si le bouton reset est cliqué
    if (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = [];
    }
}

?>

<form method="post">
    <input type="text" name="prenom">
    <button type="submit" name="">OK</button><br>
    <button type="submit" name="reset">Rééinitialise</button>
</form>

<?php
// Affiche les prénoms stockés dans la session
if (isset($_SESSION['prenoms'])) {
    echo '<h2>Liste des prénoms</h2>';
    echo '<ul>';
    //rajouter s à prenom pour manip une liste plutôt qu'un seul
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo "<li>" . $prenom . "</li>";
    }
    echo '</ul>';
}
?>