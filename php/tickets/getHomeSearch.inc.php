<?php
if (isset($_POST["homeSearchSubmit"])) {

    include_once "../../classes/Tickets/ticketsview.class.php";
    $tickets = new Ticketsview();
    $tickets = $tickets->takeHomeSearch($_POST['type'], $_POST['date']);
    if (count($tickets) === 0) {
        echo json_encode(
            array(
                "type" => $_POST['type'],
                "tickets" => []
            )
        );
    } else {
        echo json_encode(
            array(
                "tickets" => $tickets,
                "type" => $_POST['type']
            )
        );
    }
} else {
    echo "Non-authorized";
}