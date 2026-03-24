
<?php
class Student
{
    function __construct()
    {
        echo "object created <br>" ;
    }
    function __destruct()
    {
        echo "object destroyed <br>";
    }
}
$s1 = new Student();
?>
<br>
now using constructor with parameter

<?php
class Student1 {
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function display()
    {
        echo "my name is : " . $this->name;
    }
}
$s1 = new Student1("ali");
$s1->display();
?>
<br>
now intiliazing bank balance with constructor

<?php
class Bank
{
    public $balance;
    function __construct($initialAmount)
    {
        $this->balance = $initialAmount;
    }
    function deposite($amount)
    {
        $this->balance += $amount;
    }
    function display(){

        echo "my bank balance is : " . $this->balance;
    }
}

$b1 = new Bank(5000);
$b1->display();
?>
<br>
depositeing money in bank using constructor
<?php
class Bank1
{
    public $balance;
    function __construct($initialamount)
    {
        $this->balance = $initialamount;
    }
    function deposite($amount)
    {
        $this->balance += $amount;
    }
    function display()

    {
        echo "my bank balance is : " . $this->balance;
    }
}
$b1 = new Bank1(5000);
$b1->deposite(2000);
$b1->display();
?>
<br>

 area of rectangle using constructor 
<?php
class Rectangle
{
    public $length;
    public $width;
    function __construct($l, $w)
    {
        $this->length = $l;
        $this->width = $w;
    }
    function area()
    {
        return $this->length * $this->width;
    }
}
$r1 = new Rectangle(5, 3);
echo "Area of rectangle: " . $r1->area();
?>

<br>



















