<?php

namespace hw4;

class GpsService implements ServiceInterface
{
    public function use(CountAddInterface $tariff_object, &$total)
    {
        $total += 15 * (ceil($tariff_object->get_minutes() / 60));
    }
}