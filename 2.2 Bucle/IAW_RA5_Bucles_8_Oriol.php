<?php
$moduls = ["IAW", "GBD", "ASO", "SRI"];

// Afegim un cinquè mòdul a l'array
$moduls[] = "SAD";

echo "<ul>";
foreach ($moduls as $modul) {
    echo "<li>$modul</li>";
}
echo "</ul>";
?>
