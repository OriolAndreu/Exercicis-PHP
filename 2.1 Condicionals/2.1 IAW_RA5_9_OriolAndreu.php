<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 9 - Accés amb usuari i contrasenya.
 * Data: 15/10/2026
 */

$usuari = "alumne";
$contrasenya = "php123";

const USUARI_CORRECTE = "alumne";
const CONTRASENYA_CORRECTA = "php123";

if ($usuari === USUARI_CORRECTE && $contrasenya === CONTRASENYA_CORRECTA) {
    echo "Accés permès";
} else {
    echo "Accés denegat";
}
?>
