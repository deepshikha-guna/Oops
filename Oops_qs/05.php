<?php

class Person {
    protected $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function __toString() {
        return "Person Name: " . $this->name;
    }
}

class Student extends Person {

    public function __construct(string $name) {
        parent::__construct($name);
    }

    public function study() {
        echo $this->name . " is studying in Trident college \n";
    }
}

class Teacher extends Person {

    public function __construct(string $name) {
        parent::__construct($name);
    }

    public function explain() {
        echo $this->name . ", a teacher at Trident college is teaching the concepts \n";
    }
}

$students = [];
$teachers = [];


$studentsNumber = (int) readline("Enter the number of students in your class: ");

for ($i = 1; $i <= $studentsNumber ; $i++) {
    $studentName = readline("Enter Student $i name: ");
    $students[] = new Student($studentName);
}


$teacherNumber = (int) readline("Enter the number of teachers in the college: ");

for ($i = 1; $i <= $teacherNumber ; $i++) {
    $teacherName = readline("Enter Teacher $i name: ");
    $teachers[] = new Teacher($teacherName);
}

echo "\nTrident College Student and Teacher Details \n";


foreach ($students as $s) {
    echo $s . "\n";   
    $s->study();      
    echo "\n";
}

foreach($teachers as $t) {
    echo $t . "\n";     
    $t->explain();      
}

?>
