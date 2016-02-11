<?php

require_once './core/DbHandler.db.php';

class Datos extends DbHandler {

    public function GetTiendas() {
        $query = "SELECT * FROM tiendas";
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

}

?>
