<?php

function crearSalutacio($nom) {
    return "Hola, $nom! Benvingut/uda a IAW";
}

function calcularImport($preu, $quantitat) {
    return $preu * $quantitat;
}

function aplicarDescompte($import, $percentatge = 10) {
    $descompte = $import * $percentatge / 100;
    return $import - $descompte;
}

function obtenirQualificacio($nota) {
    if ($nota < 0 || $nota > 10) {
        return "Nota no vàlida";
    } elseif ($nota >= 5) {
        return "Aprovat";
    } else {
        return "Suspès";
    }
}

function hiHaPlaces($disponibles, $sollicitades) {
    if ($disponibles >= 0 && $sollicitades > 0 && $sollicitades <= $disponibles) {
        return true;
    } else {
        return false;
    }
}

function sumarFins($limit) {
    if ($limit < 1) {
        return 0;
    }
    
    $suma = 0;
    for ($i = 1; $i <= $limit; $i++) {
        $suma = $suma + $i;
    }
    return $suma;
}

function calcularMitjana($notes) {
    if (count($notes) == 0) {
        return null;
    }

    $suma = 0;
    foreach ($notes as $nota) {
        $suma = $suma + $nota;
    }

    return $suma / count($notes);
}
function obtenirParells($nombres) {
    $parells = array();

    foreach ($nombres as $num) {
        if ($num % 2 == 0) {
            $parells[] = $num;
        }
    }

    return $parells;
}

function resumirGrup($alumnes) {
    $total = count($alumnes);

    if ($total == 0) {
        return array("total" => 0, "aprovats" => 0, "suspesos" => 0, "mitjana" => null);
    }

    $suma = 0;
    $aprovats = 0;
    $suspesos = 0;

    foreach ($alumnes as $a) {
        $suma = $suma + $a["nota"];
        if ($a["nota"] >= 5) {
            $aprovats++;
        } else {
            $suspesos++;
        }
    }

    return array(
        "total" => $total,
        "aprovats" => $aprovats,
        "suspesos" => $suspesos,
        "mitjana" => $suma / $total
    );
}
function calcularReserva($preu, $participants, $esEstudiant) {
    $import = calcularImport($preu, $participants);

    if ($esEstudiant) {
        $percentatge = 20;
    } elseif ($participants == 4 || $participants == 5) {
        $percentatge = 10;
    } else {
        $percentatge = 0;
    }

    $descompte = $import * $percentatge / 100;
    $total = $import - $descompte;

    return array(
        "import" => $import,
        "percentatge" => $percentatge,
        "descompte" => $descompte,
        "total" => $total
    );
}
