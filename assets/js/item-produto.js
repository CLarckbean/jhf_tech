const imagens =  document.querySelectorAll('.col-4 a img');
let indexImagem;

imagens.forEach((imagem) => {
    imagem.addEventListener('click', (event) => {
        const imagemClicada = event.target;
        indexImagem = imagemClicada.getAttribute('data-index');
    });
});


const button = document.querySelector('#adicionarAoCarrinho');

const precoProduto = document.querySelector('.col-4 p');

const quantidadeProduto = document.querySelector('.col-4 input[type="number]');

function adicionarAoCarrinho(produto) {
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

    carrinho.push(produto);
    localStorage.setItem('carrinho', JSON.stringify(carrinho));0
}

button.addEventListener('click', () => {
    const produto = {
        nome: imagemClicada[indexImagem - 1].alt,
        preco: precoProduto.textContent.split(' ')[1],
        quantidade: quantidadeProduto.value
    }

    adicionarAoCarrinho(produto);
});