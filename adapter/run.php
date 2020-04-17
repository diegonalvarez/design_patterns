<?php

require 'Cash.php';
require 'OnlinePayment.php';
require 'PaymentAdapter.php';

$cash = new Cash;
$cash->pay();

$onlinePayment = new PaymentAdapter(new OnlinePayment);
$onlinePayment->pay();