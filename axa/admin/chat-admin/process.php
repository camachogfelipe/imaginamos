<?php include('../Connections/conn.php'); ?>
<?php include 'tiempoMensaje.php'; ?>
<?php
    $function = $_POST['function'];

    $log = array();

    switch($function) {

        case('getState'):

            //$nickname = htmlentities(strip_tags($_POST['nickname']));
            $nombre = htmlentities(strip_tags($_POST['nickname']));
            $email = htmlentities(strip_tags($_POST['email']));

            $nickname = 1;

            $query = "Select * From chat1 Where login ='$nombre' AND activo = 1";
            $result = mysql_query($query, $conn) or die(mysql_error());
            if(mysql_num_rows($result) > 0){
                $log['state'] = -1;
                break;
            }else{
                $query = 'Select ifnull(MAX(id) + 1, 1) cons From chat1';
                $result = mysql_query($query, $conn) or die(mysql_error());
                if(mysql_num_rows($result) > 0){
                    $row = mysql_fetch_assoc($result);
                    $nickname = $row['cons'];
                }
                $file = $nickname.'_chat.txt';
                $query = "Insert Into chat1 (id, login, archivo, fecha_hora,email) values ($nickname,'$nombre','$file',NOW(),'$email')";
                $result = mysql_query($query, $conn) or die(mysql_error());
                fopen($file, 'w+');
                fopen("admin_".$file, 'w+');
                fopen("user_".$file, 'w+');
                if(file_exists($file)){
                    $lines = file($file);
                }
                $message = htmlentities(strip_tags(utf8_decode("Bienvenido al servicio de asesoría de AXA. En un momento será atendido por un Agente")));
                fwrite(fopen($file, 'a'), "<span class='sistema'>".$message."<span>\n");
                fwrite(fopen("admin_".$file, 'a'), "0");
                fwrite(fopen("user_".$file, 'a'), "0");
                $log['state'] = count($lines);
            }
        break;

        case('update'):
            $state = $_POST['state'];
            //$nickname = $_POST['nickname'];
            $nombre = htmlentities(strip_tags($_POST['nickname']));
            $query = "Select * From chat1 Where login ='$nombre' AND activo = 1";
            $result = mysql_query($query, $conn) or die(mysql_error());
            if(mysql_num_rows($result) > 0){
                $row = mysql_fetch_assoc($result);
                $file = $row['archivo'];
            } else {
                $log['state'] = -1;
                break;
            }

            if(file_exists($file)){
                $lines = file($file);
            }

            $count =  count($lines);
//            if($state == $count){
//                $log['state'] = $state;
//                $log['text'] = false;
//            }
//            else{
            $text= array();
            $log['state'] = $state + count($lines) - $state;
            foreach ($lines as $line_num => $line) {
                //if($line_num >= $state){
                $texto = strtok($line,'~');
                $fecha = strtok('~');
                $fecha = str_replace("\n", "", $fecha);
                $text[] =  $texto = str_replace("\n", "", $texto);
                if(substr_count($texto,"<span class='sistema'>")==0)
                    $text[] =  "<span class='fecha'>Mensaje escrito hace &quot;".restarFecha($fecha,date("Y-m-d H:i:s"))."&quot; aproximadamente.</span>";
                //}
            }
            $log['text'] = $text;
//            }

        break;

        case('mensaje'):
            $state = $_POST['state'];
            //$nickname = $_POST['nickname'];
            $nombre = htmlentities(strip_tags($_POST['nickname']));
            $query = "Select * From chat1 Where login ='$nombre' AND activo = 1";
            $result = mysql_query($query, $conn) or die(mysql_error());
            $file="";
            if(mysql_num_rows($result) > 0){
                $row = mysql_fetch_assoc($result);
                $file = $row['archivo'];
            }

            if(file_exists($file)){
                $lines = file("admin_".$file);
            }
            $respuesta = $lines[0];
            $log['estado'] = $respuesta;

        break;

        case('escribiendo'):
            $state = $_POST['state'];
            //$nickname = $_POST['nickname'];
            $nombre = htmlentities(strip_tags($_POST['nickname']));
            $query = "Select * From chat1 Where login ='$nombre' AND activo = 1";
            $result = mysql_query($query, $conn) or die(mysql_error());
            $file = "";
            if(mysql_num_rows($result) > 0){
                $row = mysql_fetch_assoc($result);
                $file = $row['archivo'];
            }

            fwrite(fopen("user_".$file, 'w'), "1");
        break;

        case('ocultarMensaje'):
            $state = $_POST['state'];
            //$nickname = $_POST['nickname'];
            $nombre = htmlentities(strip_tags($_POST['nickname']));
            $query = "Select * From chat1 Where login ='$nombre' AND activo = 1";
            $result = mysql_query($query, $conn) or die(mysql_error());
            $file="";
            if(mysql_num_rows($result) > 0){
                $row = mysql_fetch_assoc($result);
                $file = $row['archivo'];
            } else {
                $log['state'] = -1;
                break;
            }

            fwrite(fopen("user_".$file, 'w'), "0");
        break;

        case('send'):
            //$nickname = htmlentities(strip_tags($_POST['nickname']));
            $nombre = htmlentities(strip_tags($_POST['nickname']));
            $query = "Select * From chat1 Where login ='$nombre' AND activo = 1";
            $result = mysql_query($query, $conn) or die(mysql_error());
            if(mysql_num_rows($result) > 0){
                $row = mysql_fetch_assoc($result);
                $file = $row['archivo'];
            }

            $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
            $message = htmlentities(strip_tags(utf8_decode($_POST['message'])));
            if(($message) != "\n"){

                if(preg_match($reg_exUrl, $message, $url)) {
                    $message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);
                }

                fwrite(fopen($file, 'a'), "<span class='usuario'>". $nombre . "</span><br/>" . $message = str_replace("\n", " ", $message) . "~" . date("Y-m-d H:i:s") . "\n");
            }
        break;

        case('delete'):
            $nombre = htmlentities(strip_tags($_POST['nickname']));
            $enviar = htmlentities(strip_tags($_POST['enviar']));
            
            $query = "Select * From chat1 Where login ='$nombre' AND activo = 1";
            $result = mysql_query($query, $conn) or die(mysql_error());
            if(mysql_num_rows($result) > 0){
                $row = mysql_fetch_assoc($result);
                $query = "UPDATE chat1 SET activo = 0 WHERE id = ".$row['id'];
                mysql_query($query, $conn);
            }
            $message = htmlentities(strip_tags(utf8_decode("El usuario abandono la conversación.")));
            fwrite(fopen($row['archivo'], 'a'), "<span class='sistema'>".$message."<span>\n");
            $message = htmlentities(strip_tags(utf8_decode("El chat ha finalizado.")));
            fwrite(fopen($row['archivo'], 'a'), "<span class='sistema'>".$message."<span>\n");
            fwrite(fopen("user_".$row['archivo'], 'w'), "0");
            chmod($row['archivo'], 0400);
            if($enviar=='1'){
                include 'chatSend.php';
                enviarCorreo($row['archivo'], $row['email']);
            }
        break;

    }

    echo json_encode($log);

?>