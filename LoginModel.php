<?php
//require_once 'UserModel.php';
class LoginModel extends Model
{   
    protected $Email;
    protected $Password;

    protected $EmailErr;
    protected $PasswordErr;


 public function __construct()
    {
        parent::__construct();
        $this->Email    = '';
        $this->Password = '';

        $this->EmailErr    = '';
        $this->PasswordErr = '';
    }

    


   
    public function getEmail()
    {
        return $this->Email;
    }
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    public function getPassword()
    {
        return $this->Password;
    }
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    public function getEmailErr()
    {
        return $this->EmailErr;
    }
    public function setEmailErr($EmailErr)
    {
        $this->EmailErr = $EmailErr;
    }

    public function getPasswordErr()
    {
        return $this->PasswordErr;
    }
    public function setPasswordErr($PasswordErr)
    {
        $this->PasswordErr = $PasswordErr;
    }

    public function findUserByEmail($Email)
    {
        $this->dbh->query('SELECT * FROM users WHERE Email= :Email');
        $this->dbh->bind(':Email', $Email);

        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function emailExist($Email)
    {
        return $this->findUserByEmail($Email) > 0;
    }
    
    public function Login()
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