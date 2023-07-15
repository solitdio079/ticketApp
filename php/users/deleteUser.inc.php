<?php
if (isset($_POST["deleteUserSubmit"])) {
    require_once "../../classes/users/userscontrol.class.php";
    $id = $_POST["id"];
    $user = new Userscontrol();
    $user->removeUser($id);
    echo "Success!";
} else {
    header("Location: ../../index.php");
}
