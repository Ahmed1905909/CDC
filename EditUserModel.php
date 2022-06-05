<?php
class EditUserModel extends model
{
     
     
     public function __construct(){
        parent::__construct();
        $this->First_Name="";
     }
     public function getID(){
        $this->dbh->query("SELECT User_ID FROM user ");
        return $this->dbh->resultFetchCol();
    }
    public function getCustomer(){
        $this->dbh->query("SELECT * FROM user");
        $this->dbh->execute();
        return $this->dbh->rowCount();
    }
     public function getFname($ID){
         $this->dbh->query( "SELECT First_Name FROM  user WHERE `User_ID` = :ID" );
         $this->dbh->bind(':ID',$ID);
     return $this->dbh->single()->First_Name;

    }
    public function getLname($ID){
        $this->dbh->query( "SELECT Last_Name FROM  user WHERE `User_ID` = :ID" );
        $this->dbh->bind(':ID',$ID);
    return $this->dbh->single()->Last_Name;

   }
   public function getUsername($ID){
    $this->dbh->query( "SELECT Username FROM  user WHERE `User_ID` = :ID" );
    $this->dbh->bind(':ID',$ID);
return $this->dbh->single()->Username;

}
public function getEmail($ID){
    $this->dbh->query( "SELECT Email FROM  user WHERE `User_ID` = :ID" );
    $this->dbh->bind(':ID',$ID);
return $this->dbh->single()->Email;



}
public function getProfilePicture($ID){
    $this->dbh->query( "SELECT Profile_Picture FROM  user WHERE `User_ID` = :ID" );
    $this->dbh->bind(':ID',$ID);
return $this->dbh->single()->Profile_Picture;
}

    
    // public function deletemember(){
    //   $dbh = 'DELETE FROM user ';
    //         $stmt = self::$_connection->prepare($SQL);
    //         $stmt->execute(['Fisrt_Name'=>$this->First_Name]);
    //         return $stmt->rowCount();
        
    // }
    
    // public function deletemember($ID){
    //     $this->dbh->delete("DELETE * From user WHERE`User_ID` = $ID");

    // }

    // public function retrive()
    // {
    //     return $this->dbh->select("SELECT * FROM `user`");
    // }
    // public function deletemember($ID)
    // {
    //     $this->dbh->delete('user',"`User_ID`={$ID}");

    // }


    public function editmember($ID){
        $this->dbh->query("UPDATE user SET `Username`=:Username WHERE  `User_ID`=:ID");
        $this->dbh->bind(':Username',$this->user);

        $this->dbh->bind(':First_Name',$this->user);
        $this->dbh->bind(':Last_Name',$this->user);
        $this->dbh->bind(':Acadamic_Year',$this->user);
        $this->dbh->bind(':Committee',$this->user);
        $this->dbh->bind(':Email',$this->user);
        $this->dbh->bind(':Phone_Number',$this->user);
        $this->dbh->bind(':ID',$ID);
        return $this->dbh->execute();
        if($Edit->editmember($_GET['ID'])){
            echo ('regeter success');
            redirect('ED.php');
        }
        else{
            die('error');
        }

    }
     
}