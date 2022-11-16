<?php

require __DIR__ . '../../../../../vendor/autoload.php';
use Interface\DebtCollectionService;
use Interface\Rocky;
// $collector = new CollectionAgency;
// echo $collector->collect(100) . PHP_EOL;

$service = new DebtCollectionService;
echo $service->collectDebt(new Rocky);