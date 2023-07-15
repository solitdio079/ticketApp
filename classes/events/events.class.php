<?php
require_once "dbh.class.php";

class Events extends Dbh
{
    /*================================= C ==============================*/
    protected function setEvent($name, $place, $images, $organizer, $date, $hour, $total, $price)
    {
        $sql = "INSERT INTO `events`(`name`, `place`, `images`, `organizer`, `date`, `hour`, `total`, `price`) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $place, $images, $organizer, $date, $hour, $total, $price]) or die(print_r($stmt->errorInfo(), true));
    }
    /*================================= R ==============================*/
    protected function getAllEvents()
    {
        $sql = "SELECT * FROM `events` WHERE 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute()  or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getEventsByOrganizer($organizer)
    {
        $sql = "SELECT * FROM `events` WHERE  `organizer` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$organizer])  or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getEventById($id)
    {
        $sql = "SELECT * FROM `events` WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id])  or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    /*================================= U ==============================*/
    protected function updateName($newName, $id)
    {
        $sql = "UPDATE `events` SET `name`=? WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newName, $id]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function updatePlace($newPlace, $id)
    {
        $sql = "UPDATE `events` SET `place`=? WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newPlace, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateImages($newImages, $id)
    {
        $sql = "UPDATE `events` SET `images`=? WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newImages, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateOrganizer($newOrganizer, $id)
    {
        $sql = "UPDATE `events` SET `organizer`=? WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newOrganizer, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateDate($newDate, $id)
    {
        $sql = "UPDATE `events` SET `date`=? WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newDate, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateHour($newHour, $id)
    {
        $sql = "UPDATE `events` SET `hour`=? WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newHour, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateTotal($newTotal, $id)
    {
        $sql = "UPDATE `events` SET `total`=? WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newTotal, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function updatePrice($newPrice, $id)
    {
        $sql = "UPDATE `events` SET `price`=? WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newPrice, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    /*================================= D ==============================*/
    protected function deleteEvent($id)
    {
        $sql = "DELETE FROM `events` WHERE `id` ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(), true));
    }
}
