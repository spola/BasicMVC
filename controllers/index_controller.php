<?php

class IndexController extends BaseController {

    function get() {
        $params = array(
            "titulo" => "Mi propio título",
            "contenido" => "Este es el contenido"
        );
        $this->render("index_get", $params);
    }
}