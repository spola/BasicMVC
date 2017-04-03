<?php

class EjemploModel extends BaseModel {

    function todos() {
        $query = "SELECT col1, col2 FROM ejemplos";
        $params = array();

        $stmt = $this->queryList($query, $params);

        return $stmt->fetchAll();
    }
}