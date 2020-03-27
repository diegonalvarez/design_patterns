<?php

class MealBuilder
{

    public $burger;

    public $drink;

    public function __construct(Burger $burger, Drink $drink)
    {
        $this->burger = $burger;
        $this->drink  = $drink;
    }

    public function build()
    {
        return $this;
    }
}
