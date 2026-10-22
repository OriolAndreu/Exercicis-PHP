<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 11 - Validar i classificar una nota.
 * Data: 15/10/2026
 */

$nota = 7.5;

if ($nota < 0 || $nota > 10) {
    echo "Nota no vàlida";
} else {
    if ($nota < 5) {
        echo "Suspès.";
    } elseif ($nota < 6) {
        echo "Aprovat.";
    } elseif ($nota < 7) {
        echo "Bé.";
    } elseif ($nota < 9) {
        echo "Notable.";
    } else {
        echo "Excel·lent.";
    }
}
?>
