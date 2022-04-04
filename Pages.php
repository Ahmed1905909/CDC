<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/About.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }
    public function Home()
    {
        $viewPath = VIEWS_PATH . 'pages/Home.php';
        require_once $viewPath;
        $HomeView = new Home($this->getModel(), $this);
        $HomeView->output();
    }
   
    public function Login()
    {
        $viewPath = VIEWS_PATH . 'users/Login.php';
        require_once $viewPath;
        $HomeView = new Login ($this->getModel(), $this);
        $HomeView->output();
    }
    public function test()
    {
        $viewPath = VIEWS_PATH . 'pages/test.php';
        require_once $viewPath;
        $HomeView = new test($this->getModel(), $this);
        $HomeView->output();
    }
    public function Achivments()
    {
        $viewPath = VIEWS_PATH . 'pages/Achivments.php';
        require_once $viewPath;
        $HomeView = new Achivments($this->getModel(), $this);
        $HomeView->output();
    }
    public function CashFlow()
    {
        $viewPath = VIEWS_PATH . 'pages/CashFlow.php';
        require_once $viewPath;
        $HomeView = new CashFlow($this->getModel(), $this);
        $HomeView->output();
    }
}   