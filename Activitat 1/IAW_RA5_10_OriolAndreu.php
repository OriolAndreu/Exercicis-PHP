<?php
/**
 * Cicle Formatiu: ASIX (Administració de Sistemes Informàtics en Xarxa)
 * Autor: Oriol Andreu
 * Descripció: Exercici 10 - Targeta personal senzilla en una capa div.
 * Data: 15/10/2026
 */

$nom = "Oriol Andreu";
$url_imatge = "Logo_depeducacio.jpg"; 
$data_actual = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 10 - Targeta Personal</title>
</head>
<body>

    <div style="border: 1px solid black; padding: 20px; width: 250px;">
        
        <img src="<?php echo $url_imatge; ?>" alt="Foto" width="100">
        
        <h2><?php echo $nom; ?></h2>
        
        <p>Hola, sóc estudiant d'ASIX i aquesta és la meva pràctica.</p>
        
        <p>Data d'avui: <?php echo $data_actual; ?></p>
        
    </div>

</body>
</html>
