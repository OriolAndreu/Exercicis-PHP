<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 13 - Accés a una activitat amb condicionals niats.
 * Data: 15/10/2026
 */

$edat = 16;
$teAutoritzacio = true;

define("EDAT_MINIMA", 14);
define("EDAT_MAJORIA", 18);

if ($edat < EDAT_MINIMA) {
    echo "No pots participar. El motiu és que tens menys de 14 anys.";
} else {
    if ($edat >= EDAT_MAJORIA) {
        echo "Pots participar. El motiu és que ets major d'edat i no necessites autorització.";
    } else {
        if ($teAutoritzacio == true) {
            echo "Pots participar. El motiu és que tens entre 14 i 17 anys i estàs autoritzat.";
        } else {
            echo "No pots participar. El motiu és que tens entre 14 i 17 anys però no tens autorització.";
        }
    }
}
?>
