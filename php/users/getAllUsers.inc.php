<?php
if (isset($_POST["getAllSubmit"])) {
    require_once "../../classes/users/usersview.class.php";
    $users = new Usersview();
    $users = $users->takeAllUsers();
    if (count($users) === 0) {
        echo "No users found!";
        exit();
    } else {
        echo json_encode($users);
        exit();
    }
} else {
    header("Location: ../../index.php");
}
