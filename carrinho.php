<?php require_once('header.php')?>
<link rel="stylesheet" href="assets/css/carrinho.css">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/banner.css">
    <link rel="stylesheet" href="assets/css/categorias.css">
    <link rel="stylesheet" href="assets/css/carrinho.css">
    <link rel="stylesheet" href="assets/css/productos.css">
    <link rel="stylesheet" href="assets/css/rodape.css">
    <link rel="stylesheet" href="assets/css/media.css">

<!-- START OF SHOPPING CART -->
<div class="corpo-categorias carrinho-compras">
        <!-- START OF TABLE -->
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <!-- INÍCIO ITEM DO CARRINHO -->
                <tr>
                    <td>
                        <div class="info-carrinho">
                            <img src="assets/img/carrinho/carrinho-1.jpg" alt="">
                            <div>
                                <p>Curso Loja Virtual</p>
                                <small>Valor: 777 Kzs</small>
                                <br>
                                <a href="#" title="">Remover</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="number" name="" id="" value="1">
                        </form>
                    </td>
                    <td>777 Kzs</td>
                </tr>
                <!-- INÍCIO ITEM DO CARRINHO -->

                <!-- INÍCIO ITEM DO CARRINHO -->
                <tr>
                    <td>
                        <div class="info-carrinho">
                            <img src="assets/img/carrinho/carrinho-2.jpg" alt="">
                            <div>
                                <p>Curso Loja Virtual</p>
                                <small>Valor: 777 Kzs</small>
                                <br>
                                <a href="#" title="">Remover</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="number" name="" id="" value="1">
                        </form>
                    </td>
                    <td>777 Kzs</td>
                </tr>
                <!-- INÍCIO ITEM DO CARRINHO -->

                <!-- INÍCIO ITEM DO CARRINHO -->
                <tr>
                    <td>
                        <div class="info-carrinho">
                            <img src="assets/img/carrinho/carrinho-3.jpg" alt="">
                            <div>
                                <p>Curso Loja Virtual</p>
                                <small>Valo r: 777 Kzs</small>
                                <br>
                                <a href="#" title="">Remover</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="number" name="" id="" value="1">
                        </form>
                    </td>
                    <td>777 Kzs</td>
                </tr>
                <!-- INÍCIO ITEM DO CARRINHO -->
            </tbody>
        </table>
        <!-- END OF TABLE -->

        <!-- START TOTAL VALUE -->
        <div class="valor-total">
            <table>
                <tbody>
                    <tr>
                        <td>Sub-Total</td>
                        <td>700 Kzs</td>
                    </tr>

                    <tr>
                        <td>Frete</td>
                        <td>77Kzs</td>
                    </tr>

                    <tr>
                        <td>Total</td>
                        <td>777 Kzs</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END TOTAL VALUE -->
    </div>
    <!-- END OF SHOPPING CART -->

    <a href="pagamento.php">
        <button class="btn btn_pay">Fazer Pagamento</button>
    </a>

<?php require_once('footer.php')?>