<?php

namespace app\library;

class Car
{
    private $id;
    private $brand;
    private $pricePerDay;

    public function __construct($id, $brand, $pricePerDay)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->pricePerDay = $pricePerDay;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getPricePerDay()
    {
        return $this->pricePerDay;
    }
}
