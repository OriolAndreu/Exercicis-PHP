<?php
// Definim la constant i la variable
define ("REPETICIONS", 5); // Després es pot canviar a 3
$nom = "Oriol";

// Bucle per repetir la salutació
for ($i = 1; $i <= REPETICIONS; $i++) {
    echo "<p>$i. Hola, $nom!</p>";
}
?>
