<?php
class Car extends Vehicle {
	 private $doors;
	 
	public function __construct($seats,$doors)
    {
		parent::__construct($seats);
        $this->doors = $doors;
    }
	
	public function getDoors()
    {
        return $this->doors;
    }
	
	public function setDoors($doors)
    {
        $this->doors = $doors;
    }
}
?>