<?php
if (isset($_POST["getAllTicketsSubmit"])) {
    include_once "../../classes/Tickets/ticketsview.class.php";
    $tickets = new Ticketsview();
    $tickets = $tickets->takeAllTickets();
    if (count($tickets) === 0) {
        echo "No Tickets!";
    } else {
        echo json_encode($tickets);
    }
} else {
    echo "Non-authorized";
}
