<?php
$notes = [4, 7.5, 5, 3, 9, 6];
define("NOTA_APROVAT", 5);

$aprovats = 0;
$suspesos = 0;

foreach ($notes as $nota) {
    if ($nota >= NOTA_APROVAT) {
        echo "<p>Nota: $nota - Aprovat</p>";
        $aprovats++;
    } else {
        echo "<p>Nota: $nota - Suspès</p>";
        $suspesos++;
    }
}

echo "<p>Total aprovats: $aprovats</p>";
echo "<p>Total suspesos: $suspesos</p>";
?>
