<?php
require_once "events.class.php";
class Eventscontrol extends Events
{
    /*================================= C ==============================*/
    public function createEvent($name, $place, $images, $organizer, $date, $hour, $total, $price)
    {
        $this->setEvent($name, $place, $images, $organizer, $date, $hour, $total, $price);
    }

    /*================================= U ==============================*/

    public function changeName($newName, $id)
    {
        $this->updateName($newName, $id);
    }

    public function changePlace($newPlace, $id)
    {
        $this->updatePlace($newPlace, $id);
    }

    public function changeImages($newImages, $id)
    {
        $this->updateImages($newImages, $id);
    }

    public function changeOrganizer($newOrganizer, $id)
    {
        $this->updateName($newOrganizer, $id);
    }

    public function changeDate($newDate, $id)
    {
        $this->updateDate($newDate, $id);
    }

    public function changeHour($newHour, $id)
    {
        $this->updateHour($newHour, $id);
    }

    public function changeTotal($newTotal, $id)
    {
        $this->updateTotal($newTotal, $id);
    }

    public function changePrice($newPrice, $id)
    {
        $this->updatePrice($newPrice, $id);
    }
    /*================================= D ==============================*/
    public function removeEvent($id)
    {
        $this->deleteEvent($id);
    }
}
