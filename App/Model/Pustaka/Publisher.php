<?php

namespace App\Model\Pustaka;
class Publisher
{
    
    private $phone;
    public $publisher;

    public function __construct(string $publisher) {
      $this->publisher = $publisher;
  }
    
    public function setPhone(int $phone) : void {
        $this->phone = $phone;
    }

    public function getPhone() : int {
        return $this->phone;
    }

    public function getPublisher() : string {
        return $this->publisher;
    }
}