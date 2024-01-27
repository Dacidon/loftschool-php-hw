<?php

namespace hw4;

class StudentTariff extends AbstractTariffClass
{
    public int $km_price = 4;
    public int $min_price = 1;
    protected array $services = [];


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