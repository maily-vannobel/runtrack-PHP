<?php

session_start();
if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
} else {
    $_SESSION['nbVisites']++;
}
//afficher la variable de session : echo $_SESSION['nbVisites'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB01-J4</title>
</head>
<body>
    <p>Nombres de visites:<?php echo $_SESSION['nbVisites'];?></p>
    <form method="post">
        <button type="submit" name="reset">Réeinitialiser le compteur</button>
    </form>
</body>
</html>