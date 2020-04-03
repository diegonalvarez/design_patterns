<?php

class XiaomiFactory extends CelularFactory
{

    public $celularCompany = 'Xiamomi';

    public function makeCellPhone()
    {
        echo "Building Cellphone $this->celularCompany";
    }
}
