<?php

class Router {
    public function route() {
        $path = $_SERVER['REQUEST_URI'];

        switch ($path) {
            case '/':
                $homeController = new PageController();
                $homeController->index();
                break;
            case '/ajax':
                $homeController = new AjaxController();
                $homeController->index();
                break;
            // Добавьте другие маршруты по необходимости
            default:
                $homeController = new PageController();
                $homeController->page404();
        }
    }
}
