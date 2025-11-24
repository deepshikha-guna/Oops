<?php
abstract class Animal {
    protected $name;

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    abstract public function eat();
    abstract public function wander();
}

class Dog extends Animal {

    public function eat(){
        echo $this->name . " is eating pedigree \n";
    }

    public function wander(){
        echo $this->name . " is running down the street \n";
    }
}


$petDogName = readline("Enter your pet dog's name: ");

$petDog = new Dog();
$petDog->setName($petDogName);

echo "Pet Dog's Name is " . $petDog->getName() . "\n";
$petDog->eat();

$streetDogName = readline("Enter the street dog's name: ");

$streetDog = new Dog();
$streetDog->setName($streetDogName);

echo "Street Dog's Name is " . $streetDog->getName() . "\n";
$streetDog->wander();   

?>
