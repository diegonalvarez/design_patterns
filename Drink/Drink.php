<?php

class Drink
{

    private $type;

    private $size;

    public function __construct(DrinkBuilder $drinkBuilder)
    {
        $this->type = $drinkBuilder->type;
        $this->size = $drinkBuilder->size;
    }

    public function __toString()
    {
        return "Drink Size: $this->size Type: $this->type\n" ;
    }
}
