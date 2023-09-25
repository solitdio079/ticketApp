<?php
if (isset($_POST["getOnePhotoNameSubmit"])) {
    include_once "../../classes/users/usersview.class.php";
    $id = $_POST["id"];
    $users = new Usersview();
    $users = $users->takeOneNamePhoto($id);
    if (count($users) === 0) {
        echo json_encode(array());
    } else {
        echo json_encode($users);
    }
} else {
    echo "Non-authorized";
}