<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 2 - Major o menor d’edat.
 * Data: 15/10/2026
 */

$edat = 20;
define("EDAT_MAJORIA", 18);

if ($edat >= EDAT_MAJORIA) {
    echo "Ets major d’edat";
} else {
    echo "Ets menor d’edat";
}
?>
