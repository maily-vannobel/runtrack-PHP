<?php 
function calcule(float $num1, string $operator, float $num2): float|string {
     // initalise résultat
     $result = null

    // conditions 
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

echo calcule(25, '-', 15) . "<br>"; 