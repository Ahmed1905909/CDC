<?php
class DisplayMaterialModel extends Model
{
    public $Material_Name;
    public $Quantity;

    public function __construct()
    {
        parent::__construct();
        $this->Material_Name="";
        $this->Quantity="";
     }

     public function getID(){
        $this->dbh->query("SELECT Material_ID FROM stock ");
        return $this->dbh->resultFetchCol();
     }

     public function getmaterialdetails(){
        $this->dbh->query("SELECT * FROM stock");
        $this->dbh->execute();
        return $this->dbh->rowCount();
    }

    public function getMaterialName($ID){
        $this->dbh->query( "SELECT Material_Name FROM  stock WHERE `Material_ID` = :ID" );
        $this->dbh->bind(':ID',$ID);
    return $this->dbh->single()->Material_Name;
    }

    public function getMaterialQuantity($ID){
        $this->dbh->query( "SELECT Quantity FROM  stock WHERE `Material_ID` = :ID" );
        $this->dbh->bind(':ID',$ID);
    return $this->dbh->single()->Quantity;
    }

    




}

?>