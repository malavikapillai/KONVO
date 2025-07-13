<?php
// session_start();

$host = getenv("DB_HOST");
$dbname = getenv("DB_NAME");
$username = getenv("DB_USER");
$port = getenv("DB_PORT"); // NEW
$password = getenv("DB_PASSWORD");

// $host = "localhost";
// $dbname = "study_groups";
// $username = "root";
// $password = "";



try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}


?>
