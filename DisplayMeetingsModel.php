<?php
class DisplayMeetingsModel extends model
{
     Protected $Meeting_Date;
     protected $Meeting_Place;
     
     public function __construct(){
        parent::__construct();
        $this->Meeting_Date="";
        $this->Meeting_Place="";
     }
     public function getID(){
        $this->dbh->query("SELECT Meeting_ID FROM meetings ");
        return $this->dbh->resultFetchCol();
    }
    public function getmeetingdetails(){
        $this->dbh->query("SELECT * FROM meetings");
        $this->dbh->execute();
        return $this->dbh->rowCount();
    }
     public function getMeetingDate($ID){
         $this->dbh->query( "SELECT Meeting_Date FROM  meetings WHERE `Meeting_ID` = :ID" );
         $this->dbh->bind(':ID',$ID);
     return $this->dbh->single()->Meeting_Date;

    }
    public function getMeetingPlace($ID)
    {
        $this->dbh->query( "SELECT Meeting_Place FROM  meetings WHERE `Meeting_ID` = :ID" );
        $this->dbh->bind(':ID',$ID);
    return $this->dbh->single()->Meeting_Place;
     }
    
}