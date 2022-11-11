<?php

namespace App\Interface;

class CollectionAgency implements \App\Interface\DebtCollector
{
    public function collect(float $owedAmount): float
    {
        $guaranteed = $owedAmount * 0.5;
        return mt_rand($guaranteed, $owedAmount);
    }
}