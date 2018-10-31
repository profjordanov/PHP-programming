<?php
class Тruck extends Vehicle {
	 private $loadability;
	 
	public function __construct($seats,$loadability)
    {
		parent::__construct($seats);
		$this->loadability = $loadability;
		$this->getSeats();
    }
	
	public function getLoadability()
    {
        return $this->loadability;
    }
	
	public function setLoadability($loadability)
    {
        $this->loadability = $loadability;
    }
	
	public function __toString()
    {
		return "I am a tuck! My loadability is ". $this->getLoadability()." tones and ".parent::getSeats()." seats!";
	}
}
?>