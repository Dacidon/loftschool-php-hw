<?php

namespace hw4;

interface ServiceInterface
{
    public function use(AbstractTariffClass $tariff_object, &$total);
}