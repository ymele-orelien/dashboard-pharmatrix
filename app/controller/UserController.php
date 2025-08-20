<?php 
require_once __DIR__ . '/../../Model/User.php';
class UserController

{
    private $userModel;
    public $viewData=[];

    public function __construct()
    {
        $this->userModel=new User();
    }
    protected function view($viewName,$data=[])
    {
        $this->viewData=$data;
        return $viewName;

    }

    public function index()
    {
        $users=$this->userModel->all();
        return $this->view("users/index",compact("users"));
    }
     public function create()
    {
        return "users/create";
    }
    public function store ()
    {
        if ($_SERVER["REQUEST_METHOD"]==="POST")
        {
            $this->userModel->create($_POST);
            header("Location:/users/index");
            exit;

        }
    }




}