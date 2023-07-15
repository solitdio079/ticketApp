<?php
session_start();
if ($_POST["loginSubmit"]) {
    $email = $_POST["email"];
    $pwd  = $_POST["pwd"];
    include_once "../../classes/users/usersview.class.php";
    $verify = new Usersview();
    $verify = $verify->takeUsersByEmail($email);
    if (count($verify) === 0) {
        echo "Pas d'utilisateur associe a cet email!";
        exit();
    } else {
        $user = $verify[0];
        $pwd_verify = password_verify($pwd, $user["pwd"]);
        if (!$pwd_verify) {
            echo "Mot de Passe incorrect!";
            exit();
        } else {
            $_SESSION["user"] = array(
                "id" => $user["id"],
                "full_name" => $user["full_name"],
                "email" => $user["email"],
                "phone" => $user["phone"],
                "photo" => $user["photo"],
                "type" => $user["type"]
            );

            echo "Success!";
            exit();
        }
    }
} else {
    header("Location: ../index.php");
}
