<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 8 - Classificar una temperatura.
 * Data: 15/10/2026
 */

$temperatura = 20;

const LIMIT_FRED = 15;
const LIMIT_CALOR = 25;

if ($temperatura < LIMIT_FRED) {
    echo "Fa fred";
} elseif ($temperatura >= LIMIT_FRED && $temperatura <= LIMIT_CALOR) {
    echo "La temperatura és agradable";
} else {
    echo "Fa calor";
}
?>
