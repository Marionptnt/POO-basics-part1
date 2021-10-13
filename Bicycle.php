<?php

class Bicycle
{ 
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;

    private string $energy;
    
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(): int
    {
       $this->currentSpeed= 0;

       return "Start";
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
}

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->CurrentSpeed;
    }

    public function getcolor(): int
    {
        return $this->color;
    }

    public function getEnergy(): int
    {
        return $this->Energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->EnergyLevel;
    }
}