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
        for ($i = 0; $i < count($tickets); $i++) {
            include_once "../../classes/users/usersview.class.php";
            $id = $tickets[$i]["company"];
            $users = new Usersview();
            $users = $users->takeOneNamePhoto($id);
            $tickets[$i]["company"] = json_encode($users[0]);
        }
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