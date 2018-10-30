<?php 
class Person 
{
	private $name;
	private $height;

	function __construct($first_name,$my_height){

		$this->name = $first_name;
		$this->height = $my_height;
	}
	
	function get_name()
	{
		return $this->name;

	}
	function get_height()
	{
		return $this->height;
	

	}

	function set_name($new_name)
	{
		$this->name = $new_name;
		
	}
	

	function set_height($new_height)
	{
		$this->height = $new_height;
		
	}

}

 ?>





