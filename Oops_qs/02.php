<?php 
class Person {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }


    public function __destruct() {
        $this->name = "";
    }

    public function __toString() {
        return "Person Name: " . $this->name;
    }
}

$n = (int)readline("How many people do you want to enter ? : ");
$people = [];


for ($i = 1; $i <= $n; $i++) {
    $name = readline("Enter name $i: ");
    $people[] = new Person($name);
}

foreach ($people as $p) {
    echo $p . "\n"; 
}
