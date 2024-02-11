<?php
/*
    Служит только для подключения необходимых файлов и роутинга
*/

// Подключение файлов
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/Router.php';
require_once __DIR__ . '/Controllers/PageController.php';
require_once __DIR__ . '/Controllers/AjaxController.php';

// Маршрутизация
$router = new Router();
$router->route();
