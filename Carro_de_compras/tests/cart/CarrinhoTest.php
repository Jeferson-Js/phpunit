<?php

namespace tests;

use app\Carrinho;
use app\Produto;
use PHPUnit\Framework\TestCase;

class CarrinhoTest extends TestCase
{
    public function test_get_value_total_car()
    {
        $produto1 = new Produto(1, 'Computador', 10.00);
        $produto2 = new Produto(2, 'Televisao', 8.00);


        $carrinho = new Carrinho();

        $carrinho->adicionar_produto($produto1);
        $carrinho->adicionar_produto($produto2);

        $this->assertEquals(18.00, $carrinho->pegar_total());
    }
}
