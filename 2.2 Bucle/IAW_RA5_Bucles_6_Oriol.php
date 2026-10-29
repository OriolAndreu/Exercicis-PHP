<?php
define("LIMIT", 10);
$suma = 0; 

for ($i = 1; $i <= LIMIT; $i++) {
    $suma = $suma + $i;
}

echo "<p>El total de la suma és: $suma</p>";
?>
