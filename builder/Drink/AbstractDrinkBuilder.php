<?php

class AbstractDrinkBuilder
{

    public $size;

    public function __construct(string $size)
    {
        $this->size;
    }

    public function build()
    {
        return $this;
    }
}
