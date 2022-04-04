<?php
class Admin extends Controller

{
    public function AddMember()
    {
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
            $AddMemberModel->setConfirmPassword(trim($_POST['confirm_password']));
            $AddMemberModel->setPhoneNumber(trim($_POST['Phone_Number']));
            

            //validation

            if (empty($AddMemberModel->getUserName())) 
            {
                $AddMemberModel->setUserNameErr('Please enter username'); 
            }

            if (empty($AddMemberModel->getFName()))
             {
                $AddMemberModel->setFNameErr('Please enter first name');
             }    if (($AddMemberModel->getFName()) !=preg_match("/^[a-zA-Z-' ]*$/",'FName')) {
                $AddMemberModel->setFNameErr('First name must contaon letters only'); 
             
            
        }
            if (empty($AddMemberModel->getLName())) 
            {
                $AddMemberModel->setLNameErr('Please enter Last name'); 
            }   if (($AddMemberModel->getLName()) !=preg_match("/^[a-zA-Z-' ]*$/",'LName')) 
            {
                $AddMemberModel->setLNameErr('Last name must contaon letters only'); 
            } 
            if (empty($AddMemberModel->getYear())) 
            {
                $AddMemberModel->setYearErr('Please enter the academic year'); 
            }
            if (empty($AddMemberModel->getCommittee())) 
            {
                $AddMemberModel->setCommitteErr('Please enter The Committe');
            }

            if (empty($AddMemberModel->getDate())) 
            {
                    $AddMemberModel->setDateErr('Please enter birth date');
            }        
            if (empty($AddMemberModel->getGender())) 
            {
                        $AddMemberModel->setGenderErr('Please enter Gender');
            }

            if (empty($AddMemberModel->getEmail())) 
            {
                $AddMemberModel->setEmailErr('Please enter an email');

            }
             elseif ($AddMemberModel->getEmailErr($_POST['Email'])) 
            {
                (!filter_var(FILTER_VALIDATE_EMAIL));
                $AddMemberModel->setEmailErr('Please write in the Email form'); 
            }    
                if($AddMemberModel->emailExist($_POST['Email'])) 
                {
                    $AddMemberModel->setEmailErr('Email is already registered');
                }

            
            if (empty($AddMemberModel->getPassword())) 
            {
                $AddMemberModel->setPasswordErr('Please enter a password');
            } elseif (strlen($AddMemberModel->getPassword()) < 4) 
            {
                $AddMemberModel->setPasswordErr('Password must contain at least 4 characters');
            }

            if ($AddMemberModel->getPassword() != $AddMemberModel->getConfirmPassword()) 
            {
                $AddMemberModel->setConfirmPasswordErr('Passwords do not match');
            }
            if (empty($AddMemberModel->getPhoneNumber())) 
            {
                $AddMemberModel->setPhoneNumberErr('Please enter Phone Number');
            }
            if (
                empty($AddMemberModel->getUserNameErr()) &&
                empty($AddMemberModel->getFNameErr()) &&
                empty($AddMemberModel->getLNameErr())&&
                empty($AddMemberModel->getYearErr())&&
                empty($AddMemberModel->getCommiteeErr())&&
                empty($AddMemberModel->getDateErr())&&
                empty($AddMemberModel->getGenderErr())&&
                empty($AddMemberModel->getEmailErr()) &&
                empty($AddMemberModel->getPasswordErr()) &&
                empty($AddMemberModel->getConfirmPasswordErr()
                 )
            ) {
                //Hash Password
                $AddMemberModel->setPassword(password_hash($AddMemberModel->getPassword(), PASSWORD_DEFAULT));

                if ($AddMemberModel->signup()) {
                    //header('location: ' . URLROOT . 'users/login');
                    flash('register_success', 'You have registered successfully');
                    redirect('pages/sigin');
                } else {
                    die('Error in sign up');
                }
            }
        }
        // Load form
        echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/AddMember';
        require_once $viewPath;
        $view = new $AddMember($this->getModel(), $this);
        $view->output();
    }

    public function AddMember()
    {
        $viewPath = VIEWS_PATH . 'pages/AddMember.php';
        require_once $viewPath;
        $HomeView = new AddMember($this->getModel(), $this);
        $HomeView->output();
    }   
                  
}        