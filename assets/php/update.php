<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $nome_completo = $_POST['nome_completo'];

    $sql = "UPDATE usuarios SET senha='$senha', email='$email', nome_completo='$nome_completo' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

?>

<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Senha: <input type="text" name="senha" value="<?php echo $row['senha']; ?>"><br>
    Email: <input
