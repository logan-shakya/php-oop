<?php

use App\Interface\CollectionAgency;

require __DIR__ . '../../../../../vendor/autoload.php';

$collector = new CollectionAgency;
echo $collector->collect(100) . PHP_EOL;