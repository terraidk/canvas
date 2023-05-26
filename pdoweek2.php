<?php
$servername = "localhost";
$username = "root";
$password = "***********";
$dbname = "Winkel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to database ($dbname).";

$conn->close();
?>
