<?php

session_start();
require_once 'DbHandler.db.php';

class Validation {

    public static function valida_correo($email) {
        $mail_correcto = 0;
        //compruebo unas cosas primeras
        if ((strlen($email) >= 6) && (substr_count($email, "@") == 1) && (substr($email, 0, 1) != "@") && (substr($email, strlen($email) - 1, 1) != "@")) {
            if ((!strstr($email, "'")) && (!strstr($email, "\"")) && (!strstr($email, "\\")) && (!strstr($email, "\$")) && (!strstr($email, " "))) {
                //miro si tiene caracter .
                if (substr_count($email, ".") >= 1) {
                    //obtengo la terminacion del dominio
                    $term_dom = substr(strrchr($email, '.'), 1);
                    //compruebo que la terminaci?n del dominio sea correcta
                    if (strlen($term_dom) > 1 && strlen($term_dom) < 5 && (!strstr($term_dom, "@"))) {
                        //compruebo que lo de antes del dominio sea correcto
                        $antes_dom = substr($email, 0, strlen($email) - strlen($term_dom) - 1);
                        $caracter_ult = substr($antes_dom, strlen($antes_dom) - 1, 1);
                        if ($caracter_ult != "@" && $caracter_ult != ".") {
                            $mail_correcto = 1;
                        }
                    }
                }
            }
        }
        if ($mail_correcto)
            return true;
        else
            return false;
    }

    public function login($user, $pass) {
        if (empty($user) or empty($pass)) {
            header("Location: index.php?m=1");
        } else {


            $query = "SELECT login_Usuario, pass_Usuario, id_Usuario, id_Perfil" .
                    " FROM usuarios WHERE login_Usuario = '" . mysql_real_escape_string($user) . "' and pass_Usuario = '" . mysql_real_escape_string(md5($pass)) . "'";

            $mResoult = DbHandler::GetRow($query);
            
            if ($mResoult == 0) {
                
                header("Location: index.php?m=2");
            } else {

                $_SESSION["session_user"] = $mResoult['id_Usuario'];
                $_SESSION["session_perfil"] = $mResoult['id_Perfil'];
                header("Location: home.php?seccion=1");
                
            }
        }
    }
    public function GetName($User){
        $query = "SELECT nombre_Usuario, id_Perfil, id_Tienda from usuarios WHERE id_Usuario=".$User;
        $mResoult = DbHandler::GetRow($query);
        return $mResoult;
                   
    }

}

?>