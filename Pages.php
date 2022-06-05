<?php
class Pages extends Controller
{

    public function Home()
    {
        $viewPath = VIEWS_PATH . 'pages/Home.php';
        require_once $viewPath;
        $HomeView = new Home($this->getModel(), $this);
        $HomeView->output();
    }
    
    public function Login()
    {
        $viewPath = VIEWS_PATH . 'Pages/Login.php';
        require_once $viewPath;
        $HomeView = new Login ($this->getModel(), $this);
        $HomeView->output();
    }
    public function AddMember()
    {
        $viewPath = VIEWS_PATH . 'pages/AddMember.php';
        require_once $viewPath;
        $HomeView = new AddMember ($this->getModel(), $this);
        $HomeView->output();
    }
    public function Meetings()
    {
        $viewPath = VIEWS_PATH . 'pages/Meetings.php';
        require_once $viewPath;
        $HomeView = new Meetings ($this->getModel(), $this);
        $HomeView->output();
    }
    public function EditUser()
    {
        $viewPath = VIEWS_PATH . 'pages/EditUser.php';
        require_once $viewPath;
        $HomeView = new EditUser($this->getModel(), $this);
        $HomeView->output();
    }
    public function EditProfile()
    {
        $viewPath = VIEWS_PATH . 'pages/EditProfile.php';
        require_once $viewPath;
        $HomeView = new EditProfile($this->getModel(), $this);
        $HomeView->output();
    }
    public function DisplayMeetings()
    {
        $viewPath = VIEWS_PATH . 'Pages/DisplayMeetings.php';
        require_once $viewPath;
        $HomeView = new DisplayMeetings ($this->getModel(), $this);
        $HomeView->output();
    }
    public function EditMeeting()
    {
        $viewPath = VIEWS_PATH . 'Pages/EditMeeting.php';
        require_once $viewPath;
        $HomeView = new EditMeeting ($this->getModel(), $this);
        $HomeView->output();
    }
    public function Material()
    {
        $viewPath = VIEWS_PATH . 'Pages/Material.php';
        require_once $viewPath;
        $HomeView = new Material ($this->getModel(), $this);
        $HomeView->output();
    }
    public function DisplayMaterial()
    {
        $viewPath = VIEWS_PATH . 'Pages/DisplayMaterial.php';
        require_once $viewPath;
        $HomeView = new DisplayMaterial ($this->getModel(), $this);
        $HomeView->output();
    }
}

