 <?php 
// Parent class
class Person
{
    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }
}

// Child class 
class Student extends Person
{
    public function display()
    {
        echo "My name is: " . $this->name;
    }
}

// Object create
$s1 = new Student();
$s1->setName("Ali");
$s1->display();
 ?>

<br>
<!-- herirical inheritance in authentication system  -->
<!-- 1. student login -->
<!-- 2. teacher login -->
<!-- 3. managment login -->

<?php
class User
{
    public $username;
    public $password;

    function login($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

     function login()
    {
        echo "Logging in as: " . $this->username . "<br>";
    }
}

class Student1 extends User
{
    public function login()
    {
        echo "Student login: " . $this->username . "<br>";
    }
}
class Teacher extends User
{
    public function login()
    {
        echo "Teacher login: " . $this->username . "<br>";
    }
}
class Management extends User
{
    public function login()
    {
        echo "Management login: " . $this->username . "<br>";
    }
}
$s1 = new Student1("student1", "password1");
$t1 = new Teacher("teacher1", "password1");
$m1 = new Management("management1", "password1");
$s1->login();
$t1->login();
$m1->login();
?>
