<?php

class PageController
{
    public function index() {
        // Логика контроллера
        $controllerDate = ['Oleg'];
        include __DIR__ . '/../Views/home.php';
    }

    public function page404() {
        // Логика контроллера
        include __DIR__ . '/../Views/page404.php';
    }
}
