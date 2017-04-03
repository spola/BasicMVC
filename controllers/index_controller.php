<?php

class IndexController extends BaseController {

    function get() {
        require("models/ejemplo_model.php");
        $model = new EjemploModel();
        $todos = $model->todos();

        $params = array(
            "titulo" => "Mi propio título",
            "contenido" => "Este es el contenido",
            "data" => $todos
        );
        $this->render("index_get", $params);
    }
}