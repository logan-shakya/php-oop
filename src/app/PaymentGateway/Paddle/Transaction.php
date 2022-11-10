<?php

declare(strict_types = 1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{
    // example of using const
    // private string $status;

    // public function __construct()
    // {
    //     $this->setStatus(Status::PAID);
    // }

    // public function setStatus(string $status): self
    // {
    //     if(! isset(Status::ALL_STATUSES[$status])) {
    //         throw new \InvalidArgumentException('Invalid Status');    
    //     }

    //     $this->status = $status;

    //     return $this;
    // }

    // example of using static 

     //encapsulation and abstraction
     
     private float $amount;

     public function __construct(float $amount)
     {
        $this->amount = $amount;
     }
    
     public function copyForm(Transaction $transaction)
     {
        var_dump($transaction->amount, $transaction->sendEmail());
     }

     public function process()
     {
        echo 'Processing $' . $this->amount . ' transaction';

        $this->generateReceipt();

        $this->sendEmail();
     }

     private function sendEmail()
     {
        return true;
     }

     private function generateReceipt()
     {
        
     }

    
}