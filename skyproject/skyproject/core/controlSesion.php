<?php

require_once './DbHandler.db.php';

class ControlSesion{

    public function inicioSesion($id_usuario) {
        $query = "SELECT * FROM control_sesion WHERE id_usuario='$id_usuario'";
        $mResoult = DbHandler::GetRow($query);
        if ($mResoult == 0) {
            $ip = $_SESSION["session_ip"];
            $time = strtotime("now");
            $query = "INSERT INTO control_sesion VALUES ('', '$id_usuario', '$ip', '$time')";
            $result = DbHandler::Execute($query);
        } elseif ($mResoult['ip_usuario'] != $_SERVER['REMOTE_ADDR']) {
            $query = "UPDATE control_sesion SET ip_usuario='" . $_SERVER['REMOTE_ADDR'] . "'";
            $result = DbHandler::Execute($query);
        }
    }

    public function verificaSesion($id_usuario) {
        $query = "SELECT * FROM control_sesion WHERE id_usuario='$id_usuario'";
        $mResoult = DbHandler::GetRow($query);
        if ($mResoult == 0) {
            inicioSesion($id_usuario);
        } elseif ($mResoult['ip_usuario'] != $_SERVER['REMOTE_ADDR']) {
            $query = "UPDATE control_sesion SET ip_usuario='" . $_SERVER['REMOTE_ADDR'] . "'";
            $result = DbHandler::Execute($query);
        }
    }

    public function verificaUsuario($id_usuario) {
        $query = "SELECT * FROM control_sesion WHERE id_usuario='$id_usuario'";
        $mResoult = DbHandler::GetRow($query);
        if($mResoult == 0){
            
        }elseif ($mResoult['ip_usuario'] != $_SERVER['REMOTE_ADDR']) {
            echo $mResoult['ip_usuario'] . ' ' . $_SERVER['REMOTE_ADDR'];exit;
            session_destroy();
            header("Location: index.php?log=1");
        }
    }

}

?>
