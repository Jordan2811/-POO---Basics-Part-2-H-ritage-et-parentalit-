<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
	const ALLOWED_ENERGIES = [
		'fuel',
		'electric',
		'diesel',
];
	const MIN_STORAGE = 0;

	/**
	 * @var string
	 */
	private $tenergy;

	/**
	 * @var int
	 */
	private $energyLevel;

	/**
	 * @var int
	 */
	private $storageCapacity = 0;
	private $storageMaxCapacity = 100;

	public function __construct(string $color, int $nbSeats, string $tenergy,int $storageCapacity,int $storageMaxCapacity)
	{
		parent::__construct($color,$nbSeats);
		$this->tenergy = $tenergy;
		$this->storageCapacity = $storageCapacity;
		$this->storageMaxCapacity = $storageMaxCapacity;
	}

	public function getEnergyLevel(): int
	{
		return $this->energyLevel;
	}

	public function setEnergyLevel(int $energyLevel): void
	{
		$this->energyLevel = $energyLevel;
	}

	public function setStorageCapacity(int $storageCapacity): void
	{
		$this->storageCapacity = $storageCapacity;
	}

	public function getStorageCapacity():string  {
		if ($this->storageCapacity > $this->storageMaxCapacity){
			return "The vehicule is Overstorage!"."<br>";
		} elseif ($this->storageCapacity <= self::MIN_STORAGE){
			return "The vehicule is empty !"."<br>";
		} return "The truck is in filling at ".$this->storageCapacity. " tonnes."."<br>";
	}


}
