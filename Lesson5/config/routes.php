<?php

use app\controllers\HomeController;
use app\controllers\UserController;

/**
 * Настройки маршрутов приложения
 */
return [
    'routes' => [
        //'website/path' => ['ControllerClass', 'actionName'],

        '/' => [HomeController::class, 'page'],
        'home/{name}' => [HomeController::class, 'hello'],
        'user/auth' => [UserController::class, 'auth'],
        'user/home' => [UserController::class, 'home'],
        'user/logout' => [UserController::class, 'logout'],
    ],
];