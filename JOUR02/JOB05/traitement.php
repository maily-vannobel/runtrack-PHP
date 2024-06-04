<?php 

//définir variables, recup le champ NAME dans le form de la superglobale POST
$username = $_POST["username"];
$password = $_POST["password"];



    if ($username == "John" && $password == "Rambo") {
        echo "Ce n'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
?>