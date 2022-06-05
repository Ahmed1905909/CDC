<?php
 
class EditProfileModel extends Model{
    // Database Connection

    Protected $Username;
    Protected $First_Name;
    protected $Last_Name;
    protected $Phone_Number;
    protected $Email;

    public function __construct(){
        parent::__construct();
        $this->Username="";
        $this->First_Name = "";
        $this->Last_Name = "";
        $this->Phone_Number = "";
        $this->Email = "";
    }

    public function getID(){
        echo("YES");
        $this->dbh->query("SELECT User_ID FROM user ");
        return $this->dbh->resultFetchCol();
    }

    

    public function getUsername($id){
        
        $this->dbh->query("SELECT Username from user WHERE `User_ID`=:id");
       
        $this->dbh->bind(':id',$id);
        
      return $this->dbh->single();
      
    } 
    
    public function setUsername($Username){
        $this->Username = $Username;

    }

    public function setFname($First_Name){
        $this->First_Name = $First_Name;
    }

   
    public function getFname($id){
        
        $this->dbh->query("SELECT First_Name FROM user WHERE `User_ID`=:id");
        $this->dbh->bind(':id',$id);
        return $this->dbh->single()->First_Name;
      
    }

   
    public function getLname($id){
        $this->dbh->query("SELECT Last_Name FROM user WHERE `User_ID`=:id");
        $this->dbh->bind(':id',$id);
        return $this->dbh->single()->Last_Name;
    }

    public function setLname($Last_Name){
        $this->Last_Name = $Last_Name;
    }


    public function getPhoneNo($id){
        $this->dbh->query("SELECT Phone_Number FROM user WHERE `User_ID`=:id");
        $this->dbh->bind(':id',$id);
        return $this->dbh->single()->Phone_Number;
    }

    public function setPhoneNo($Phone_Number){
        $this->Phone_Number = $Phone_Number;
    }


    public function getEmail($id){
        $this->dbh->query("SELECT Email FROM user WHERE `User_ID`=:id");
        $this->dbh->bind(':id',$id);
        return $this->dbh->single()->Email;
    }

    public function setEmail($Email){
        $this->Email = $Email;
    }

  

    public function EditProfile($id){

        $this->dbh->query("UPDATE user SET `First_Name`=:First_Name, `Last_Name`=:Last_Name, `Phone_Number`=:Phone_Number, `Email`=:Email WHERE `User_ID`=:id");
        
        $this->dbh->bind(':First_Name',$this->First_Name);
        $this->dbh->bind(':Last_Name',$this->Last_Name);
        $this->dbh->bind(':Phone_Number',$this->Phone_Number);
        $this->dbh->bind(':Email',$this->Email);
        $this->dbh->bind(':id',$id);
        
        return $this->dbh->execute();
        redirect('pages/Home');



        
    }
    public function displaymember(){
        $this->dbh->query("SELECT * FROM user WHERE `User_ID` = :id");
        $this->dbh->bind(':ID',$this->ID);
        $this->dbh->execute();

        $dataa=$this->dbh->single();

        return $dataa;
    }

}

?>