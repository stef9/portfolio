<?php
    include 'connectie.php';


if(isset($_GET['NR'])) {
    $NR = $_GET['NR'];
}

    $sql = "DELETE FROM regisseurs WHERE NR=:NR";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':NR', $NR);
    $stmt->execute();
    header("location: index.php?comment=regisseur_verwijderd");


$conn = null;
?>
