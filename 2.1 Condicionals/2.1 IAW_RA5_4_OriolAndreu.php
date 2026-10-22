<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 4 - Aprovat o suspès.
 * Data: 15/10/2026
 */

$nota = 6.5;
define("NOTA_APROVAT", 5);

if ($nota >= NOTA_APROVAT) {
    echo "La teva nota és " . $nota . ". Has aprovat.";
} else {
    echo "La teva nota és " . $nota . ". Has suspès.";
}
?>
