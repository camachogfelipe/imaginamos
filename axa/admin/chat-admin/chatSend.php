<?php
    function enviarCorreo($archivo,$email){
        include '../php/functions/mail.php';
        include '../php/functions/text2HTML.php';

        $body = "<h3>Chat Digiware</h3>\n\n";
        $lines = file($archivo);
        foreach ($lines as $line_num => $line){
            $texto = strtok($line,'~');
            $fecha = strtok('~');
            $fecha = str_replace("\n", "", $fecha);
            $texto = str_replace("<span>", "<b>&nbsp;", $texto);
            $texto = str_replace("</span>", "</b>:&nbsp;", $texto);
            $body .= str_replace("\n", "", $texto);
            if($fecha!="")
                $body .= "<br/><i>Mensaje escrito hace &quot;".restarFecha($fecha,date("Y-m-d H:i:s"))."</i>";
            $body .= "<br/><br/>";
        }
        
        $mail2 = new sendCMail($email, "info@digiware.net", "Digiware - Conversación Via Web", $body, "text/html");
        $mail2->sendMail();
    }
?>