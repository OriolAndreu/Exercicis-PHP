<?php
$contacte = ["nom" => "Pol", "telefon" => null];

echo "<h2>telefon</h2>";
echo "<p>" . (array_key_exists("telefon", $contacte) ? "La clau existeix" : "La clau NO existeix") . "</p>";
echo "<p>" . (isset($contacte["telefon"]) ? "Existeix i no és null" : "NO existeix o és null") . "</p>";

echo "<h2>email</h2>";
echo "<p>" . (array_key_exists("email", $contacte) ? "La clau existeix" : "La clau NO existeix") . "</p>";
echo "<p>" . (isset($contacte["email"]) ? "Existeix i no és null" : "NO existeix o és null") . "</p>";