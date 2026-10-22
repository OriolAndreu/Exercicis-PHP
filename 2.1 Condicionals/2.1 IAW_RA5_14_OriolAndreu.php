<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 14 - Calculadora amb switch.
 * Data: 15/10/2026
 */

$a = 10;
$b = 0;
$operacio = "/";

switch ($operacio) {
    case "+":
        $resultat = $a + $b;
        echo "El resultat és: " . $resultat;
        break;
    case "-":
        $resultat = $a - $b;
        echo "El resultat és: " . $resultat;
        break;
    case "*":
        $resultat = $a * $b;
        echo "El resultat és: " . $resultat;
        break;
    case "/":
        if ($b == 0) {
            echo "No es pot dividir entre zero";
        } else {
            $resultat = $a / $b;
            echo "El resultat és: " . $resultat;
        }
        break;
    default:
        echo "Operació no vàlida";
        break;
}
?>
