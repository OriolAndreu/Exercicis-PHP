<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 7 - Descompte en una compra.
 * Data: 15/10/2026
 */

$importCompra = 120;

const IMPORT_MINIM = 100;
const PERCENTATGE_DESCOMPTE = 10;

if ($importCompra >= IMPORT_MINIM) {
    $descompte = $importCompra * PERCENTATGE_DESCOMPTE / 100;
} else {
    $descompte = 0;
}

$importFinal = $importCompra - $descompte;

echo "Import original: " . $importCompra . "€<br>";
echo "Import del descompte: " . $descompte . "€<br>";
echo "Import final: " . $importFinal . "€";
?>
