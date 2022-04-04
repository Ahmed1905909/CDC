<?php
class Users extends Controller
{
    public function register()
    {
        $AddMemberModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $AddMemberModel->setName(trim($_POST['Username']));
            $AddMemberModel->setEmail(trim($_POST['Email']));
            $AddMemberModel->setPassword(trim($_POST['p4Password']));
            $AddMemberModel->setConfirmPassword(trim($_POST['Confirm_Cassword']));

            //validation
            if (empty($AddMemberModel->getName())) {
                $AddMemberModel->setNameErr('Please enter a name');
            }
            if (empty($AddMemberModel->getEmail())) {
                $AddMemberModel->setEmailErr('Please enter an email');
            } elseif ($AddMemberModel->emailExist($_POST['Email'])) {
                $AddMemberModel->setEmailErr('Email is already registered');
            }
            if (empty($AddMemberModel->getPassword())) {
                $AddMemberModel->setPasswordErr('Please enter a password');
            } elseif (strlen($AddMemberModel->getPassword()) < 4) {
                $AddMemberModel->setPasswordErr('Password must contain at least 4 characters');
            }

            if ($AddMemberModel->getPassword() != $AddMemberModel->getConfirmPassword()) {
                $AddMemberModel->setConfirmPasswordErr('Passwords do not match');
            }

            if (
                empty($AddMemberModel->getNameErr()) &&
                empty($AddMemberModel->getEmailErr()) &&
                empty($AddMemberModel->getPasswordErr()) &&
                empty($AddMemberModel->getConfirmPasswordErr())
            ) {
                //Hash Password
                $AddMemberModel->setPassword(password_hash($AddMemberModel->getPassword(), PASSWORD_DEFAULT));

                if ($AddMemberModel->signup()) {
                    //header('location: ' . URLROOT . 'users/login');
                    flash('register_success', 'You have registered successfully');
                    redirect('users/login');
                } else {
                    die('Error in sign up');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
    }
    public function login()
    {
        $userModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $userModel->setEmail(trim($_POST['Email']));
            $userModel->setPassword(trim($_POST['Password']));

            //validate login form
            if (empty($userModel->getEmail())) {
                $userModel->setEmailErr('Please enter an email');
            } elseif (!($userModel->emailExist($_POST['Email']))) {
                $userModel->setEmailErr('No user found');
            }

            if (empty($userModel->getPassword())) {
                $userModel->setPasswordErr('Please enter a password');
            } elseif (strlen($userModel->getPassword()) < 4) {
                $userModel->setPasswordErr('Password must contain at least 4 characters');
            }

            // If no errors
            if (
                empty($userModel->getEmailErr()) &&
                empty($userModel->getPasswordErr())
            ) {
                //Check login is correct
                $loggedUser = $userModel->login();
                if ($loggedUser) {
                    //create related session variables
                    $this->createUserSession($loggedUser);
                    die('Success log in User');
                } else {
                    $userModel->setPasswordErr('Password is not correct');
                }
            }
        }
        // Load form
        echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/Login.php';
        require_once $viewPath;
        $view = new Login($userModel, $this);
        $view->output();
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name;
        header('location: ' . URLROOT . 'pages');
        redirect('pages');
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
    
        
}