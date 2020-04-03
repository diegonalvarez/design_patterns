<?php

require 'CelularFactory.php';
require 'XiaomiFactory.php';
require 'XiaomiMi10Pro.php';

$celular = new XiaomiMi10Pro;

var_dump($celular->makeCellPhone());
var_dump($celular->manufacterName());
var_dump($celular->cameraInfo());
var_dump($celular->screenInfo());