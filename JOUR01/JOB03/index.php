<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J1-JOB3</title>
</head>
<body>

<?php
$intVar = 13;
$floatVar = 4.2;
$stringVar = "Maïly";
$boolVar = true;
?>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Entier</td>
            <td>intVar</td>
            <td><?= $intVar ?></td>
        </tr>
        <tr>
            <td>Float</td>
            <td>floatVar</td>
            <td><?= $floatVar ?></td>
        </tr>
        <tr>
            <td>String</td>
            <td>stringVar</td>
            <td><?= $stringVar ?></td>
        </tr>
        <tr>
            <td>Boolean</td>
            <td>boolVar</td>
            <td><?= $boolVar ? 'true' : 'false' ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
