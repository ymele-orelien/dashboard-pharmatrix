<?php
//je specifie les routes qui ne vont utiliser les componenents
$standalone_page = ["login", "404"];

//je recupere mon url et je le manipule
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//je recupere mon tableau associatif
$routes = require "./routes/web.php";
//je specifie que  le path "/" n'ai pas d'espace
$request_uri = rtrim($request_uri, "/") ?: "/";

//je verifie si l'url entree appartient au tableau assocatif
if (array_key_exists($request_uri, $routes)) {
    //je retourne l'url entree
    $page = $routes[$request_uri];
} else {
    //je retourne un 404 si l'url entree n'existe pas

    http_response_code(404);
    $page = "404";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./views/components/head.php" ?>
</head>

<body>

    <?php if (in_array($page, $standalone_page)): ?>
        
        <?php include "./views/pages/{$page}.php" ?>
    <?php else: ?>
        <header>
            <?php include "./views/components/header.php" ?>
        </header>
        <main>
            <aside>
                <?php include "./views/components/aside.php" ?>
            </aside>
            <section class="main-content">


                <?php
                if ($page === '404') {
                    echo '<h2>404 - Page non trouvée</h2>';
                } else {
                    include "views/pages/{$page}.php";
                }
                ?>

            </section>
        </main>
            <?php endif; ?>


        <script src="./public/assets/js/index.js"></script>
</body>

</html>