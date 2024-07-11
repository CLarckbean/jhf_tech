let menuItens = document.querySelector("#menuItens");
menuItens.style.height = "0px";

function menucelular() {
    if (menuItens.style.height == "0px") {
        menuItens.style.height = "180px";
    } else {
        menuItens.style.height = "0px";
    }
}

/* ---------- SLIDE DA GALERIA DO PRODUCTO ---------- */

let produtoImg = document.querySelector("#productoImg");

let productoMiniatura = document.querySelectorAll(".productoMiniatura");

for (let i = 0; i < 4; i++) {
    productoMiniatura[i].onclick = function() {
        produtoImg.src = productoMiniatura[i].src;
    }
}