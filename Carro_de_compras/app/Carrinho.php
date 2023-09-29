<?php

namespace app;

class Carrinho
{
    public $items = [];

    public function adicionar_produto(Produto $produto)
    {
        $this->items[] = $produto;
    }

    public function pegar_total()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->preco;
        }
        return $total;
    }
}
