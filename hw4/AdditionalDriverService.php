<?php

namespace hw4;

class AdditionalDriverService implements ServiceInterface
{
    public function use(CountAddInterface $tariff_object, &$total)
    {
        $total += 100;
    }
}