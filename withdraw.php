<?php
class Bank 
{
    public $balance = 0;
    function deposit($amount)
    {
        $this->balance += $amount;
        echo "Deposited: $amount <br>";
    }
    function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn: $amount <br>";
        } else {
            echo "Insufficient balance! Nikalne ki koshish: $amount | Balance hai: " . $this->balance . "<br>";
        }
    }
    function display()
    {
        echo "<strong>Current Bank Balance: " . $this->balance . "</strong><br><br>";
    }
}
$b1 = new Bank();

$b1->deposit(10000);  
$b1->display();

$b1->withdraw(3000);   
$b1->display();

$b1->withdraw(8000);   
$b1->display();
?>