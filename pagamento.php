<?php 
// require_once('login.php');
if(isset($_SESSION['user_id'])){
  // header('location: minh.php');
}
else{
  header('location: minha-conta.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simulação de Pagamento</title>
  <link rel="stylesheet" href="assets/css/pagamento.css">
</head>
<body>
  <div class="container">
    <h2>Simulação de Pagamento</h2>
    <form id="paymentForm" action="processa_pagamento.php" method="post">
      <label for="cardNumber">Número do Cartão (14 dígitos):</label>
      <input type="text" id="cardNumber" name="cardNumber" pattern="\d{14}" required>
      <button type="submit">Pagar</button>
    </form>
    <div id="result"></div>
  </div>

  <script src="script.js"></script>
</body>
</html>
