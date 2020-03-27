<?php

require 'Burger/SimpleBurgerBuilder.php';
require 'Burger/TripleBurgerBuilder.php';
require 'Burger/Burger.php';
require 'Drink/CocaDrinkBuilder.php';
require 'Drink/Drink.php';
require 'MealBuilder.php';

$burgerBuilder = (new SimpleBurgerBuilder('chicken'))
                ->cookingPoint('red')
                ->build();

$burger = new Burger($burgerBuilder);

$drinkBuilder = (new CocaDrinkBuilder('large'))
                ->build();

$drink = new Drink($drinkBuilder);

$meal = (new MealBuilder($burger, $drink))
                ->build();

echo $meal->burger;
echo $meal->drink;
echo "\n";

$burgerBuilder = (new TripleBurgerBuilder('meat'))
                ->cookingPoint('burned')
                ->build();

$burger = new Burger($burgerBuilder);

echo $burger;