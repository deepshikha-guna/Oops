<?php
class BankAccount {
    private $accountNumber;
    private $balance;
    private $transactionLog = []; 

    public function __construct($accountNumber) {
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;

            $this->logTransaction("Deposited rupees $amount. New Balance Rupees {$this->balance}");

            echo "Deposited rupees $amount into account {$this->accountNumber}. New balance Rupees {$this->balance}\n";
        } else {
            echo "Invalid deposit amount $amount. Must be greater than 0.\n";
        }
    }


    public function withdraw($amount) {
        if ($amount <= 0) {
            echo "Invalid withdrawal amount $amount\n";
            return;
        }

        if ($amount <= $this->balance) {
            $this->balance -= $amount;

            $this->logTransaction("Withdrew Rupees $amount. New Balance: rupees {$this->balance}");

            echo "Withdrawn rupees $amount from account {$this->accountNumber}. New balance is {$this->balance}\n";
        } else {
            echo "Attempted to withdraw rupees $amount\n";
            echo "Insufficient balance. Current balance is {$this->balance}\n";
        }
    }


    private function logTransaction($message) {
        $this->transactionLog[] = $message;
    }


    public function showTransactionLog() {
        echo "<h3>Transaction Log for Account {$this->accountNumber}</h3>";
        foreach ($this->transactionLog as $log) {
            echo $log . "\n";
        }
    }
}


$account = new BankAccount("SBI-1234");

echo "Account Number - " . $account->getAccountNumber() . "\n";
echo "Initial Balance - " . $account->getBalance() . "\n";

$account->deposit(1000);
$account->withdraw(600);
$account->withdraw(700);

echo "\n";
$account->showTransactionLog();
?>
