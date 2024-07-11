<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $nome_completo = $_POST['nome'];

    $sql = "INSERT INTO jhf_tech (senha, email, nome_completo) VALUES ('$senha', '$email', '$nome_completo')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo usuário criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
header('Location: minha-conta.html')
?>


