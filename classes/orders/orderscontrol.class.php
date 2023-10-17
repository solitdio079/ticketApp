<?php
include_once "orders.class.php";
class Orderscontrol extends Orders
{
    public function createOrder($pay_token, $notif_token, $ticket, $owner, $benefactors)
    {
        $this->setOrder($pay_token, $notif_token, $ticket, $owner, $benefactors);
    }

    public function removeOrder($id)
    {
        $this->deleteOrder($id);
    }

    public function changeOrderStatus($status)
    {
        $this->updateOrderStatus($status);
    }
}