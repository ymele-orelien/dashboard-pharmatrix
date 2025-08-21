<?php

class AllMedicaments
{

    private $pdo;
    public function __construct()
    {
        $dbConfig= require __DIR__ .  '/../config/db/db.php';
        $dsn= "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";
        $this->pdo=new PDO($dsn,$dbConfig['username'],$dbConfig['password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

   public function all_medicaments()
    {
        $stmt=$this->pdo->query("SELECT * FROM all_medicaments");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($data)
    {
        $stmt=$this->pdo->prepare("INSERT INTO all_medicaments (name,description)
         VALUES (:name,:description)");
         return $stmt->execute([
            
            ':name' => $data['name'],
            ':description' => $data['description']
            ]);


    }
    
}


// page d'accueil: inscription; connexion
// dashboard
// page de statistiques