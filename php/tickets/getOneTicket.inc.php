<?php
if (isset($_POST["getOneTicketSubmit"])) {
    include_once "../../classes/Tickets/ticketsview.class.php";
    $id = $_POST["id"];
    $ticket = new Ticketsview();
    $ticket = $ticket->takeTiketsById($id);
    if (count($ticket) === 0) {
        echo json_encode(array());
    } else {
        for ($i = 0; $i < count($ticket); $i++) {
            include_once "../../classes/users/usersview.class.php";
            $id = $ticket[$i]["company"];
            $users = new Usersview();
            $users = $users->takeOneNamePhoto($id);
            $ticket[$i]["company"] = json_encode($users[0]);
        }
        echo json_encode($ticket);
    }
} else {
    echo "Non-authorized";
}
