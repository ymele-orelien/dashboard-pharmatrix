<?php
class AllMedicamentTable
{
    public static function up(PDO $pdo)
    {
        $sql = "
        CREATE TABLE IF NOT EXISTS  all_medicaments(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )ENGINE=innoDB DEFAULT CHARSET=utf8mb4;
        ";
        $pdo->query($sql);
        echo " Tables all medicaments cree avec success.\n";
    }
}
