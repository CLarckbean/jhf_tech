document.getElementById('paymentForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    // Obter o número do cartão digitado
    const cardNumber = document.getElementById('cardNumber').value;
  
    // Expressão regular para validar 14 dígitos
    const regex = /^\d{14}$/;
  
    // Verificar se o número do cartão corresponde ao padrão
    if (regex.test(cardNumber)) {
      document.getElementById('result').innerHTML = `<p class="success">Pagamento efetuado com sucesso!</p>`;
      // Aqui você poderia adicionar código para processar o pagamento, enviar dados para o backend, etc.
    } else {
      document.getElementById('result').innerHTML = `<p class="error">Número do cartão inválido. Deve conter exatamente 14 dígitos numéricos.</p>`;
    }
  });
  