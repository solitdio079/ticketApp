<?php
if (isset($_POST["getOneTicketSubmit"])) {
    include_once "../../classes/Tickets/ticketsview.class.php";
    $id = $_POST["id"];
    $ticket = new Ticketsview();
    $ticket = $ticket->takeTiketsById($id);
    if (count($ticket) === 0) {
        echo "No ticket";
    } else {
        echo json_encode($ticket);
    }
} else {
    echo "Non-authorized";
}
