<?php
/*inheritance in php is an oop concept where one class acquires the properties  and method class using the extends keyword. the class which inherits the properties and method is called child class or subclass and the class from which properties and method are inherited is called parent class or super class. inheritance promotes code reusability and establishes a natural hierarchical relationship between classes.*/

class animal
{
    function eat()
    {
        echo "eating...<br>";
    }
}
class dog extends animal
{
    function bark()
    {
        echo "barking...<br>";
    }
}
$d1 = new dog();
$d1->eat();
$d1->bark();
?>
<br>


