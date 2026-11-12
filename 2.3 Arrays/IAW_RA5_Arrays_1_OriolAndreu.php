<?php
$ciutats = ["Tarragona", "Reus", "Tortosa", "Lleida"];

echo "Primera ciutat de la llista: $ciutats[0] <br><br> Última ciutat de la llista: $ciutats[3]";

echo " <br><br> El nombre total de ciutats es: " .count($ciutats);

echo " <br><br><br>Totes les ciutats en format llista: <ul>";
foreach ($ciutats as $ciutat) {
    echo "<li>" .$ciutat. "</li>";
}
echo "</ul>";