<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $nome_completo = $_POST['nome'];

    // Verificar se o email já está cadastrado
    $sql_check = "SELECT * FROM jhf_tech WHERE email='$email'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        echo "Este email já está cadastrado.";
    } else {
        $sql = "INSERT INTO jhf_tech (senha, email, nome_completo) VALUES ('$senha', '$email', '$nome_completo')";

        if ($conn->query($sql) === TRUE) {
            echo "Novo usuário criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
}
header('Location: ../../productos.html')
?>


