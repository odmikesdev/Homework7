<?php
require_once 'vendor/autoload.php';

use Hillel\Components\Codes;
use Hillel\Components\Curency;
use Hillel\Components\Money;

echo '<pre>';
$gbr = new Curency(Codes::GBP);

var_dump($gbr);

$test = new Money(50,  $gbr  );
echo '<pre>';

$test2 = new Money(50,  $gbr  );
print_r($test->add($test2));
