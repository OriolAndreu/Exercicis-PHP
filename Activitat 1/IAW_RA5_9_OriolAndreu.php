<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 9 - Generació de taules HTML estructurades amb dades PHP.
 * Data: 15/10/2026
 */

$nom = "Oriol";
$edat = 18;
$ciutat = "Falset";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 9 - Taula de presentació</title>
</head>
<body>

    <table border="1" cellpadding="8" style="border-collapse: collapse; font-family: Arial, sans-serif;">
        <tr>
            <td><strong>Etiqueta</strong></td>
            <td><strong>Valor (PHP)</strong></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><?php echo $nom; ?></td>
        </tr>
        <tr>
            <td>Edat</td>
            <td><?php echo $edat; ?> anys</td>
        </tr>
        <tr>
            <td>Ciutat</td>
            <td><?php echo $ciutat; ?></td>
        </tr>
    </table>

</body>
</html>
