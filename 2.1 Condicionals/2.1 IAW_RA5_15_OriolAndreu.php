<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 15 - Mini projecte de reserva d’una activitat.
 * Data: 15/10/2026
 */

$nom = "Clara";
$edat = 20;
$esEstudiant = true;
$placesDisponibles = 3;

const EDAT_MINIMA = 16;
const PREU_BASE = 30;
const DESCOMPTE_ESTUDIANT = 20;

$possibleReservar = false;
$missatgeReserva = "";
$preuFinal = 0;

// Aplicació de regles en ordre
if ($placesDisponibles <= 0) {
    $missatgeReserva = "Activitat completa";
} else {
    if ($edat < EDAT_MINIMA) {
        $missatgeReserva = "No compleixes l'edat mínima";
    } else {
        $possibleReservar = true;
        if ($esEstudiant == true) {
            $preuFinal = PREU_BASE - (PREU_BASE * DESCOMPTE_ESTUDIANT / 100);
        } else {
            $preuFinal = PREU_BASE;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resum de la Reserva</title>
</head>
<body>
    <h1>Resum de la Reserva</h1>
    <p><strong>Nom:</strong> <?php echo $nom; ?></p>
    <p><strong>Edat:</strong> <?php echo $edat; ?> anys</p>
    
    <?php if ($possibleReservar == false): ?>
        <p><strong>Resultat de la reserva:</strong> <?php echo $missatgeReserva; ?></p>
    <?php else: ?>
        <p><strong>Resultat de la reserva:</strong> Reserva confirmada amb èxit.</p>
        <p><strong>Preu final:</strong> <?php echo $preuFinal; ?> €</p>
    <?php endif; ?>
</body>
</html>
