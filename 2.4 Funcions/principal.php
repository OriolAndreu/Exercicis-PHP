<?php
require_once __DIR__ . "/funcions.php";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pràctica de funcions</title>
</head>
<body>
    <h1>Pràctica de funcions</h1>
    
    <h2>Exercici 1</h2>
    <?php
    echo "<p>" . crearSalutacio("Laia") . "</p>";
    echo "<p>" . crearSalutacio("Pol") . "</p>";
    ?>

    <h2>Exercici 2</h2>
    <?php
    $import1 = calcularImport(12.5, 3);
    echo "<p>Import 1: $import1 €</p>";
    echo "<p>Import 2: " . calcularImport(8, 2) . " €</p>";
    ?>
        <h2>Exercici 3</h2>
    <?php
    // Si ometem el segon argument, s'aplica el valor per defecte (10%). 
    // Si passem un 0, forcem que no hi hagi cap descompte (0%).

    echo "<table border='1'>";
    echo "<tr><th>Import inicial</th><th>Percentatge</th><th>Total final</th></tr>";
    echo "<tr><td>80 €</td><td>10% (per defecte)</td><td>" . aplicarDescompte(80) . " €</td></tr>";
    echo "<tr><td>80 €</td><td>25%</td><td>" . aplicarDescompte(80, 25) . " €</td></tr>";
    echo "<tr><td>80 €</td><td>0%</td><td>" . aplicarDescompte(80, 0) . " €</td></tr>";
    echo "</table>";
    ?>
    <h2>Exercici 4</h2>
    <?php
    $notesProva = array(-1, 4.5, 5, 8, 11);

    echo "<table border='1'>";
    echo "<tr><th>Nota</th><th>Resultat</th></tr>";
    foreach ($notesProva as $nota) {
        $resultat = obtenirQualificacio($nota);
        echo "<tr><td>$nota</td><td>$resultat</td></tr>";
    }
    echo "</table>";
    ?>
    <h2>Exercici 5</h2>
    <?php
    $proves = array(
        array(5, 3),
        array(5, 5),
        array(5, 6),
        array(0, 1),
        array(5, 0)
    );

    echo "<table border='1'>";
    echo "<tr><th>Disponibles</th><th>Sol·licitades</th><th>Resultat</th></tr>";

    foreach ($proves as $p) {
        $disp = $p[0];
        $sol = $p[1];

        if (hiHaPlaces($disp, $sol)) {
            $text = "Reserva possible";
        } else {
            $text = "Reserva no possible";
        }

        echo "<tr><td>$disp</td><td>$sol</td><td>$text</td></tr>";
    }

    echo "</table>";
    ?>
    <h2>Exercici 6</h2>
    <?php
    echo "<p>Límit 5: " . sumarFins(5) . "</p>";
    echo "<p>Límit 10: " . sumarFins(10) . "</p>";
    echo "<p>Límit 0: " . sumarFins(0) . "</p>";
    ?>
    <h2>Exercici 7</h2>
    <?php
    $proves = array(
        array(6, 8, 7),
        array(4, 5),
        array()
    );

    foreach ($proves as $notes) {
        $mitjana = calcularMitjana($notes);

        if ($mitjana === null) {
            echo "<p>No hi ha notes</p>";
        } else {
            echo "<p>Mitjana: $mitjana</p>";
        }
    }
    ?>
    <h2>Exercici 8</h2>
    <?php
    $proves = array(
        array(3, 8, 5, 2, 10, 7),
        array(1, 3, 5),
        array()
    );

    foreach ($proves as $llista) {
        echo "<h3>Originals:</h3><ul>";
        foreach ($llista as $n) echo "<li>$n</li>";
        echo "</ul>";

        $parells = obtenirParells($llista);

        echo "<h3>Parells:</h3>";
        if (count($parells) == 0) {
            echo "<p>No hi ha nombres parells</p>";
        } else {
            echo "<ul>";
            foreach ($parells as $p) echo "<li>$p</li>";
            echo "</ul>";
        }
    }
    ?>
    <h2>Exercici 9</h2>
    <?php
    $alumnes = array(
        array("nom" => "Laia", "nota" => 7),
        array("nom" => "Pol", "nota" => 4),
        array("nom" => "Aina", "nota" => 9),
        array("nom" => "Nil", "nota" => 5)
    );

    $proves = array($alumnes, array());

    echo "<table border='1'>";
    echo "<tr><th>Total</th><th>Aprovats</th><th>Suspesos</th><th>Mitjana</th></tr>";

    foreach ($proves as $grup) {
        $res = resumirGrup($grup);
        $mitjana = ($res["mitjana"] === null) ? "Sense dades" : $res["mitjana"];

        echo "<tr>";
        echo "<td>" . $res["total"] . "</td>";
        echo "<td>" . $res["aprovats"] . "</td>";
        echo "<td>" . $res["suspesos"] . "</td>";
        echo "<td>$mitjana</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
    <h2>Exercici 10</h2>
    <?php
    $activitat = array("nom" => "Robòtica", "preu" => 20, "places" => 5);
    $participants = 2;
    $esEstudiant = true;

    if (hiHaPlaces($activitat["places"], $participants)) {
        $res = calcularReserva($activitat["preu"], $participants, $esEstudiant);

        echo "<p>Activitat: " . $activitat["nom"] . " ($participants participants)</p>";
        echo "<ul>";
        echo "<li>Import inicial: " . $res["import"] . " €</li>";
        echo "<li>Percentatge aplicat: " . $res["percentatge"] . " %</li>";
        echo "<li>Descompte: " . $res["descompte"] . " €</li>";
        echo "<li>Total final: " . $res["total"] . " €</li>";
        echo "</ul>";
    } else {
        echo "<p>No hi ha places suficients</p>";
    }
    ?>

</body>
</html>
