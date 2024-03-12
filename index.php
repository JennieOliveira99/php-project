<?php
ob_start();
//require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magicstore.com.br</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href ="./estilo/style.css">
</head>
<body>
    <!-- TOPO-->

    <header class="header">
    <p class="logo">Loja Magic</p>
    <div class="cart">
        <i class="fa fa-shopping-cart"></i>
        <p> 0</p>
    </div>
    </header>

    <div class="container">
    <div class="linha-produto">

    <!-- PRODUTO 1-->
    <form action="filtros/criar.php" method="post">
        <div class="corpoProduto">
            <div class="imgProduto">
                <img class="produtoMini" src="./img/produto1.jpg" alt="">
            </div>
            <div class="titulo">
                <p>Teste</p>

                <h2>422.99</h2>
                <input type="hidden" name="id_produto" value="">
                <input type="hidden" name="valor" value="">
                <button type="submit" class="button" name="addcarrinho" >Adcionar ao Carrinho</button>
            </div>
    </div>
    </form>
    <!-- PRODUTO 1-->
    <form action="filtros/criar.php" method="post">
        <div class="corpoProduto">
            <div class="imgProduto">
                <img class="produtoMini" src="./img/produto1.jpg" alt="">
            </div>
            <div class="titulo">
                <p>Teste</p>

                <h2>422.99</h2>
                <input type="hidden" name="id_produto" value="">
                <input type="hidden" name="valor" value="">
                <button type="submit" class="button" name="addcarrinho" >Adcionar ao Carrinho</button>
            </div>
    </div>
    </form>

    <!-- PRODUTO 1-->
    <form action="filtros/criar.php" method="post">
        <div class="corpoProduto">
            <div class="imgProduto">
                <img class="produtoMini" src="./img/produto1.jpg" alt="">
            </div>
            <div class="titulo">
                <p>Teste</p>

                <h2>422.99</h2>
                <input type="hidden" name="id_produto" value="">
                <input type="hidden" name="valor" value="">
                <button type="submit" class="button" name="addcarrinho" >Adcionar ao Carrinho</button>
            </div>
    </div>
    </form>

    <!-- PRODUTO 1-->
    <form action="filtros/criar.php" method="post">
        <div class="corpoProduto">
            <div class="imgProduto">
                <img class="produtoMini" src="./img/produto1.jpg" alt="">
            </div>
            <div class="titulo">
                <p>Teste</p>

                <h2>422.99</h2>
                <input type="hidden" name="id_produto" value="">
                <input type="hidden" name="valor" value="">
                <button type="submit" class="button" name="addcarrinho" >Adcionar ao Carrinho</button>
            </div>
    </div>
    </form>
    </div>


  <!-- BARRA LATERAL -->
  <div class="barraLateral">
        <div class="topoCarrinho">
            <p>Meu Carrinho</p>
        </div>

        <!-- PRODUTO CARRINHO -->
        <div class="itemCarrinho">
            <div class="linhaDaImagem">
                <img class="imgCarrinho" src="./img/produto1.jpg" alt="">
            </div>
            <p>Outros Produtos</p>
            <h2>499.99</h2>
            <form action="filtros/excluir.php" method="post">
                <input type="hidden" name="id_produto" value="">
                <button type="submit" style="border:none; background: none;">
                <i class="fa fa-trash"></i>
                </button>
            </form>
        </div>
        <!-- CARRINHO VAZIO -->
        <div class="item-carrinho-vazio">
            Seu carrinho está vazio!
            <div class="rodape">
                <h3>Total</h3>
                <h2>497.99</h2>
            </div>
        </div>
    </div>
</body>
</html>