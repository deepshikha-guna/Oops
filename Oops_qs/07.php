<?php

interface IVehiculo {
    public function Drive();
    public function Refuel(int $amount);
}

class Car implements IVehiculo {

    private $gasoline;

    public function __construct($gasolineamt) {
        $this->gasoline = $gasolineamt;
    }

    public function Drive() : void {
        if ($this->gasoline > 0) {
            echo "Enough gasoline so the we can drive now \n";
        } else {
            echo "Cannot drive. There is no gasoline \n";
        }
    }

    public function Refuel(int $amount) : bool {
        $this->gasoline += $amount;
        return true;
    }
}


$car = new Car(0);

$amount = (int)readline("Enter amount of gasoline to refuel: ");
$car->Refuel($amount);

$car->Drive();

echo "\n";