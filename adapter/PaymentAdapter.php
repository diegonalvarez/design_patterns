<?php

class PaymentAdapter implements Payment
{

    public function __construct($pay)
    {
        $this->pay = $pay;
    }

    public function pay()
    {
        $this->pay->transferMoney();
    }
}
