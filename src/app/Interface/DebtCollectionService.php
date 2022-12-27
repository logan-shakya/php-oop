<?php

namespace App\Interface;
use App\Interface\DebtCollector;

class DebtCollectionService 
{
    public function collectDebt( DebtCollector $collector)
    {
        $owedAmount = mt_rand(100,1000);
        $collectedAmount = $collector->collect($owedAmount);

        echo 'Collected $' . $collectedAmount . ' out of the ' . $owedAmount . PHP_EOL;
    }
}