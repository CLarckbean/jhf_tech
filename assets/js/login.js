let menuItens = document.querySelector("#menuItens");
menuItens.style.height = "0px";

function menucelular() {
    if (menuItens.style.height == "0px") {
        menuItens.style.height = "180px";
    } else {
        menuItens.style.height = "0px";
    }
}

let entrarPainel = document.querySelector("#entrarPainel");

let cadastroSite = document.querySelector("#cadastroSite");

let indicador = document.querySelector("#indicador");

function cadastrar() {
    cadastroSite.style.transform = "translateX(0px)";
    entrarPainel.style.transform = "translateX(0px)";
    indicador.style.transform = "translateX(100px)";
}

function entrar() {
    cadastroSite.style.transform = "translateX(300px)";
    entrarPainel.style.transform = "translateX(300px)";
    indicador.style.transform = "translateX(0px)";
}