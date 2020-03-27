<?php

class AbstractBurgerBuilder
{

    public $type;

    public $cookingPoint;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function cookingPoint(string $point)
    {
        $this->cookingPoint = $point;
        return $this;
    }

    public function build()
    {
        return $this;
    }
}
