<?php
require_once 'UserModel.php';
class LoginModel extends UserModel
{
    public  $title = 'User Login Page';

    public function login()
    {
        $this->dbh->query('SELECT * from user WHERE Email = :Email');
        $this->dbh->bind(':Email', $this->Email);

        $record = $this->dbh->single();
        $hash_pass = $record->Password;

        if (password_verify($this->Password,  $hash_pass)) {
            return $record;
        } else {
            return false;
        }
    }
}