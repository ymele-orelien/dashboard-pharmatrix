<?php

class AllMedicaments
{

    private $pdo;
    public function __construct()
    {
        $dbConfig= require __DIR__ .  '../config/db/db.php';
        $dsn= "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";
        $this->pdo=new PDO($dsn,$dbConfig['username'],$dbConfig['password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }


}