<?php
require __DIR__ . '/../Models/FirstModel.php';

class AjaxController {
    public function index() {
        // Логика контроллера
        sleep(3);
        $model = new FirstModel();
        $data = $model->message();

        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
