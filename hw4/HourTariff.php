<?php

namespace hw4;

class HourTariff extends AbstractTariffClass
{
    protected int $km_price = 0;
    protected int $min_price = 200;
    protected array $services = [];


    public function count_total() {
        $total = (ceil($this->min / 60)) * $this->min_price;

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