<?php
include 'db.php';

$sql = "SELECT id, senha, email, nome_completo FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome_completo"]. " - Email: " . $row["email"]. " - Senha: " . $row["senha"]. "<br>";
    }
} else {
    echo "0 resultados";
}
?>
