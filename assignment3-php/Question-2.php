<!-- Create a simple class in PHP that demonstrates encapsulation by using private and public
properties and methods. -->

<?php
class BankAccount {
    // Private properties (encapsulated)
    private $accountNumber;
    private $balance;

    // Constructor to initialize the account
    public function __construct($accountNumber, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    // Public method to get the account number
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    // Public method to get the current balance
    public function getBalance() {
        return $this->balance;
    }

    // Public method to deposit money
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    // Public method to withdraw money
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
}

// Example usage
$account = new BankAccount("8780935060", 1000);
$account->deposit(500);
$account->withdraw(200);

echo "Account Number: " . $account->getAccountNumber() . "\n";
echo "Balance: $" . $account->getBalance();
?>



