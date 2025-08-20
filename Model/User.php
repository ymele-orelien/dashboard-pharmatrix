<?php

class User //boite a outils
{

    private $pdo; //il relie boite a bd
    public function __construct() //allume auto le fil
    {
        $dbConfig= require __DIR__ . '/../config/db/db.php'; //take info conexion
        $dsn= "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}"; //chaine conexion
        $this->pdo=new PDO($dsn,$dbConfig['username'],$dbConfig['password']); //etablit conexion
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //gere erreur via pdo
    }
}