<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 12 - Despeses d’enviament.
 * Data: 15/10/2026
 */

$importCompra = 45;
$esSoci = true;

const MINIM_ENVIAMENT_GRATUIT = 60;
const COST_ENVIAMENT = 5;

if ($importCompra >= MINIM_ENVIAMENT_GRATUIT) {
    $enviament = 0;
} else {
    if ($esSoci == true) {
        $enviament = COST_ENVIAMENT / 2;
    } else {
        $enviament = COST_ENVIAMENT;
    }
}

$totalFinal = $importCompra + $enviament;

echo "Import de la compra: " . $importCompra . " €<br>";
echo "Despeses d'enviament: " . $enviament . " €<br>";
echo "Total final: " . $totalFinal . " €";
?>
