<?php
include_once "tickets.class.php";

class Ticketscontrol extends Tickets
{
    // Create Method
    public function createTicket($name, $type, $details, $company, $img, $price, $date, $total)
    {
        $this->setTicket($name, $type, $details, $company, $img, $price, $date, $total);
    }

    // Update Methods

    public function changeAll($name, $type, $details, $company, $img, $price, $date, $total, $id)
    {
        $this->updateAll($name, $type, $details, $company, $img, $price, $date, $total, $id);
    }

    public function changeName($newName, $id)
    {
        $this->updateName($newName, $id);
    }
    public function changeType($newType, $id)
    {
        $this->updateType($newType, $id);
    }
    public function changeDetails($newDetails, $id)
    {
        $this->updateDetails($newDetails, $id);
    }
    public function changeCompany($newCompany, $id)
    {
        $this->updateCompany($newCompany, $id);
    }
    public function changeImg($newImg, $id)
    {
        $this->updateImg($newImg, $id);
    }

    public function changePrice($newPrice, $id)
    {
        $this->updatePrice($newPrice, $id);
    }

    public function changeDate($newDate, $id)
    {
        $this->updatePrice($newDate, $id);
    }

    public function changeTotal($newTotal, $id)
    {
        $this->updateTotal($newTotal, $id);
    }

    public function removeTicket($id)
    {
        $this->deleteTicket($id);
    }
}
