<?php

require_once "users.class.php";

class Usersview extends Users
{
    /* ============================================================ R ====================================== */
    public function takeAllUsers()
    {
        $result = $this->getAllUsers();
        return $result;
    }

    public function takeUsersById($id)
    {
        $result = $this->getUsersById($id);
        return $result;
    }
    public function takeNamePhoto()
    {
        $result = $this->getNamePhoto();
        return $result;
    }
    public function takeOneNamePhoto($id)
    {
        $result = $this->getOneNamePhoto($id);
        return $result;
    }
    public function takeUsersByEmail($email)
    {
        $result = $this->getUsersByEmail($email);
        return $result;
    }
    /**
     * pwdReset Methods
     */

    public function takepwdResetSelector($pwdResetSelector, $currentDate)
    {
        $result = $this->getpwdResetSelector($pwdResetSelector, $currentDate);
        return $result;
    }
}
