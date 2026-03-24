<?php
class person {
    protected $name = "ali";

}

class student extends person {
    function display()
    {
        echo "my name is : " . $this->name;
    }
}
$s1 = new student();
$s1->display();
?>
