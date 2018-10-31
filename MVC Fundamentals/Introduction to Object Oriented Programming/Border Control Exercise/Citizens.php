<?php
namespace Control;
class Citizens implements iControl, iBuyer
{
    private $name;
    private $age;
    private $id;
    private $birthdate;
    private $food;
    public function __construct($name, $age, $id, $birthdate)
    {
        $this->name = $name;
        $this->age = $age;
        $this->setId($id);
        $this->birthdate = $birthdate;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function checkId(int $num, $id)
    {
        if (substr($id, -3) == $num) {
            echo $id . PHP_EOL;
        }
    }
    public function getId()
    {
        return $this->id;
    }
    public function checkYear($year)
    {
        $b_day_year = explode("/", $this->birthdate);
        $b_day_year = $b_day_year[2];
        if ($b_day_year == $year) {
            echo $this->birthdate . PHP_EOL;
        }
    }
    public function BuyFood()//when a Citizen buys food his Food increases by 10
    {
         $this->food+=10;
    }
    public function getFood()
    {
        return $this->food;
    }
}