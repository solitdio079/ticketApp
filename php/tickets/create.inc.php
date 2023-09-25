<?php
if (isset($_POST["createSubmit"])) {
    $location = '';
    if (!isset($_FILES["images"])) {
        echo "Pas d'images!";
    } else {
        $images = reArrayFiles($_FILES["images"]);

        foreach ($images as $image) {
            if ($image['error'] !== 0) {
                echo "Erreure: " . $image['error'];
            } elseif ($image['size'] > 5000000) {
                echo "Image trop lourde!";
                exit();
            } else {
                $extensions = ['jpg', 'jpeg', 'png', 'gif', 'JPG', 'PNG', 'webp'];
                $file_extension = explode('.', $image['name']);
                $file_extension = end($file_extension);
                if (!in_array($file_extension, $extensions)) {
                    echo "Erreure: " . $image['tmp_name'] . " est du type non supporte!";
                    exit();
                } else {
                    $imageTemp = $image['tmp_name'];
                    $imageNewName = uniqid("", true) . "." . $file_extension;
                    $uploadFolder = "../../assets/img/products/";
                    $uploadForDb = "assets/img/products/";
                    $destination = $uploadFolder . $imageNewName;
                    if (move_uploaded_file($imageTemp, $destination)) {
                        $location .= $uploadForDb . $imageNewName . ";";
                    } else {
                        echo "Images n'a pu etre enregistrer dans le dossier! Reesayez!";
                        exit();
                    }
                }
            }
        }
        require_once "../../classes/Tickets/ticketscontrol.class.php";
        $name = $_POST['name'];
        $details = $_POST['details'];
        $organizer = $_POST['organizer'];
        $date = $_POST['date'];
        $total = $_POST['total'];
        $price = $_POST['price'];
        $type = $_POST["type"];

        $ticket = new Ticketscontrol();
        $ticket->createTicket($name, $type, $details, $organizer, $location, $price, $date, $total);
        echo "Success!";
    }
} else {
    echo "Non-authorized";
}

function reArrayFiles($file_post)
{
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_key = array_keys($file_post);

    for ($i = 0; $i < $file_count; $i++) {
        foreach ($file_key as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}
