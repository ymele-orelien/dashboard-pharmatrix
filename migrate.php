<?php
$dbConfig = require __DIR__ . '/config/db/db.php';
$pdo = new PDO(
    "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset",
    $dbConfig['username'],
    $dbConfig["password"]
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );

foreach(glob(__DIR__ .'/database/migration/*php') as $file)
{
    echo "Migration trouve: $file .\n ";
    require_once $file;
    $className= pathinfo($file,PATHINFO_FILENAME);
    if(class_exists($className)){
        $className::up($pdo);
        echo "Migration $className executee .!!.\n";
    }else{
        echo ("class $className non trouvee dans le fichier $file.\n");
    }
}
echo "migration cree avec success !! .\n";