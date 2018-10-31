<?php
namespace Control;
class Pet implements iControl
{
    private $name;
    private $birthdate;
    public function __construct($name, $birthdate)
    {
        $this->name = $name;
        $this->birthdate = $birthdate;
    }
    public function checkId(int $num, $id)
    {
        // TODO: Implement checkId() method.
    }
    public function checkYear($year)
    {
        $b_day_year=explode("/",$this->birthdate);
        $b_day_year=$b_day_year[2];
        if($b_day_year==$year){
            echo $this->birthdate.PHP_EOL;
        }
    }
}