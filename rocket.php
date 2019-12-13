<?php

// Open the file
$modulesMasses = file('./input');

//$modulesMasses = [100756];

$total = 0;
foreach ($modulesMasses as $moduleMass) {
    $fuelForFuel = 0;
    $fuelTotal = 0;

    $fuelForFuel = calculateFuelRequired($moduleMass);
    $fuelTotal = $fuelForFuel;

    while ($fuelForFuel > 0) {
        $fuelForFuel = calculateFuelRequired($fuelForFuel);
        if ($fuelForFuel > 0) {
            $fuelTotal += $fuelForFuel;
        }
    }

    $total += $fuelTotal;
}

echo $total;

function calculateFuelRequired($mass) {
    $fuel = floor($mass / 3) -2;
    return $fuel;
}

