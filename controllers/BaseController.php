<?php

class BaseController {

    public function get() {
        header("HTTP/1.0 405 Method Not Allowed");
        exit();
    }

    public function post() {
        header("HTTP/1.0 405 Method Not Allowed");
        exit();
    }

    public function put() {
        header("HTTP/1.0 405 Method Not Allowed");
        exit();
    }

    public function delete() {
        header("HTTP/1.0 405 Method Not Allowed");
        exit();
    }

    protected function render($view, $params = array()) {
        extract($params);
        require("views/" . $view . "_view.php");
    }
}