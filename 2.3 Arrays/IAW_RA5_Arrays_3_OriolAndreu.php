<?php
$colors = ["Verd", "Blau", "Blanc", "Negre"];
unset($colors[1]);

echo "<h3>Abans (" . count($colors) . ")</h3><table border='1'>";
foreach ($colors as $color => $v) echo "<tr><td>$color</td><td>$v</td></tr>";
echo "</table>";

$colors = array_values($colors);

echo "<h3>Després (" . count($colors) . ")</h3><table border='1'>";
foreach ($colors as $color => $v) echo "<tr><td>$color</td><td>$v</td></tr>";
echo "</table>";
