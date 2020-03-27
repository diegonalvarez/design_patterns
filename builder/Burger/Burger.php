<?php

class Burger
{

    private $size;

    private $type;

    public function __construct(BurgerBuilder $burger)
    {
        $this->size     = $burger->size;
        $this->type     = $burger->type;
        $this->cookTime = $burger->cookTime();
    }

    public function __toString()
    {
        return "Size: $this->size Type: $this->type  Cooking point: $this->cookTime\n" ;
    }
}
