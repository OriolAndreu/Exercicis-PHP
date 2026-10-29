<?php
$repeticions = 0;

// Prova amb do...while
echo "<h3>Prova amb do...while</h3>";
$i = 1;
do {
    echo "<p>Volta $i</p>";
    $i++;
} while ($i <= $repeticions);


// Prova amb while
echo "<h3>Prova amb while</h3>";
$j = 1;
while ($j <= $repeticions) {
    echo "<p>Volta $j</p>";
    $j++;
}
?>
