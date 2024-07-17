<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['nome_completo'];
            header('location: carrinho.php');
            
            
        } else {
            echo "Password incorreta.";
            
        }
    } else {
        echo "Email não cadastrado.";
    }
}

    $stmt->close();


$conn->close();


?>




