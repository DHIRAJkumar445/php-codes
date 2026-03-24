<?php

class dog
{ 
    function bark() {
        echo "Woof!";
    }
}

$myDog = new dog();
$myDog->bark();
?>

 <?php
class  Math{
    function Sum($a, $b) {
        echo $a + $b;
    }
}
$s1 = new Math();
$s1->Sum(5, 10);
$s1->Sum(20, 30);
$s1->Sum(7, 3);
$s2 = new Math();
$s2->Sum(15, 25);
?>

<?php
class student {
    public $name;
    public $rollNumber;

    function display()  {
        echo "name: " . $this->name . "<br>";
        echo "Roll Number: " . $this->rollNumber;
    }
}

$s1 = new student();
$s1->name = "Alice";
$s1->rollNumber = 123;
$s1->display();
?>

<br>


<!-- create a result management system for displaying results of five students -->  

<?php
class Result {
    public $name;
    public $marks;

    function display() {
        echo "Name: " . $this->name . "<br>";
        echo "Marks: " . $this->marks . "<br><br>";
    }
}

$s1 = new Result();
$s1->name = "Alice";
$s1->marks = 85;
$s1->display();
$s2 = new Result();
$s2->name = "Bob";
$s2->marks = 90;
$s2->display();
$s3 = new Result();
$s3->name = "Charlie";
$s3->marks = 78;
$s3->display();
$s4 = new Result();
$s4->name = "David";
$s4->marks = 95;
$s4->display();
$s5 = new Result();
$s5->name = "Eve";
$s5->marks = 88;
$s5->display();
?>
<br>


<!-- create a bank management system (only deposits) -->
<?php
class BankAccount {
    public $accountHolder;
    public $balance;

    function __construct($name, $initialBalance) {
        $this->accountHolder = $name;
        $this->balance = $initialBalance;
    }

    function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited: $" . $amount . "<br>";
        echo "New Balance: $" . $this->balance . "<br><br>";
    }
}
$account1 = new BankAccount("Alice", 1000);
$account1->deposit(500);
$account2 = new BankAccount("Bob", 2000);
$account2->deposit(1000);
$account3 = new BankAccount("Charlie", 1500);
$account3->deposit(750);
$account4 = new BankAccount("David", 3000);
$account4->deposit(2000);
$account5 = new BankAccount("Eve", 2500);
$account5->deposit(1250);
?>
<br>
<!-- create a bank management system (only withdrawals) -->
<?php
class Bank {
    public $accountHolder;
    public $balance;

    function __construct($name, $initialBalance) {
        $this->accountHolder = $name;
        $this->balance = $initialBalance;
    }

    function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew: $" . $amount . "<br>";
            echo "New Balance: $" . $this->balance . "<br><br>";
        } else {
            echo "Insufficient funds.<br><br>";
        }
    }
}
$account1 = new Bank ("Alice", 1000);
$account1->withdraw(500);
$account2 = new Bank ("Bob", 2000);
$account2->withdraw(1000);
$account3 = new Bank ("Charlie", 1500);
$account3->withdraw(750);
$account4 = new Bank ("David", 3000);
$account4->withdraw(2000);
$account5 = new Bank ("Eve", 2500);
$account5->withdraw(1250);
?>