<?php

require_once "users.class.php";

class Userscontrol extends Users
{
    /* ============================================================ C ================================= */
    public function createUser($full_name, $email, $phone, $photo, $pwd, $type)
    {
        $this->setUser($full_name, $email, $phone, $photo, $pwd, $type);
    }
    /* ============================================================ U ======================================== */
    public function changeType($newType, $id)
    {
        $this->updateType($newType, $id);
    }
    public function changeName($newName, $id)
    {
        $this->updateName($newName, $id);
    }
    public function changeEmail($newEmail, $id)
    {
        $this->updateEmail($newEmail, $id);
    }
    public function changePhoto($newPhoto, $id)
    {
        $this->updatePhoto($newPhoto, $id);
    }
    public function changePhone($newPhone, $id)
    {
        $this->updatePhone($newPhone, $id);
    }
    public function changePwd($newPwd, $id)
    {
        $this->updatePwd($newPwd, $id);
    }
    /* ============================================================ D ===================================== */

    public function removeUser($id)
    {
        $this->deleteUser(($id));
    }
    //
    // Methods For pwdReset Table
    //

    public function removepwdReset($email)
    {
        $this->deletepwdReset($email);
    }

    public function createpwdReset($pwdResetEmail, $pwdResetSelector, $pwdResetToken, $pwdResetExpires)
    {
        $this->setpwdReset($pwdResetEmail, $pwdResetSelector, $pwdResetToken, $pwdResetExpires);
    }
}
