<?php

namespace hw4;

abstract class AbstractTariffClass implements CountAddInterface
{
    protected int $km;
    protected int $min;
    private int $km_price;
    private int $min_price;
    protected array $services;
    private int $total;
    public function __construct(int $km, int $min)
    {
        $this->km = $km;
        $this->min = $min;
    }
    public function count_total() {
        $total = ($this->km * $this->km_price) + ($this->min * $this->min_price);

        foreach($this->services as $service) {
            $service->apply($this, $total);
        }

        return $total;
    }

    public function add_service(ServiceInterface $service)
    {
        $this->services[] = $service;
        return $this;
    }

    public function get_minutes()
    {
        return $this->min;
    }
}