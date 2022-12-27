<?php
require __DIR__ . '../../../../../vendor/autoload.php';

use App\Interface\DebtCollectionService;
use App\Interface\Rocky;

// $collector = new CollectionAgency;
// echo $collector->collect(100) . PHP_EOL;

$service = new DebtCollectionService;
echo $service->collectDebt(new Rocky);