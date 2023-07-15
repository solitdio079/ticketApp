<?php
if (isset($_POST["changeTypeSubmit"])) {
    require_once "../../classes/users/userscontrol.class.php";
    $user = new Userscontrol();
    $newType = $_POST["type"];
    $id = $_POST["id"];

    $user->changeType($newType, $id);
    echo "Success!";
    exit();
} else {
    header("location : ../../index.php");
}
