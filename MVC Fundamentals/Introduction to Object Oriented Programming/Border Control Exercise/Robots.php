<?php
namespace Control;
class Robots implements iControl
{
    private $model;
    private $id;
    public function __construct($model, $id)
    {
        $this->model = $model;
        $this->setId($id);
    }
    public function setId($id)
    {
        $this->id =$id;
    }
    public function checkId(int $num,$id)
    {
        if (substr($id,-3)== $num) {
            echo $id;
        }
    }
    public function getId()
    {
        return $this->id;
    }
    public function checkYear($year)
    {
    }
}