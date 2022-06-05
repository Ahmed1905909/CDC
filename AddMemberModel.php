<?php
class AddMemberModel extends Model
{
    public $title ="Add Member";
    public $Username;
    public $Username_Err;
    public $First_Name;
    public $First_Name_Err;
    public $Last_Name;
    public $Last_Name_Err;
    public $Acadamic_Year;
    public $Acadamic_Year_Err;
    public $Committee;
    public $Committee_Err;
    public $Date_of_Birth;
    public $Date_of_Birth_Err;
    public $Gender;
    public $Gender_Err;
    public $Email;
    public $EmaiL_Err;
    public $Password;
    public $Password_Err;
    public $Confirm_Password;
    public $Confirm_Password_Err;
    public $Phone_Number;
    public $Phone_Number_Err;
	public $Profile_Picture;
	public $Profile_Picture_Err;
	public $Role;
	public $Role_Err;

    public function __construct()
    {
        parent::__construct();
        $this->Username='';
        $this->Username_Err='';
        $this->First_Name ='';
        $this->First_Name_Err ='';
        $this->Last_Name ='';
        $this->Last_Name_Err ='';
        $this->Acadamic_Year ='';
        $this->Acadamic_Year_Err ='';
        $this->Committee ='';
        $this->Committee_Err ='';
        $this->Date_of_Birth ='';
        $this->Date_of_Birth_Err='';
        $this->Gender='';
        $this->Gender_Err ='';
        $this->Email='';
        $this->EmaiL_Err ='';
        $this->Password='';
        $this->Password_Err ='';
        $this->Confirm_Password='';
        $this->Confirm_Password_Err ='';
        $this->Phone_Number='';
        $this->Phone_Number_Err ='';
		$this->Profile_Picture='';
	    $this->Profile_Picture_Err='';
		$this->Role='';
		$this->Role_Err='';
    }



	
	 public function getUserName() {
		return $this->Username;
	}
	
	public function setUserName($Username): self {
		$this->Username = $Username;
		return $this;
	}
	
	function getUserNameErr() {
		return $this->Username_Err;
	}
	
	
	function setUserNameErr($Username_Err): self {
		$this->Username_Err = $Username_Err;
		return $this;
	}
	
	function getFName() {
		return $this->First_Name;
	}
	
	
	function setFName($First_Name): self {
		$this->First_Name = $First_Name;
		return $this;
	}
	
	function getFNameErr() {
		return $this->First_Name_Err;
	}
	
	
	function setFNameErr($First_Name_Err): self {
		$this->FNamFirst_Name_ErreErr = $First_Name_Err;
		return $this;
	}
	
	function getLName() {
		return $this->Last_Name;
	}
	
	
	function setLName($Last_Name): self {
		$this->Last_Name = $Last_Name;
		return $this;
	}
	
	function getLNameErr() {
		return $this->LNameErr;
	}
	
	
	function setLNameErr($Last_Name_Err): self {
		$this->Last_Name_Err = $Last_Name_Err;
		return $this;
	}
		function getYear() {
		return $this->Acadamic_Year;
	}
	
	
	function setYear($Acadamic_Year): self {
		$this->Acadamic_Year = $Acadamic_Year;
		return $this;
	}
	
	function getYearErr() {
		return $this->Acadamic_Year_Err;
	}
	
	
	function setYearErr($Acadamic_Year_Err): self {
		$this->Acadamic_Year_Err = $Acadamic_Year_Err;
		return $this;
	}
	
	function getCommittee() {
		return $this->Committee;
	}
	

	function setCommittee($Committee): self {
		$this->Committee = $Committee;
		return $this;
	}
	
	function getCommitteeErr() {
		return $this->Committee_Err;
	}
	
	
	function setCommitteeErr($Committee_Err): self {
		$this->Committee_Err = $Committee_Err;
		return $this;
	}
	
	function getDate() {
		return $this->Birthday;
	}
	
	
	function setDate($Date_of_Birth): self {
		$this->Date_of_Birth = $Date_of_Birth;
		return $this;
	}
	
	function getDateErr() {
		return $this->Date_of_Birth_Err;
	}
	
	
	function setDateErr($Date_of_Birth_Err): self {
		$this->Date_of_Birth_Err = $Date_of_Birth_Err;
		return $this;
	}
	
	function getGender() {
		return $this->Gender;
	}
	

	function setGender($Gender): self {
		$this->Gender = $Gender;
		return $this;
	}
	
	function getGenderErr() {
		return $this->Gender_Err;
	}
	
	
	function setGenderErr($Gender_Err): self {
		$this->Gender_Err = $Gender_Err;
		return $this;
	}
	
	function getEmail() {
		return $this->Email;
	}
	
	function setEmail($Email): self {
		$this->Email = $Email;
		return $this;
	}
	
	function getEmailErr() {
		return $this->EmaiL_Err;
	}
	
	
	function setEmaiLErr($EmaiL_Err): self {
		$this->EmaiL_Err = $EmaiL_Err;
		return $this;
	}
	
	function getPassword() {
		return $this->Password;
	}
	
	
	function setPassword($Password): self {
		$this->Password = $Password;
		return $this;
	}
	
	function getPasswordErr() {
		return $this->Password_Err;
	}
	
	
	function setPasswordErr($Password_Err): self {
		$this->Password_Err = $Password_Err;
		return $this;
	}
	
	function getConfirmPassword() {
		return $this->Confirm_Password;
	}
	
	
	function setConfirmPassword($Confirm_Password): self {
		$this->Confirm_Password = $Confirm_Password;
		return $this;
	}
	
	function getConfirmPasswordErr() {
		return $this->Confirm_Password_Err;
	}
	
	
	function setConfirmPasswordErr($Confirm_Password_Err): self {
		$this->Confirm_Password_Err = $Confirm_Password_Err;
		return $this;
	}
	
	
	public function getProfilePicture() {
		return $this->Profile_Picture;
	}

	function setProfilePicture($Profile_Picture): self {
		$this->$Profile_Picture = $Profile_Picture;
		return $this;
	}

	public function getProfilePictureErr() {
		return $this->Profile_Picture_Err;
	}

	function setProfilePictureErr($Profile_Picture_Err): self {
		$this->$Profile_Picture_Err = $Profile_Picture_Err;
		return $this;
	}

	function getRole() {
		return $this->Role;
	}

	function setRole($Role): self {
		$this->Role = $Role;
		return $this;
	}

	function getRoleErr() {
		return $this->Role_Err;
	}
	
	
	function setRoleErr($Role_Err): self {
		$this->Role_Err = $Role_Err;
		return $this;

	}
	
	function getPhoneNumber() {
		return $this->Phone_Number;
	}
	
	
	function setPhoneNumber($Phone_Number): self {
		$this->Phone_Number = $Phone_Number;
		return $this;
	}
	
	function getPhoneNumberErr() {
		return $this->Phone_Number_Err;
	}
	
	
	function setPhoneNumberErr($Phone_Number_Err): self {
		$this->Phone_Number_Err = $Phone_Number_Err;
		return $this;
	}
    public function findMemberByEmail($Email)
    {
        $this->dbh->query('SELECT * from user where Email = :Email');
        $this->dbh->bind(':Email', $Email);

        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }
    public function emailExist($Email)
    {
        return $this->findMemberByEmail($Email) > 0;
    }
	public function signup()
    {
        $this->dbh->query("INSERT INTO user (`Username`, `First_Name`, `Last_Name`,`Academic_Year`,`Committee`,`Date_of_Birth`,`Gender`,`Profile_Picture`,`Email`,`Password`,`Confirm_Password`,`Phone_Number`)
        VALUES(:Username , :First_Name, :Last_Name, :Academic_Year, :Committee, :Date_of_Birth, :Gender, :Profile_Picture, :Email, :Password , :Confirm_Password,:Phone_Number)");

        $this->dbh->bind(':Username', $this->Username);
		$this->dbh->bind(':First_Name', $this->First_Name);
        $this->dbh->bind(':Last_Name', $this->Last_Name);
        $this->dbh->bind(':Academic_Year', $this->Acadamic_Year);
		$this->dbh->bind(':Committee', $this->Committee);
		$this->dbh->bind(':Date_of_Birth', $this->Date_of_Birth);
		$this->dbh->bind(':Gender', $this->Gender);
		$this->dbh->bind(':Profile_Picture', $this->Profile_Picture);
		$this->dbh->bind(':Email', $this->Email);
		$this->dbh->bind(':Password', $this->Password);
		$this->dbh->bind(':Confirm_Password', $this->Confirm_Password);
		$this->dbh->bind(':Phone_Number', $this->Phone_Number);


        return $this->dbh->execute();
    }
	public function promote()
	{
		$this->dbh->query("INSERT INTO user_role (`Admin`) VALUES(:Admin)");
		$this->dbh->query("INSERT INTO user_role (`Media_Admin`) VALUES(:Media_Admin)");
		$this->dbh->query("INSERT INTO user_role (`HR_Admin`) VALUES(:HR_Admin)");

		$this->dbh->bind(':Admin', $this->Admin);
		$this->dbh->bind(':Media_Admin', $this->Media_Admin);
		$this->dbh->bind(':HR_Admin', $this->HR_Admin);

	}

}
?>