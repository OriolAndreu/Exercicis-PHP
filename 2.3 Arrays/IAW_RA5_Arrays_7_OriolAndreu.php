<?php
$nombres = array(
    array(2, 4, 6),
    array(1, 3, 5),
    array(7, 8, 9)
);

echo $nombres[0][1] . "<br>";
echo $nombres[1][2] . "<br>";

$nombres[1][1] = 30;

echo "Files: " . count($nombres) . "<br>";
echo "Elements fila 1: " . count($nombres[0]) . "<br>";

echo "<table border='1'>";
foreach ($nombres as $fila) {
    echo "<tr>";
    foreach ($fila as $num) echo "<td>$num</td>";
    echo "</tr>";
}
echo "</table>";
?>
