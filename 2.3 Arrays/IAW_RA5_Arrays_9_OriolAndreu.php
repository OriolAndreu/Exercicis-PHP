<?php
$productes = array(
    "P01" => array("nom" => "Teclat", "preu" => 25, "estoc" => 4),
    "P02" => array("nom" => "Ratolí", "preu" => 12, "estoc" => 0),
    "P03" => array("nom" => "Monitor", "preu" => 150, "estoc" => 2)
);

echo "<p>" . $productes["P02"]["nom"] . " - " . $productes["P02"]["preu"] . " €</p>";

$productes["P02"]["estoc"] = 3;
$productes["P04"] = array("nom" => "Cable", "preu" => 8, "estoc" => 5);

$total = 0;
echo "<table border='1'><tr><th>Codi</th><th>Nom</th><th>Preu</th><th>Estoc</th><th>Valor</th></tr>";
foreach ($productes as $codi => $p) {
    $valor = $p["preu"] * $p["estoc"];
    $total = $total + $valor;
    echo "<tr><td>$codi</td><td>{$p['nom']}</td><td>{$p['preu']} €</td><td>{$p['estoc']}</td><td>$valor €</td></tr>";
}
echo "</table>Total: $total €";
?>
