<?php
require_once "dbh.class.php";

class Users extends Dbh
{
    /* ============================================================ C ================================= */
    protected function setUser($full_name, $email, $phone, $photo, $pwd, $type)
    {
        $sql = "INSERT INTO `users`(`full_name`, `email`, `phone`, `photo`, `pwd`, `type`) VALUES (?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$full_name, $email, $phone, $photo, $pwd, $type]) or die(print_r($stmt->errorInfo(), true));
    }
    /* ============================================================ R ====================================== */

    protected function getAllUsers()
    {
        $sql = "SELECT * FROM `users` WHERE 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute()
            or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();

        return $result;
    }
    protected function getNamePhoto()
    {
        $sql = "SELECT  `id`, `full_name`, `photo` FROM `users` WHERE 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        $result = $stmt->fetchAll();
        return $result;
    }

    protected function getUsersById($id)
    {
        $sql = "SELECT * FROM `users` WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id])
            or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();

        return $result;
    }
    protected function getUsersByEmail($email)
    {
        $sql = "SELECT * FROM `users` WHERE `email` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email])
            or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();

        return $result;
    }
    /* ============================================================ U ======================================== */
    protected function updateType($newType, $id)
    {
        $sql = "UPDATE `users` SET `type`=? WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newType, $id])
            or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateName($newName, $id)
    {
        $sql = "UPDATE `users` SET `full_name`=? WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newName, $id])
            or die(print_r($stmt->errorInfo(), true));
    }
    protected function updateEmail($newEmail, $id)
    {
        $sql = "UPDATE `users` SET `email`=? WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newEmail, $id])
            or die(print_r($stmt->errorInfo(), true));
    }
    protected function updatePhone($newPhone, $id)
    {
        $sql = "UPDATE `users` SET `phone`=? WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newPhone, $id])
            or die(print_r($stmt->errorInfo(), true));
    }
    protected function updatePhoto($newPhoto, $id)
    {
        $sql = "UPDATE `users` SET `phone`=? WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newPhoto, $id])
            or die(print_r($stmt->errorInfo(), true));
    }
    protected function updatePwd($newPwd, $id)
    {
        $sql = "UPDATE `users` SET `pwd`=? WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newPwd, $id])
            or die(print_r($stmt->errorInfo(), true));
    }
    /* ============================================================ D ===================================== */

    protected function deleteUser($id)
    {
        $sql = "DELETE FROM `users` WHERE `id`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id])
            or die(print_r($stmt->errorInfo(), true));
    }
}
