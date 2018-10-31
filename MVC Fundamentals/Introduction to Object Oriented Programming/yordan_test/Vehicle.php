<?php
abstract class Vehicle {
	 protected $seats;
	 
	public function __construct($seats)
    {
		$this->seats = $seats;
    }

	public function getSeats()
    {
        return $this->seats;
    }
	
	public function setSeats($seats)
    {
        $this->seats = $seats;
    }	 
}
?>