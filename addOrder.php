<?php
session_start();

include_once __DIR__.'/controller/OrderController.php';
include_once __DIR__.'/controller/CartController.php';
include_once __DIR__.'/controller/CodeController.php';

$userId = $_SESSION['id'];
$orders = $_POST['data'];
$vcCode = $_POST['vcCode'];
$townshipId = $_POST['townshipId'];


$code_controller = new CodeController();
$order_controller = new OrderController();
$cart_controller = new CartController();


$voucherCodes = $code_controller->codes();

if (!empty($voucherCodes))
{
    $usedCodeList = [];
    $freeCodeList = [];

    $u = 0;
    $f = 0;
  foreach ($voucherCodes as $voucherCode )
  {
    if ($voucherCode['used_by_user'] != null)
    {
        $usedCodeList[$u] = $voucherCode['code'];
        $u++;
    }
    else 
    {
        $freeCodeList[$f] = $voucherCode['code'];
        $f++;
    }
  }
}

if (in_array($vcCode,$usedCodeList))
{
    echo 'This voucher code is already used';
}
else 
{
   
    if (in_array($vcCode,$freeCodeList))
    {

        $orderCodes = $order_controller->orderCode();

        $orderCodeList = [];
        $oc = 0;
        if (!empty($orderCodes))
        {
          foreach ($orderCodes as $orderCode )
          {
            $orderCodeList[$oc] = $orderCode['order_code'];
            $oc++;
          }
        }

        $orderCode = rand(00001,99999);

        if ($orderCodeList != null )
        {
            while (in_array($orderCode,$orderCodeList))
            {
                $orderCode++;
            }   
        }





        foreach ($orders as $order)
        {

            $addOrderStatus = $order_controller->addOrder($userId,$order,$orderCode,$vcCode);

        }

        if ($addOrderStatus)
        {
            $addOrderDetail = $order_controller->addOrderDetail($userId,$orderCode,$townshipId,$vcCode);

            if ($addOrderDetail)
            {
                $date = date('Y-m-d');

                $usedVcCode = $code_controller->editVcCode($userId,$vcCode,$date);

                foreach ($orders as $order)
                {
                    $removeCart = $cart_controller->removeCart($order['product_id']);
                }
            }
        }



        if ($removeCart)
        {
            echo 'Your Order is success and wait for the confirmation email from our shop.';
        }
        else 
        {
            echo 'Something went wrong with your order';
        }
    }
    else 
    {
        echo 'Invalid Voucher Code';
    }
}





?>