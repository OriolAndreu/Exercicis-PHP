<?php
$materials = ["Llapis", "Paper", "Goma"];

echo "<h3>Inicial:</h3><ul>";
foreach ($materials as $material) echo "<li>$material</li>";

$materials[1] = "Carpeta";
$materials[] = "Regle";

echo "</ul><h3>Final (" . count($materials) . " elements):</h3><ul>";
foreach ($materials as $material) echo "<li>$material</li>";
echo "</ul>";