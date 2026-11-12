<?php
$alumnes = array(
    array("nom" => "Mar", "nota" => 7),
    array("nom" => "Pol", "nota" => 4),
    array("nom" => "Aina", "nota" => 9),
    array("nom" => "Nil", "nota" => 5)
);
const NOTA_APROVAT = 5;
$suma = 0; $aprovats = 0; $suspesos = 0;

echo "<table border='1'><tr><th>Nom</th><th>Nota</th><th>Resultat</th></tr>";
foreach ($alumnes as $a) {
    $nom = $a["nom"];
    $nota = $a["nota"];
    $res = ($nota >= NOTA_APROVAT) ? "Aprovat" : "Suspès";
    if ($nota >= NOTA_APROVAT) $aprovats++; else $suspesos++;
    echo "<tr><td>$nom</td><td>$nota</td><td>$res</td></tr>";
    $suma += $nota;
}
echo "</table>";

if (count($alumnes) > 0) echo "Mitjana: " . ($suma / count($alumnes)) . " | Aprovats: $aprovats | Suspesos: $suspesos";
else echo "No hi ha alumnes";
?>
