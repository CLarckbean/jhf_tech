
<?php
include_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

    // Verificar se o email já está registrado
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Email já registrado.";
    } else {
        // Inserir novo usuário
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        if ($stmt->execute()) {
            echo "Registro bem-sucedido.";
        } else {
            echo "Erro ao registrar usuário.";
        }
    }
}
// header('location: ')
?>