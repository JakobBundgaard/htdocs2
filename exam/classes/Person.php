<?php 

class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

class Student extends Person {

}


$person1 = new Person('Jake', 48);

echo $person1->getName();

// echo $person1->age;

$person1->setName('Bob');

echo $person1->getName();

// echo $person1->name;

$student1 = new Student('Marty', 23);

echo $student1->getName();



?>