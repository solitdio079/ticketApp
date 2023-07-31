<?php
if (isset($_POST["getPhotoNameSubmit"])) {
    include_once "../../classes/users/usersview.class.php";

    $users = new Usersview();
    $users = $users->takeNamePhoto();
    if (count($users) === 0) {
        echo "No users!";
    } else {
        echo json_encode($users);
    }
} else {
    echo "Non-authorized";
}
