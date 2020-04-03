<?php

require_once 'Celular.php';

class XiaomiMi10Pro extends XiaomiFactory implements Celular
{

    private $cameraInfo = '100 MP';

    private $screenInfo = '6.5';

    public function cameraInfo()
    {
        echo "Camera Info: $this->cameraInfo";
    }

    public function screenInfo()
    {
        echo "Screen Info: $this->screenInfo";
    }
}
