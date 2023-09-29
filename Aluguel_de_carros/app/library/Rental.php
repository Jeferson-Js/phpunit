<?php

namespace app\library;

use app\library\Car;
use app\library\Customer;
use DateTime;

class Rental
{
    private $car;
    private $customer;
    private $startDay;
    private $endDay;

    public function __construct(Car $car, Customer $customer, $startDay, $endDay)
    {
        $this->car = $car;
        $this->customer = $customer;
        $this->startDay = $startDay;
        $this->endDay = $endDay;
    }

    public function getCar()
    {
        return $this->car;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getStartDay()
    {
        return $this->startDay;
    }

    public function getEndDay()
    {
        return $this->endDay;
    }

    public function calculateRentalCost()
    {
        $startDay = new DateTime($this->startDay);
        $endDay = new DateTime($this->endDay);
        $interval = $startDay->diff($endDay);
        $totalDays = $interval->days;

        $pricePerDay = $this->car->getPricePerDay();

        $totalCost = $totalDays * $pricePerDay;

        return $totalCost;
    }
}
