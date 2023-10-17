<?php
include_once "dbh.class.php";
class Orders extends Dbh3
{
    protected function setOrder($pay_token, $notif_token, $ticket, $owner, $benefactors)
    {
        $sql = "INSERT INTO `orders`(`pay_token`, `notif_token`, `ticket`, `owner`, `benefactors`) VALUES (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$pay_token, $notif_token, $ticket, $owner, $benefactors]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function getOrderByNotif($notif)
    {
        $sql = "SELECT * FROM `orders` WHERE `notif_token`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$notif]) or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getOrderByPay($pay)
    {
        $sql = "SELECT * FROM `orders` WHERE `pay_token`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$pay]) or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getOrderByOwner($owner)
    {
        $sql = "SELECT * FROM `orders` WHERE `owner`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$owner]) or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }

    protected function updateOrderStatus($status)
    {
        $sql = "UPDATE `orders` SET `status`=? WHERE `notif_token` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$status]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function deleteOrder($id)
    {
        $sql = "DELETE FROM `orders` WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(), true));

    }
}