<?php
//je specifie les routes qui ne vont utiliser les componenents
$standalone_page = ["login", "404"];

//je recupere mon url et je le manipule
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//je recupere mon tableau associatif
$routes = require "./routes/web.php";
//je specifie que  le path "/" n'ai pas d'espace
$request_uri = rtrim($request_uri, "/") ?: "/";


$route = $routes[$request_uri] ?? "404";

if ($route == "404") {
    http_response_code(404);
    $page = "404";
} elseif (is_array($route)) {
    $controllerName = $route[0];
    $method = $route[1];
    spl_autoload_register(function ($class) {
        $file = "app/controller/$class.php";
        if (file_exists($file)) {
            require $file;
        }
    });
    $controller = new $controllerName();
    $page = $controller->$method();
    if (property_exists($controller, 'viewData') && !empty($controller->viewData)) {
        extract($controller->viewData);
    }
} else {
    $page = $route;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>