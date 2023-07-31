<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;





if (isset($_POST["resetRequestSubmit"])) {

    /**
     * Create Tokens to validate and select proper user
     */
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "https://www.bysolitdio.net/ticketApp/reset_password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    $userEmail = $_POST["email"];
    /**
     * Check if User email is in user class
     */
    include_once "../classes/users/usersview.class.php";
    $verify = new Usersview();
    $verify = $verify->takeUsersByEmail($userEmail);
    if ($verify === false) {
        echo "Pas de compte avec cet Email!";
        exit();
    } else {
        /**
         * Remove Any existing process for the user
         */
        include_once "../classes/users/userscontrol.class.php";
        $reset = new Userscontrol();
        $reset->removepwdReset($userEmail);

        /**
         * Set pwdReset Instance
         */
        $set = new Userscontrol();
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        $set->createpwdReset($userEmail, $selector, $hashedToken, $expires);


        /**
         * Send Email
         */
        $to = $userEmail;

        $subject = 'Reset Password';

        $headers  = "From: " . strip_tags($userEmail) . "\r\n";
        $headers .= "Reply-To: " . strip_tags($userEmail) . "\r\n";
        $headers .= "CC: solitdio@gmail.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $message = 'Nous avons reçu une demande de changement de mot de passe.Le lien est <a href="' . $url . '">ICI</a>, ignorez ce message si ce n\'est pas pas vous qui avez fait la requete.';


        if (mail($to, $subject, $message, $headers)) {
            echo "Success";
        } else {
            echo "Message non envoye!";
        }
    }
} else {
    echo "Acces non autorise!";
}
