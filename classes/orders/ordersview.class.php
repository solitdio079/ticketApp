<?php
include_once "orders.class.php";


class Ordersview extends Orders
{

    public function takeOrderByNotif($notif)
    {
        $result = $this->getOrderByNotif($notif);
        return $result;
    }

    public function takeOrderByPay($pay)
    {
        $result = $this->getOrderByPay($pay);
        return $result;
    }

    public function takeOrderByOwner($owner)
    {
        $result = $this->getOrderByOwner($owner);
        return $result;

    }

}