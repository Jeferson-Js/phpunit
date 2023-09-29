<?php

namespace tests\library;

use app\library\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testSoma()
    {
        $calculator = new Calculator();
        $result = $calculator->soma(5, 5);
        $this->assertEquals(10, $result);
    }

    public function testSubitracao()
    {
        $calculator = new Calculator();
        $resultado = $calculator->subitracao(5, 1);
        $this->assertEquals(4, $resultado);
    }
}
