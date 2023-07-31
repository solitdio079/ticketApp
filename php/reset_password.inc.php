<?php
if (isset($_POST["resetPasswordSubmit"])) {

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwdRepeat"];

    if (empty($password) || empty($passwordRepeat)) {
        echo "Champ vide";
        exit();
    } elseif ($password != $passwordRepeat) {
        echo "Mots de Passe ne Correspondent pas!";
        exit();
    }
    $currentDate = date("U");

    include_once "../classes/users/usersview.class.php";
    include_once "../classes/users/userscontrol.class.php";

    $select = new Usersview();
    $select = $select->takepwdResetSelector($selector, $currentDate);
    if (count($select) == 0) {
        echo "Requete a expire! Reessayez a nouveau!";
        exit();
    } else {
        $select = $select[0];
        $tokenBin = hex2bin($validator);
        $tokenCheck = password_verify($tokenBin, $select["pwdResetValidator"]);

        if ($tokenCheck === false) {
            $tokenBin = password_hash($tokenBin, PASSWORD_DEFAULT);
            echo  "Tokens not matching!";

            //$2y$10$2OiZVi7Bh5IeTjt3Gu9EX.aiZS/NXFnGUXzwwDr1EVr.dYduM5R4m
            //$2y$10$MfvTzjAykC07DfLg17QIA.qL2QmENDwkbiMoUDrXfbDjBT7x.R2Tm
            exit();
        } elseif ($tokenCheck === true) {
            $tokenEmail = $select['pwdResetEmail'];

            $user = new Usersview();
            $user = $user->takeUsersByEmail($tokenEmail);
            if ($user == false) {
                echo "No user found with this email!";
                exit();
            } else {
                $reset = new Userscontrol();
                $new_pwd_hashed = password_hash($password, PASSWORD_DEFAULT);
                $reset->changePwd($new_pwd_hashed, $tokenEmail);
                $reset->removepwdReset($tokenEmail);
                echo "Success";
            }
        }
    }
} else {
    header("location: ../index.html");
}
