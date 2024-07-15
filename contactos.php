<?php require_once('header.php')?>
<title>Carrinho</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/banner.css">
    <link rel="stylesheet" href="assets/css/categorias.css">
    <link rel="stylesheet" href="assets/css/minha-conta.css">
    <link rel="stylesheet" href="assets/css/productos.css">
    <link rel="stylesheet" href="assets/css/rodape.css">
    <link rel="stylesheet" href="assets/css/media.css">

<!-- inicio minha cconta -->
<div class="minha-conta">
        <div class="container">
            <div class="linha">
                <div class="col-2">
                    <img src="assets/img/banner-1.png" alt="" width="100%">
                </div>

                <div class="col-2">
                    <div class="formulario">
                        <div class="btn-form">
                            <span class="cadastro">Cadastro</span>
                        </div>

                        <form action="registro.php" method="post" id="cadastroSite">
                            <input type="text" name="nome" id="" placeholder="Nome Completo">
                            <input type="tel" name="tel" id="" placeholder="Número de telefone">
                            <input type="text" name="nome" id="" placeholder="E-mail de acesso">
                            <input type="password" name="senha" id="" placeholder="Digite sua senha">
                            <button type="submit" name="sendCadastro" class="btn">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('footer.php')?>