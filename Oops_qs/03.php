<?php 

class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age){
        $this->name = $name;  
        $this->age = $age;  
    }

    public function Greet(){
        echo "Hello everyone, I am " . $this->name . "\n";
    }

    public function SetAge(int $age) {
        $this->age = $age;
    }
}

class Student extends Person {
    public function Study() {
        echo "I'm studying Physics\n";
    }

    public function ShowAge() {
        echo "My Age is: " . $this->age . " years old\n";
    }
}

class Professor extends Person {
    public function Explain() {
        echo "I'm explaining concepts of Physics \n";
    }
}

class StudentProfessorTest {
    public function main(){

        $person1 = new Person("Shikha", 30);
        $person1->Greet();
        echo "\n";

        $student1 = new Student("Shikha", 24);
        $student1->Greet();
        $student1->ShowAge();
        $student1->Study();
        echo "\n";

        $prof1 = new Professor("Mrs. Arpita Dash", 45);
        $prof1->Greet();
        $prof1->Explain();
    }
}

$test = new StudentProfessorTest();
$test->main();
