<?php

include_once "tickets.class.php";


class Ticketsview extends Tickets
{
    public function takeAllTickets()
    {
        $results = $this->getAllTickets();
        return $results;
    }


    public function takeTiketsById($id)
    {
        $results = $this->getTicketsById($id);
        return $results;
    }
    public function takeTiketsByCompany($company)
    {
        $results = $this->getTicketsByCompany($company);
        return $results;
    }
    public function takeTiketsByType($type)
    {
        $results = $this->getTicketsByType($type);
        return $results;
    }
}
