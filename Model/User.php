<?php

class User 
{

    private $pdo; //il relie boite a bd
    public function __construct() //allume auto le fil
    {
        $dbConfig= require __DIR__ . '/../config/db/db.php'; //take info conexion
        $dsn= "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}"; //chaine conexion
        $this->pdo=new PDO($dsn,$dbConfig['username'],$dbConfig['password']); //etablit conexion
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //gere erreur via pdo
    }
    public function all()
    {
        $stmt=$this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($data)
    {
        $stmt=$this->pdo->prepare("INSERT INTO users (uuid,name,surname,email ,password,phone,location,is_active,role)
         VALUES (:uuid,:name,:surname,:email,:password,:phone,:location,:is_active,:role)");
         return $stmt->execute([
            ':uuid' => $data['uuid'] ?? uniqid("",true),
            ':name' => $data['name'],
            ':surname' => $data['surname'],
            ':email' => $data['email'],
            ':password' => password_hash($data['password'], PASSWORD_DEFAULT),
            ':phone' => $data['phone'],
            ':location' => $data['location'],
            ':is_active' => false,
            ':role' => $data['role']]);

    }
}