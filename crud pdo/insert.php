<?php
include 'connectie.php';
include 'function_+maxnr.php';
//start van functie
    function bepmaxnr() : int {
        global $conn;
        include 'connectie.php';
        //bepaald welk nummer
        $sql= "SELECT MAX(NR)+1 FROM regisseurs";
        return (int) $conn->query($sql)->fetchColumn();
    }


    $ACHTERNAAM = $_POST['ACHTERNAAM'];
    $VOORNAAM = $_POST['VOORNAAM'];
    $NR = bepmaxnr();
    echo "$NR";
    // prepare sql and bind parameters
    $sql = "INSERT INTO regisseurs (NR, ACHTERNAAM, VOORNAAM)
    VALUES (:NR, :ACHTERNAAM,  :VOORNAAM);";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':NR', $NR);
    $stmt->bindParam(':ACHTERNAAM', $ACHTERNAAM);
    $stmt->bindParam(':VOORNAAM', $VOORNAAM);
    $stmt->execute();
$conn = null;
header('Location: index.php');

?>