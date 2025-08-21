<?php
require_once __DIR__ . '/../../Model/AllMedicaments.php';

class MedicamentsController {
    private $medicamentModel;
    public $viewData = [];

    public function __construct()
    {
        
        $this->medicamentModel = new AllMedicaments();
    }
  
    protected function view($viewName, $data = [])
    {
        $this->viewData = $data;

        return $viewName;
    }

    public function index()

    {
        $all_medicaments = $this->medicamentModel->all_medicaments();
        return $this->view("medicament/index", compact("all_medicaments"));
    }

     public function create()

    {
        return "medicament/create";
    }

    public function store ()

    {
        if ($_SERVER["REQUEST_METHOD"]==="POST")

        {
            $this->medicamentModel->create($_POST);
            header("Location:/medicaments/index");
            exit;

        }
        
    }
}
