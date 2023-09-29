<?php

namespace test;

use app\library\Car;
use app\library\Customer;
use app\library\Rental;

use PHPUnit\Framework\TestCase;

class RentalTest extends TestCase
{
    public function testCalculateRentalCost()
    {
        //Crie o carro
        $car = new Car(1, 'BMW-Z4', 100.00);

        //Crie o cliente
        $customer = new Customer('Jeferson', 'jeferson@gmail.com');

        //Crie um aluguel 
        $rental = new Rental($car, $customer, '2023-09-01', '2023-09-11');

        //Calcule o aluguel 
        $cost = $rental->calculateRentalCost();

        //Verifique se o aluguel esta correto e o valor esperado!
        $this->assertEquals(1000.00, $cost);
    }
}
