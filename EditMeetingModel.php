<?php
 
class EditMeetingModel extends Model
{

    Protected $Meeting_Date;
    Protected $Meeting_Place;

    public function __construct()
    {
        parent::__construct();
        $this->Meeting_Date="";
        $this->Meeting_Place = "";
    }

    public function getID()
    {
        $this->dbh->query("SELECT Meeting_ID FROM meetings ");
        return $this->dbh->resultFetchCol();
    }

    public function getMeetingDate($id){
        
        $this->dbh->query("SELECT Meeting_Date from meetings WHERE `Meeting_ID`=:id");
       
        $this->dbh->bind(':id',$id);
        
      return $this->dbh->single()->Meeting_Date;
      
    } 
    
   
    public function setMeetingDate($Meeting_Date)
    {
        $this->Meeting_Date = $Meeting_Date;

    }
   

   
    public function getMeetingPlace($id){
        
        $this->dbh->query("SELECT Meeting_Place FROM meetings WHERE `Meeting_ID`=:id");
        $this->dbh->bind(':id',$id);
        return $this->dbh->single()->Meeting_Place;
      
    }

    
    public function setMeetingPlace($Meeting_Place)
    {
        $this->Meeting_Place = $Meeting_Place;
    }
   
    

  

    public function EditMeeting($id)
    {

        $this->dbh->query("UPDATE meetings `Meeting_Date`=:Meeting_Date, `Meeting_Place`=:Meeting_Place WHERE `Meeting_ID`=:id");
        
        $this->dbh->bind(':Meeting_Date',$this->Meeting_Date);
        $this->dbh->bind(':Meeting_Place',$this->Meeting_Place);
        $this->dbh->bind(':id',$id);

        return $this->dbh->execute();
        
    }



    public function displayMeeting()
    {
        $this->dbh->query("SELECT * FROM meetings WHERE `Meetings_ID` = :id");
        $this->dbh->bind(':ID',$this->ID);
        $this->dbh->execute();

        $dataa=$this->dbh->single();

        return $dataa;
    }

}

?>