<?php

if (isset($_POST["getAllSubmit"])) {
    require_once "../../classes/events/eventsview.class.php";

    $allEvents = new Eventsview();
    $allEvents = $allEvents->takeAllEvents();
    if (count($allEvents) === 0) {
        echo "No events";
    } else {
        echo json_encode($allEvents);
    }
} else {
    header("Location: ../../index.php");
}
