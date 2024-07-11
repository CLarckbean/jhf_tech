<?php
$servername = "localhost";
$username = "root";  // Seu nome de usuário do MySQL
$password = "";  // Sua senha do MySQL
$dbname = "jhf_tech";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

