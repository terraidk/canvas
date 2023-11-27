<?php

class Database
{
    public $pdo;

    public function __construct($db = "test", $host = "localhost", $user = "root", $password = "emir2006")
    {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Database connection successful.";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function insertUser($email, $password)
    {
        $sql = "INSERT INTO users VALUES (null, :email, :password)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'email' => $email,
            'password' => $password
        ]);
    }
}

?>