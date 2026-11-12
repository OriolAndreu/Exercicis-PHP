<?php
$grup = array(
    array("nom" => "Mar", "notes" => array(6, 8, 7)),
    array("nom" => "Pol", "notes" => array(4, 5, 3)),
    array("nom" => "Aina", "notes" => array(9, 8, 10)),
    array("nom" => "Nil", "notes" => array())
);
const NOTA_APROVAT = 5;

foreach ($grup as $a) {
    echo "<h2>{$a['nom']}</h2>";
    if (count($a["notes"]) == 0) {
        echo "Sense notes";
    } else {
        $suma = 0;
        echo "<ul>";
        foreach ($a["notes"] as $n) {
            echo "<li>$n</li>";
            $suma = $suma + $n;
        }
        $mitjana = $suma / count($a["notes"]);
        $estat = ($mitjana >= NOTA_APROVAT) ? "Aprovat" : "Suspès";
        echo "</ul>Mitjana: $mitjana ($estat)";
    }
}
?>
