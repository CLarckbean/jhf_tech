<?php require_once('header.php')?>
<link rel="stylesheet" href="assets/css/minha-conta.css">

<!-- inicio minha conta -->
<div class="minha-conta">
        <div class="container">
            <div class="linha">
                <div class="col-2">
                    <img src="assets/img/banner-1.png" alt="" width="100%">
                </div>

                <div class="col-2">
                    <div class="formulario">
                        <div class="btn-form">
                            <span onclick="entrar()">Entrar</span>
                            <span onclick="cadastrar()">Cadastro</span>
                            <hr id="indicador">
                        </div>

                        <form action="login.php" method="post" id="entrarPainel">
                            <input type="text" name="email" id="" placeholder="E-mail de acesso">
                            <input type="password" name="senha" id="" placeholder="Digite sua senha">
                            <button type="submit" name="sendEntrar" class="btn">Entrar</button>
                            <a href="" title="">Esqueceu sua senha?</a>
                        </form>

                        <form action="registro.php" method="post" id="cadastroSite">
                            <input type="text" name="nome" id="" placeholder="Nome Completo">
                            <input type="text" name="email" id="" placeholder="E-mail de acesso">
                            <input type="password" name="senha" id="" placeholder="Digite sua senha">
                            <button type="submit" name="sendCadastro" class="btn">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/login.js"></script>
<?php require_once('footer.php')?>