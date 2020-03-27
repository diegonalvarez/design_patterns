<?php

require_once 'DrinkBuilder.php';
require_once 'AbstractDrinkBuilder.php';

class CocaDrinkBuilder extends AbstractDrinkBuilder implements DrinkBuilder
{
    public $type = 'Coca Cola';
}
