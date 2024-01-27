<?php

namespace hw4;

interface CountAddInterface
{
    public function get_minutes();

    public function count_total();

    public function add_service(ServiceInterface $service);

}