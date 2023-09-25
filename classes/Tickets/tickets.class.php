<?php

include_once "dbh.class.php";

class Tickets extends Dbh1
{
    // CREATE METHOD
    protected function setTicket($name, $type, $details, $company, $img, $price, $date, $total)
    {
        $sql = "INSERT INTO `Tickets`(`name`, `type`, `details`, `company`, `img`, `price`, `date`, `total`) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $type, $details, $company, $img, $price, $date, $total]) or die(print_r($stmt->errorInfo(), true));
    }


    // UPDATE METHODS

    protected function updateAll($name, $type, $details, $company, $img, $price, $date, $total, $id)
    {
        $sql = "UPDATE `Tickets` SET `name`=?,`type`=?,`details`=?,`company`=?,`img`=?,`price`=?,`date`=?,`total`=? WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $type, $details, $company, $img, $price, $date, $total, $id]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function updateName($newName, $id)
    {
        $sql = "UPDATE `Tickets` SET `name`=? WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newName, $id]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function updateType($newType, $id)
    {
        $sql = "UPDATE `Tickets` SET `type`=? WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newType, $id]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function updateDetails($newDetails, $id)
    {
        $sql = "UPDATE `Tickets` SET `details`=? WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newDetails, $id]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function updateCompany($newCompany, $id)
    {
        $sql = "UPDATE `Tickets` SET `company`=? WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newCompany, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateImg($newImg, $id)
    {
        $sql = "UPDATE `Tickets` SET `img`=? WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newImg, $id]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function updatePrice($newPrice, $id)
    {
        $sql = "UPDATE `Tickets` SET `price`=? WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newPrice, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateDate($newDate, $id)
    {
        $sql = "UPDATE `Tickets` SET `date`=? WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newDate, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateTotal($newTotal, $id)
    {
        $sql = "UPDATE `Tickets` SET `total`=? WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newTotal, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    //Get Methods
    protected function getAllTickets()
    {
        $sql = "SELECT * FROM `Tickets` WHERE 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getTicketsById($id)
    {
        $sql = "SELECT * FROM `Tickets` WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(), true));
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getTicketsByType($type)
    {
        $sql = "SELECT * FROM `Tickets` WHERE `type`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$type]) or die(print_r($stmt->errorInfo(), true));
        $results = $stmt->fetchAll();
        return $results;
    }
    protected function getHomeSearch($type, $date)
    {
        $sql = "SELECT * FROM `Tickets` WHERE `type`=? AND `date` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$type, $date]) or die(print_r($stmt->errorInfo(), true));
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getTicketsByCompany($company)
    {
        $sql = "SELECT * FROM `Tickets` WHERE `company`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$company]) or die(print_r($stmt->errorInfo(), true));
        $results = $stmt->fetchAll();
        return $results;
    }

    // Delete Method

    protected function deleteTicket($id)
    {
        $sql = "DELETE FROM `Tickets` WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(), true));
    }
}
