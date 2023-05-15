<!DOCTYPE html>
<html>
<head>
    <title>GET Form</title>
</head>
<body>
    <form action="get.php" method="get">
        <label for="name">Naam:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="surname">Achternaam:</label>
        <input type="text" name="surname" id="surname" required><br>

        <label for="age">Leeftijd:</label>
        <input type="number" name="age" id="age" required><br>

        <label for="address">Adres:</label>
        <input type="text" name="address" id="address" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Verzenden">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        if (isset($_GET["name"]) && isset($_GET["surname"]) && isset($_GET["age"]) && isset($_GET["address"]) && isset($_GET["email"])) {
            $name = $_GET["name"];
            $surname = $_GET["surname"];
            $age = $_GET["age"];
            $address = $_GET["address"];
            $email = $_GET["email"];

            echo "<h3>Ingevoerde gegevens:</h3>";
            echo "Naam: $name<br>";
            echo "Achternaam: $surname<br>";
            echo "Leeftijd: $age<br>";
            echo "Adres: $address<br>";
            echo "Email: $email<br>";
        }
    }
    ?>
</body>
</html>