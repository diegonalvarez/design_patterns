<?php

abstract class CelularFactory
{

    public $celularCompany;

    public function manufacterName()
    {
        echo "Constructing Cellphone $this->celularCompany";
    }
}
