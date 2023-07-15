<?php
require_once "events.class.php";

class Eventsview extends Events
{
    /*================================= R ==============================*/
    public function takeAllEvents()
    {
        $result = $this->getAllEvents();
        return $result;
    }

    public function takeEventsByOrganizer($organizer)
    {
        $result = $this->getEventsByOrganizer($organizer);
        return $result;
    }

    public function takeEventById($id)
    {
        $result = $this->getEventById($id);
        return $result;
    }
}
