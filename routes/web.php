<?php
return [
    "/" => ["DashboardController", "index"],
    "/login" => ["AuthController", "index"],
    "/commandes" => "commandes",
    "/medicaments/index" => ["MedicamentsController","index"],
    "/medicaments/create" => ["MedicamentsController","create"],
    "/medicaments/store" => ["MedicamentsController","store"],
    "/users/index" => ["UserController","index"],
    "/users/create" => ["UserController","create"],
    "/users/store" => ["UserController","store"],
    "/users/delete" => ["UserController","delete"],
    "/users/edit" => ["UserController","edit"],
    "/users/update" => ["UserController","update"],
];
