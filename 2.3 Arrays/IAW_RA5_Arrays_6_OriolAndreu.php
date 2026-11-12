<?php
$preus = ["Llibreta" => 3.50, "Bolígraf" => 1.20, "Carpeta" => 2.80, "Regle" => 1.50];
$total = 0;
$cars = 0;

echo "<table border='1'><tr><th>Article</th><th>Preu</th></tr>";
foreach ($preus as $article => $preu) {
    echo "<tr><td>$article</td><td>$preu €</td></tr>";
    $total += $preu;
    if ($preu >= 2) $cars++;
}
echo "</table>";

echo "Total: $total € <br>";
echo "Articles de 2 € o més: $cars";
?>
