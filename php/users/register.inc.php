<?php
if (isset($_POST["registerSubmit"])) {
    if (isset($_FILES["photo"])) {




        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $pwd = $_POST["pwd"];


        include_once "../../classes/users/usersview.class.php";
        include_once "../../classes/users/userscontrol.class.php";

        $verify =  new Usersview();
        $verify = $verify->takeUsersByEmail($email);
        if (count($verify) !== 0) {
            echo "Cet email est deja associe a un autre compte";
            exit();
        } else {

            $image = $_FILES["photo"];
            $uploadFolder = "../../assets/img/users/";
            if ($image['error'] !== 0) {
                echo "error in image";
            } elseif ($image['size'] > 5000000) {
                echo "Image trop lourde";
            } else {
                $extensions = ['jpg', 'jpeg', 'png', 'gif', 'JPG', 'PNG'];
                $file_extension = explode('.', $image['name']);
                $file_extension = end($file_extension);
                if (!in_array($file_extension, $extensions)) {
                    echo "Type not supported!";
                } else {
                    $imageTemp = $image['tmp_name'];
                    $imageNewName = uniqid("", true) . "." . $file_extension;
                    $destination = $uploadFolder . $imageNewName;
                    if (move_uploaded_file($imageTemp, $destination)) {
                        $hashedPwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);

                        $photo = "assets/img/users/" . $imageNewName;

                        $user = new Userscontrol();

                        $user->createUser($full_name, $email, $phone, $photo, $hashedPwd, 0);
                        echo "Success!";
                        exit();
                    } else {
                        echo "Not moved!";
                    }
                }
            }
        }
    } else {
        echo "Photo non fournie!";
        exit();
    }
} else {
    header("Location: ../../index.php");
}
