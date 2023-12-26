<?php

include_once __DIR__.'/../model/Order.php';

class OrderController extends Order 
{
    public function addOrder($userId,$order,$orderCode,$vcCode)
    {
        
        return $this->createOrder($userId,$order,$orderCode,$vcCode);
    }

    public function addOrderDetail($userId,$orderCode,$townshipId,$vcCode)
    {
        return $this->createOrderDetail($userId,$orderCode,$townshipId,$vcCode);
    }

    public function orderCode()
    {
        return $this->getOrderCode();
    }
}

?>