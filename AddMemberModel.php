<?php
class AddMemberModel extends Model
{
    protected $title ="Add Member";
    protected $UserName;
    protected $UserNameErr;
    protected $FName;
    protected $FNameErr;
    protected $LName;
    protected $LNameErr;
    protected $Year;
    protected $YearErr;
    protected $Committee;
    protected $CommitteeErr;
    protected $Date;
    protected $DateErr;
    protected $Gender;
    protected $GenderErr;
    protected $Email;
    protected $EmaiLErr;
    protected $Password;
    protected $PasswordErr;
    protected $ConfirmPassword;
    protected $ConfirmPasswordErr;
    protected $PhoneNumber;
    protected $PhoneNumberErr;

    public function __construct()
    {
        parent::__construct();
        $this->UserName='';
        $this->UserNameErr='';
        $this->FName ='';
        $this->FNameErr ='';
        $this->LName ='';
        $this->LNameErr ='';
        $this->Year ='';
        $this->YearErr ='';
        $this->Committee ='';
        $this->CommitteeErr ='';
        $this->Date ='';
        $this->DateErr='';
        $this->Gender='';
        $this->GenderErr ='';
        $this->Email='';
        $this->EmailErr ='';
        $this->Password='';
        $this->PasswordErr ='';
        $this->ConfirmPassword='';
        $this->ConfirmPasswordErr ='';
        $this->PhoneNumber='';
        $this->PhoneNumberErr ='';
    }



	
	 public function getUserName() {
		return $this->UserName;
	}
	
	public function setUserName($UserName): self {
		$this->UserName = $UserName;
		return $this;
	}
	
	function getUserNameErr() {
		return $this->UserNameErr;
	}
	
	
	function setUserNameErr($UserNameErr): self {
		$this->UserNameErr = $UserNameErr;
		return $this;
	}
	
	function getFName() {
		return $this->FName;
	}
	
	
	function setFName($FName): self {
		$this->FName = $FName;
		return $this;
	}
	
	function getFNameErr() {
		return $this->FNameErr;
	}
	
	
	function setFNameErr($FNameErr): self {
		$this->FNameErr = $FNameErr;
		return $this;
	}
	
	function getLName() {
		return $this->LName;
	}
	
	
	function setLName($LName): self {
		$this->LName = $LName;
		return $this;
	}
	
	function getLNameErr() {
		return $this->LNameErr;
	}
	
	
	function setLNameErr($LNameErr): self {
		$this->LNameErr = $LNameErr;
		return $this;
	}
		function getYear() {
		return $this->Year;
	}
	
	
	function setYear($Year): self {
		$this->Year = $Year;
		return $this;
	}
	
	function getYearErr() {
		return $this->YearErr;
	}
	
	
	function setYearErr($YearErr): self {
		$this->YearErr = $YearErr;
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
		return $this->CommitteeErr;
	}
	
	
	function setCommitteeErr($CommitteeErr): self {
		$this->CommitteeErr = $CommitteeErr;
		return $this;
	}
	
	function getDate() {
		return $this->Date;
	}
	
	
	function setDate($Date): self {
		$this->Date = $Date;
		return $this;
	}
	
	function getDateErr() {
		return $this->DateErr;
	}
	
	
	function setDateErr($DateErr): self {
		$this->DateErr = $DateErr;
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
		return $this->GenderErr;
	}
	
	
	function setGenderErr($GenderErr): self {
		$this->GenderErr = $GenderErr;
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
		return $this->EmILErr;
	}
	
	
	function setEmILErr($EmILErr): self {
		$this->EmILErr = $EmILErr;
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
		return $this->PasswordErr;
	}
	
	
	function setPasswordErr($PasswordErr): self {
		$this->PasswordErr = $PasswordErr;
		return $this;
	}
	
	function getConfirmPassword() {
		return $this->ConfirmPassword;
	}
	
	
	function setConfirmPassword($ConfirmPassword): self {
		$this->ConfirmPassword = $ConfirmPassword;
		return $this;
	}
	
	function getConfirmPasswordErr() {
		return $this->ConfirmPasswordErr;
	}
	
	
	function setConfirmPasswordErr($ConfirmPasswordErr): self {
		$this->ConfirmPasswordErr = $ConfirmPasswordErr;
		return $this;
	}
	
	function getPhoneNumber() {
		return $this->PhoneNumber;
	}
	
	
	function setPhoneNumber($PhoneNumber): self {
		$this->PhoneNumber = $PhoneNumber;
		return $this;
	}
	
	function getPhoneNumberErr() {
		return $this->PhoneNumberErr;
	}
	
	
	function setPhoneNumberErr($PhoneNumberErr): self {
		$this->PhoneNumberErr = $PhoneNumberErr;
		return $this;
	}
    public function findMemberByEmail($Email)
    {
        $this->dbh->query('select * from user where Email = :Email');
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
        $this->dbh->query("INSERT INTO user (`Username`, `First_Name`, `Last_Name`,`Academic_Year`,`Committe`,`Date_of_Birth`,`Gender`,`Email`,`Password`,`Confirm_Password`,`Phone_Number`)
		 VALUES(:Username , :First_Name, :Last_Name, :Academic_Year, :committe, :Date_of_Birth, :Gender, :Email, :Password , :Confirm_Password,:Phone_Number)");
        $this->dbh->bind(':Username', $this->UserName);
		$this->dbh->bind(':First_Name', $this->FName);
        $this->dbh->bind(':Last_Name', $this->LName);
        $this->dbh->bind(':Academic_Year', $this->Year);
		$this->dbh->bind(':Committe', $this->Committee);
		$this->dbh->bind(':Date_of_Birth', $this->Date);
		$this->dbh->bind(':Gender', $this->Gender);
		$this->dbh->bind(':Email', $this->Email);
		$this->dbh->bind(':Password', $this->Password);
		$this->dbh->bind(':Confirm_Password', $this->ConfirmPassword);
		$this->dbh->bind(':Phone_Number', $this->PhoneNumber);

        return $this->dbh->execute();
    }


}
?>