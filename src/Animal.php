<?php 

namespace App;

abstract class Animal
{
    private string $name;

    //Caracteristics
    protected bool $can_fly = false;
    protected bool $can_walk = false;
    protected bool $can_swim = false;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function getName() :string
    {
        return $this->name;
    }

    abstract protected function getNoise() :string;

    public function noise() {
        return $this->getNoise();
    }

}

?>