<?php

require_once 'BurgerBuilder.php';
require_once 'AbstractBurgerBuilder.php';

class SimpleBurgerBuilder extends AbstractBurgerBuilder implements BurgerBuilder
{
    public $size = 'simple';

    public function cookTime()
    {
        if ($this->cookingPoint == 'red') {
            return '1 minutes';
        } else {
            return '5 minutes';
        }
    }
}
