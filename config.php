<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jhf_tech";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configure PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>