<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB2-J2</title>
</head>
<body>
    <form action="index.php" method="POST"> 
        <label for="mail">MAIL </label>
        <input type="email" name="mail" id="mail">

        <label for="password">MDP </label>
        <input type="password" name="password" id="password">

        <input type="submit" value="envoyer" name="envoyer">
    </form>

    <?php if (!empty($_POST)): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Paramètre</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_POST as $key => $value): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($key); ?></td>
                        <td><?php echo htmlspecialchars($value); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
