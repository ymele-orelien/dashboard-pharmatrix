<?php
require_once __DIR__ . '/../../Model/User.php';
class UserController

{
    private $userModel;
    public $viewData = [];

    public function __construct()
    {
        $this->userModel = new User();
    }
    protected function view($viewName, $data = [])
    {
        $this->viewData = $data;
        return $viewName;
    }

    public function index()
    {
        $users = $this->userModel->all();
        return $this->view("users/index", compact("users"));
    }
    public function create()
    {
        return "users/create";
    }
    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->userModel->create($_POST);
            header("Location:/users/index");
            exit;
        }
    }
    public function delete()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->userModel->delete($id);
            header("Location:/users/index");
        }
        header("location:/users/index");
    }


    public function edit()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            return "404";
        }
        $user = $this->userModel->find($id);
        return $this->view('users/edit', compact("user"));
    }

    public function update()
    {
        if($_SERVER["REQUEST_METHOD"]==="POST")
        {
            $id=$_POST['id'] ?? null;
            $this->userModel->update($id, $_POST);
            header("Location:/users/index");
            exit;
        }


    }
}
