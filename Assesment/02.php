<?php

abstract class Vehicle {
    public $vehicleNumber;
    public $brand;
    public $baseRate;

    public function __construct($number, $brand, $rate) {
        $this->vehicleNumber = $number;
        $this->brand = $brand;
        $this->baseRate = $rate;
    }

    abstract public function calculateRent($hours);
}

class Car extends Vehicle {
    public function calculateRent($hours) {
        return 200 * $hours;
    }
}

class Bike extends Vehicle {
    public function calculateRent($hours) {
        return 50 * $hours;
    }
}

class Truck extends Vehicle {
    public function calculateRent($hours) {
        return 500 * $hours;
    }
}

$vehicle = readline("What vehicle are you renting ? : ");
$hours = (int) readline("No of hours rented for: ");

if ($vehicle === "Car") {
    $rentVehicle = new Car("IND-5132", "Volkswagen", 200);
} elseif ($vehicle === "Bike") {
    $rentVehicle = new Bike("IND-4521", "Pulsar", 50);
} else {
    $rentVehicle = new Truck("IND-4589", "Tata Mahindra", 500);
}

echo "Total Rent for " . $vehicle . " is Rs. " . $rentVehicle->calculateRent($hours) . "\n";

?>






