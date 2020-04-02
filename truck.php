<?php

require_once 'Vehicle.php';

class truck extends Vehicle
{
    private $energy;
    private $storageCapacity;
    private $load = 0;

     public const MIN_LOAD = 0;
     public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
     {
         parent::__construct($color, $nbSeats);
         $this->setEnergy($energy);
         $this->StorageCapacity = $storageCapacity;
     }

     public function getEnergy(): string
     {
         return $this->energy;
     }

    public function setEnergy(string $energy): truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getStorageCapacity(int $storageCapacity)
    {
        return $this->storageCapacity = $storageCapacity;
    }

    public function getLoad()
    {
        return $this->load;
    }


    public function setLoad(int $load)
    {
        if ($load < 0 and $load < 50) {
            return $this->load = self::MIN_LOAD;
        }
        return $this->load = $load;
    }

    public function fullOrNot()
    {
        if ($this->load == 50){
            return 'full';
        } else {
            return 'in filling';
        }
    }
}
