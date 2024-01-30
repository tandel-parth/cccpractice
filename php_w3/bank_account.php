<?php
class BankAccount {
    private $accountNumber;
    private $accountHolder;
    private $balance;

    public function __construct($accountNumber, $accountHolder, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds for withdrawal.";
        }
    }

    public function displayInfo() {
        echo "Account Number: {$this->accountNumber} <br> Account Holder: {$this->accountHolder} <br> Balance: {$this->balance} ₹";
    }
}

// Create a bank account object
$account1 = new BankAccount("107858", "Parth Tandel", 5000);

// Deposit and withdraw from the account
$account1->deposit(5000);
$account1->withdraw(10000);

// Display account information
$account1->displayInfo();
?>