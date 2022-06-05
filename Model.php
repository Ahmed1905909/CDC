<?php
abstract class Model{
    protected $dbh;

    public function __construct(){
        $this->dbh = new Database;
    }


    public function getDBH(){
        return $this->dbh;
    }
    
}

