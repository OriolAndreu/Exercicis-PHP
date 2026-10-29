<?php
$estalvi = 0;
define("OBJECTIU", 120);
define("APORTACIO", 25);

$setmana = 0;

while ($estalvi < OBJECTIU) {
    $setmana++;
    $estalvi = $estalvi + APORTACIO;
    echo "<p>Setmana $setmana: $estalvi €</p>";
}

echo "<p>Setmanes totals: $setmana</p>";
echo "<p>Total estalviat: $estalvi €</p>";
?>
