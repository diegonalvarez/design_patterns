<?php

require_once 'BurgerBuilder.php';
require_once 'AbstractBurgerBuilder.php';

class TripleBurgerBuilder extends AbstractBurgerBuilder implements BurgerBuilder
{
    public $size = 'triple';

    public function cookTime()
    {
        if ($this->cookingPoint == 'red') {
            return '2 minutes';
        } else {
            return '8 minutes';
        }
    }
}
