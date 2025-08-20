<?php
return [
    "/" => ["DashboardController", "index"],
    "/login" => ["AuthController", "index"],
    "/commandes" => "commandes",
    "/medicaments/index" => ["MedicamentsController","index"],
    "/users/index" => ["UserController","index"],
    "/users/create" => ["UserController","create"],
    "/users/store" => ["UserController","store"],
];
