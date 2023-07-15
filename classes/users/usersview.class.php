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

    public function takeUsersByEmail($email)
    {
        $result = $this->getUsersByEmail($email);
        return $result;
    }
}
