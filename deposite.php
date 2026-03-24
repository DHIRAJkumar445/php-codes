<?php
class Bank
{
    public $balance=0;
    function deposit($amount)
    {
        $this->balance += $amount;
    }
    function display ()
    {
        echo " my bank Balance is : " . $this->balance;
    }
}
$b1 = new Bank();
$b1->deposit(1000);
$b1->deposit(500);
$b1-> display();
?>


