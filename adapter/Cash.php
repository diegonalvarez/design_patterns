<?php

require_once 'Payment.php';

class Cash implements Payment
{
    public function pay()
    {
        echo 'Payment with cash';
    }
}
