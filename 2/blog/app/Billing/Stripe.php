<?php

  namespace App\Billing;

  class Stripe {
    
    protected $key;

    public function __construct($key) {
      $this->key = $key;
    }

    public function get_key(){
      echo 'from stripe: ' . $this->key;
      return $this->key;
    }
  }
