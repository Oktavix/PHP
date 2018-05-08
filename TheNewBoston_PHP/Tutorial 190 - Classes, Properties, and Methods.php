<?php
  class BankAccount{
    public $balance = 200;

    public function displayBalance(){
      echo "Balance: ".$this->balance;
    }
  }

  $alex = new BankAccount;
  $alex->displayBalance();
?>
