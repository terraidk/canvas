<?php
// Deel 1: Selecteer alle data uit de tabel en print deze in php


$host = 'localhost';
$dbname = 'winkel';
$username = 'root';
$password = 'emir2006';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM Producten";
    $stmt = $conn->prepare($query);

    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Productcode: " . $row['product_code'] . "<br>";
        echo "Productnaam: " . $row['product_naam'] . "<br>";
        echo "Prijs per stuk: " . $row['prijs_per_stuk'] . "<br>";
        echo "Omschrijving: " . $row['omschrijving'] . "<br><br>";
    }

    // Deel 2: Selecteer alleen het product met product_code 1

    $query = "SELECT * FROM Producten WHERE product_code = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute(array(1));

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Productcode: " . $row['product_code'] . "<br>";
        echo "Productnaam: " . $row['product_naam'] . "<br>";
        echo "Prijs per stuk: " . $row['prijs_per_stuk'] . "<br>";
        echo "Omschrijving: " . $row['omschrijving'] . "<br><br>";
    }

 
    // Deel 3: Selecteer alleen het product met product_code 2

    $query = "SELECT * FROM Producten WHERE product_code = :product_code";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':product_code', 2);
    $stmt->execute();
        
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Productcode: " . $row['product_code'] . "<br>";
        echo "Productnaam: " . $row['product_naam'] . "<br>";
        echo "Prijs per stuk: " . $row['prijs_per_stuk'] . "<br>";
        echo "Omschrijving: " . $row['omschrijving'] . "<br><br>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
