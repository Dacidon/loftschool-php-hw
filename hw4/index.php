<?php

use hw4\BaseTariff;
use hw4\HourTariff;
use hw4\StudentTariff;

ini_set('display_errors', 'on');
ini_set('error_reporting', E_NOTICE | E_ALL);

include 'ServiceInterface.php';
include 'CountAddInterface.php';
include 'AbstractTariffClass.php';
include 'AdditionalDriverService.php';
include 'GpsService.php';
include 'HourTariff.php';
include 'StudentTariff.php';
include 'BaseTariff.php';



$tariff_obj = new StudentTariff(10, 120);
//$tariff_obj->add_service(new GpsService());
//$tariff_obj->add_service(new AdditionalDriverService());
echo $tariff_obj->count_total();
