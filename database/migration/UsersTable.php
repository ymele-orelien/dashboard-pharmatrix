<?php

class UsersTable 
{
    public static function up(PDO $pdo)
    {
        $sql = "
        CREATE TABLE IF NOT EXISTS users (
          id INT AUTO_INCREMENT PRIMARY KEY,
          uuid VARCHAR(36) NOT NULL UNIQUE,
          name VARCHAR(255) NOT NULL,
          surname  VARCHAR(255) NOT NULL,
          email VARCHAR(255) UNIQUE NOT NULL,
          password VARCHAR(255) NOT NULL,
          phone VARCHAR(20),
          location VARCHAR(255),
          is_active BOOLEAN DEFAULT FALSE,
          role ENUM('admin', 'user', 'pharmacy') DEFAULT 'user',
          created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
          updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)
          ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    $pdo->exec($sql);
    echo "Table users créée avec succes.\n ";
    }
}