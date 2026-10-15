<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 8 - Intercanvi de valors numèrics amb variable auxiliar.
 * Data: 15/10/2026
 */

$a = 40;
$b = 80;
echo "Valors inicials: A = $a, B = $b <br>";

// Algorisme d'intercanvi
$auxiliar = $a;
$a = $b;
$b = $auxiliar;

echo "Valors intercanviats: A = $a, B = $b";
?>
