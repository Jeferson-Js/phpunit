<?php

require "Produto.php";
require "Carrinho.php";

// Criação dos produtos
$produto1 = new Produto(1, 'Computador', 10.00);
$produto2 = new Produto(2, 'Televisao', 8.00);

//Inicialização do carrinho
$carrinho = new Carrinho();

$carrinho->adicionar_produto($produto1);
$carrinho->adicionar_produto($produto2);

//Exobir o total do carrinho

echo "Total do Carrinho: R$: " . number_format($carrinho->pegar_total(),2);

?>


