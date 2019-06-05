<?php
/*
Dit is een voorbeeld voor het ophalen van de resultaten uit het formuliervoorbeeld.html
*/

// Resultaat ophalen uit het formulier.
$naam = $_POST["naam"];
$email = $_POST["email"];
$opmerkingen = $_POST["opmerkingen"];

// Waarde op het scherm schrijven..
echo "<b>Naam:</b> $naam</br>";
echo "<b>E-mail:</b> $email</br>";
echo "<b>Opmerkingen: </b> $opmerkingen</br>";






?>