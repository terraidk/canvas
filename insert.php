<?php
$servername = "localhost";
$username = "root";
$password = "***********";
// password censored for obvious reasons.
$dbname = "Winkel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST["product_id"];
    $product_naam = $_POST["product_naam"];
    $prijs_per_stuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];

    
    $sql = "INSERT INTO Producten (product_naam, prijs_per_stuk, omschrijving)
            VALUES ('$product_naam', '$prijs_per_stuk', '$omschrijving')";

    if ($conn->query($sql) == TRUE) {
        echo "Product '$product_naam' is succesvol toegevoegd.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>Voeg een nieuw product toe</h1>
    <form method="POST" action="">

        <label for="product_naam">Product ID:</label>
        <input type="text" name="product_id" id="product_id">

        <label for="product_naam">Product Naam:</label>
        <input type="text" name="product_naam" id="product_naam">

        <label for="prijs_per_stuk">Prijs per stuk:</label>
        <input type="text" name="prijs_per_stuk" id="prijs_per_stuk">

        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" id="omschrijving"></textarea>

        <button type="submit">Voeg product toe</button>
    </form>
</body>
</html>
