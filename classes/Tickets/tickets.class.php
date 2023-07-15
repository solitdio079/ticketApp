<?php

include_once "dbh.class.php";

class Tickets extends Dbh
{
    // CREATE METHOD
    protected function setTicket($name, $type, $details, $company)
    {
        $sql = "INSERT INTO `Tickets`(`name`, `type`, `details`, `company`) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $type, $details, $company]) or die(print_r($stmt->errorInfo(), true));
    }


    // UPDATE METHODS

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
    //Get Methods
    protected function 
}
