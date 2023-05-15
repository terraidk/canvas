<!DOCTYPE html>
<html>
<head>
    <title>POST Form</title>
</head>
<body>
    <form action="post.php" method="post">
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
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["age"]) && isset($_POST["address"]) && isset($_POST["email"])) {
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $age = $_POST["age"];
            $address = $_POST["address"];
            $email = $_POST["email"];

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
