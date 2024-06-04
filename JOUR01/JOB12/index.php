<?php function calcule($num1, $operator, $num2) {
    // Initialisation de la variable de résultat
    $result = null;
    
    // Vérifie le type d'opération et effectue le calcul approprié
    if ($operator == '+') {
        $result = $num1 + $num2;
    } elseif ($operator == '-') {
        $result = $num1 - $num2;
    } elseif ($operator == '*') {
        $result = $num1 * $num2;
    } elseif ($operator == '/') {
        // Vérifie si le diviseur n'est pas zéro pour éviter une division par zéro
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            return "Erreur : Division par zéro.";
        }
    } elseif ($operator == '%') {
        // Vérifie si le diviseur n'est pas zéro pour éviter une division par zéro
        if ($num2 != 0) {
            $result = $num1 % $num2;
        } else {
            return "Erreur : Division par zéro.";
        }
    } else {
        return "Erreur : Opérateur non valide.";
    }
    
    // Retourne le résultat de l'opération
    return $result;
}

echo calcule(10, '+', 5) . "<br>"; 