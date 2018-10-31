<?php
namespace Control;
class Rebel implements iBuyer
{
    //name, age and group (string),
    private $name;
    private $age;
    private $group;
    protected $food;
    public function __construct(string $name, int $age, string $group)
    {
        $this->name = $name;
        $this->age = $age;
        $this->group = $group;
    }
    public function BuyFood()//Rebel buys food his Food increases by 5
    {
        $this->food+=5;
    }
    public function getFood()
    {
        return $this->food;
    }
}