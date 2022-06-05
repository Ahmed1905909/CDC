<?php
class Users extends Controller
{
    public function AddMember()
    {
        //include_once 'dbh.config.php';
        $AddMemberModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            // Process form
            $AddMemberModel->setUserName(trim($_POST['Username']));
            $AddMemberModel->setFName(trim($_POST['First_Name']));
            $AddMemberModel->setLName(trim($_POST['Last_Name']));
            $AddMemberModel->setYear(trim($_POST['Academic_Year']));
            $AddMemberModel->setCommittee(trim($_POST['Committee']));
            $AddMemberModel->setDate(trim($_POST['Date_of_Birth']));
            $AddMemberModel->setGender(trim($_POST['Gender']));
            $AddMemberModel->setEmail(trim($_POST['Email']));
            $AddMemberModel->setPassword(trim($_POST['Password']));
            $AddMemberModel->setConfirmPassword(trim($_POST['Confirm_Password']));
            $AddMemberModel->setProfilePicture(trim($_POST['Profile_Picture']));
            $AddMemberModel->setPhoneNumber(trim($_POST['Phone_Number']));

            
            if (empty($AddMemberModel->getFName()))
             {
                $AddMemberModel->setFNameErr('Please enter a name');
            }
            elseif (empty($AddMemberModel->getEmail())) 
            {
                $AddMemberModel->setEmailErr('Please enter an email');
            } 
            elseif ($AddMemberModel->emailExist($_POST['Email']))
             {
                $AddMemberModel->setEmailErr('Email is already registered');
            }
            elseif (empty($AddMemberModel->getPassword()))
             {
                $AddMemberModel->setPasswordErr('Please enter a password');
            } 
            elseif (strlen($AddMemberModel->getPassword()) < 4) 

            {
                $AddMemberModel->setPasswordErr('Password must contain at least 4 characters');
            }

            elseif ($AddMemberModel->getPassword() != $AddMemberModel->getConfirmPassword()) 
            {
                $AddMemberModel->setConfirmPasswordErr('Passwords do not match');
            }

            elseif (empty($AddMemberModel->getNameErr()) &&empty($AddMemberModel->getEmailErr()) &&empty($AddMemberModel->getPasswordErr()) &&empty($AddMemberModel->getConfirmPasswordErr()) ) 
            {
                //Hash Password
                $AddMemberModel->setPassword(password_hash($AddMemberModel->getPassword(), PASSWORD_DEFAULT));
            }

                if ($AddMemberModel->signup())
                 {
                    //header('location: ' . URLROOT . 'users/login');
                    flash('register_success', 'You have registered successfully');
                    redirect('Pages/Home');
                } 
                else 
                {
                    die('Error in sign up');
                }
        }
    }   

    public function Meetings()
    {
        $MeetingsModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $MeetingsModel->setMeetingPlace(trim($_POST['Meeting_Place']));
            $MeetingsModel->setMeetingDate(trim($_POST['Meeting_Date']));
        }

        if ($MeetingsModel->Meetings())
            {
                //header('location: ' . URLROOT . 'users/login');
                flash('register_success', 'You have registered successfully');
                redirect('Pages/Home');
            } 
            else 
            {
                die('Error in sign up');
            }
    }
    public function Material()
    {
     $MaterialModel = $this->getModel();
     if ($_SERVER['REQUEST_METHOD'] == 'POST') 
     {
        $MaterialModel->setMaterialName(trim($_POST['Material_Name']));
        $MaterialModel->setMaterialQuantity(trim($_POST['Quantity']));

        if ($MaterialModel->Material())
         {
         flash('register_success', 'You have registered successfully');
         redirect('Pages/Home');
        } 
         else 
        {
            die('Error in sign up');
        }
     }
    }

    
























        public function Login()
        {
            $LoginModel = $this->getModel();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') 
            {
                //process form
                $LoginModel->setEmail(trim($_POST['Email']));
                $LoginModel->setPassword(trim($_POST['Password']));
    
                //validate login form
                if (empty($LoginModel->getEmail())) 
                {
                    $LoginModel->setEmailErr('Please enter an email');
                } elseif (!($LoginModel->emailExist($_POST['Email']))) 
                {
                    $LoginModel->setEmailErr('No user found');
                }
    
                if (empty($LoginModel->getPassword())) 
                {

                    $LoginModel->setPasswordErr('Please enter a password');
                } 
                elseif (strlen($LoginModel->getPassword()) < 4) 
                {
                    $LoginModel->setPasswordErr('Password must contain at least 4 characters');
                }
    
              
                if 
                (empty($LoginModel->getEmailErr()) &&empty($LoginModel->getPasswordErr()) )
                {
                    //Check login is correct
                    $loggedUser = $LoginModel->login();
                    if ($loggedUser) 
                    {
                        //create related session variables
                        $this->createUserSession($loggedUser);
                        die('Success log in User');
                    } 
                    
                    else {
                        $LoginModel->setPasswordErr('Password is not correct');
                    }
                     
                }   
             }
             
            
            
        }

                
            

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['Email'] = $user->Email;
        //header('location: ' . URLROOT . 'pages');
        redirect('pages/Home');
    }

    public function logout()
    {
        echo 'logout called';
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }
    
    public function EditProfile()
    {
        $EditProfileModel = $this->getModel();
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $EditProfileModel->setFName(trim($_POST['First_Name']));
            $EditProfileModel->setLName(trim($_POST['Last_Name']));
            $EditProfileModel->setEmail(trim($_POST['Email']));
            $EditProfileModel->setPhoneNo(trim($_POST['Phone_Numebr']));
            redirect('Pages/EditUser');

            if ($EditProfileModel->EditProfile())
            {
                //header('location: ' . URLROOT . 'users/login');
                flash('register_success', 'You have registered successfully');
                redirect('Pages/Home');
            } 
            else 
            {
                die('Error in sign up');
            }

        }
    }

    public function EditMeeting()
    {
        $EditMeetingModel = $this->getModel();
        if($_SERVER['REQUEST_METHOD']=='POST')
        {

            $EditMeetingModel->setMeetingDate($_POST['Meeting_Date']);
            $EditMeetingModel->setMeetingPlace($_POST['Meeting_Place']);
            redirect('Pages/DisplayMeetings');

        }
    }

    public function retrive()
    {
        $this->view->Data = $this->model->retrive();
		$this->view->render('pages/EditUser');
	
    }


        
    
    
    
    
    
    
    





    // public function AddNumber($Number)
    //     {
    //        return $Number;
           
    //     }
        
    
    // public function  deletemember($ID)

    // {
    //     echo("deleted");
    //     $theItem=$this->model('Username')->find ($Username);
    //     if(isset($_POST['action'])){
    //         $theItem.remove();
    //     }
    // }

}

 
    



    


