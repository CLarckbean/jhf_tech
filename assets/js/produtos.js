/* ------ PAGINAÇÃO ------- */

let listaProdutos = document.querySelector("#lista-produtos");
let pag = document.querySelectorAll('.pag');
let Produtos = document.querySelectorAll('.col-4 img');

for (let i = 0; i < 4; i++) {
    pag[i].addEventListener('click', () => {
        let indicador;

        if (i === 0) {
            for (let j = 0; j < 6; j++) {
                indicador = (j + 1) + (i * 10);
                Produtos[j].src = `../assets/img/produtos/galeria-${indicador}/produto-1.png`;
                Produtos[j].classList.add('maior-preco');
            }

            for (let j = 6; j < 12; j++) {
                indicador = (j + 1) + (i * 10);
                Produtos[j].src = `../assets/img/produtos/produto-${indicador}.png`;
            }
        } else {
            for (let j = 0; j < 12; j++) {
                indicador = ((j + 1) + (2 * i)) + (i * 10);
                Produtos[j].src = `../assets/img/produtos/produto-${indicador}.png`;
            }
        }
    });
}

/* ------- FILTRO -------- */
