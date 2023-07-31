<?php
if (isset($_POST["deleteTicketSubmit"])) {
    include_once "../../classes/Tickets/ticketscontrol.class.php";
    $id = $_POST["id"];

    $ticket = new Ticketscontrol();
    $ticket->removeTicket($id);
    echo "Success!";
} else {
    echo "Non-authorized";
}
