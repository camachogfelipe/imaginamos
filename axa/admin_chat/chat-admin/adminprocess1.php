<?php include('../Connections/conn.php'); ?>
<?php include 'tiempoMensaje.php'; ?>

<?php

    $function = $_REQUEST['function'];
	
    $log = array();
	
    switch($function) {
    
    	 case('getState'):
		 
		 	 //$nickname = htmlentities(strip_tags($_POST['nickname']));
			 $file = htmlentities(strip_tags($_POST['file']));
			 $nombre = 'Admin';
			 
			 if(file_exists($file)){
				$lines = file($file);
		   	 }
			
			 $log['state'] = count($lines); 
        	 break;	

         case('mensaje'):
            $file = htmlentities(strip_tags($_POST['file']));
            $lines = file("user_".$file);
            $respuesta = $lines[0];
            $log['estado'] = $respuesta;

        break;

        case('escribiendo'):
            $file = htmlentities(strip_tags($_POST['file']));

            fwrite(fopen("admin_".$file, 'w'), "1");
        break;

        case('ocultarMensaje'):
            $file = htmlentities(strip_tags($_POST['file']));

            fwrite(fopen("admin_".$file, 'w'), "0");
        break;

    	 case('update'):
        	$state = $_POST['state'];
			$file = $_POST['file'];
						
			if(file_exists($file)){
        	   $lines = file($file);
        	 }
			 
        	 $count =  count($lines);
        	 if($state == $count){
                     $log['state'] = $state;
                     $log['text'] = false;

                 }
                 else{
                    $text= array();
                    $log['state'] = $state + count($lines) - $state;
                    foreach ($lines as $line_num => $line){
                        $texto = strtok($line,'~');
                        $fecha = strtok('~');
                        $fecha = str_replace("\n", "", $fecha);
                        $text[] =  $line = str_replace("\n", "", $texto);
                        if(substr_count($texto,"<span class='sistema'>")==0)
                            $text[] =  "<span class='fecha'>Mensaje escrito hace &quot;".restarFecha($fecha,date("Y-m-d H:i:s"))."&quot; aproximadamente.</span>";
                    }
                    $log['text'] = $text;
                 }
        	  
             break;
    	 
    	 case('send'):
		  $file = $_POST['file'];
                  /*$query = "Select u.nombre as unombre From chat c,area_chat ac,usuario u Where u.id=ac.moderador AND ac.id=c.idArea AND c.archivo ='$file' AND c.activo = 1";
                  $result = mysql_query($query, $conn) or die(mysql_error());
                  $row = mysql_fetch_assoc($result);
		  $nombre = $row['unombre'];*/
		  $nombre = 'Agente';
		  
		  $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
		  $message = htmlentities(strip_tags(utf8_decode($_POST['message'])));
		 if(($message) != "\n"){
        	
			 if(preg_match($reg_exUrl, $message, $url)) {
       			$message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);
				} 
			 
        	
        	 //fwrite(fopen($nickname.'_chat.txt', 'a'), "<span>". $nickname . "</span>" . $message = str_replace("\n", " ", $message) . "\n"); 
			 fwrite(fopen($file, 'a'), "<span class='admin'>". $nombre . "</span><br/>" . $message = str_replace("\n", " ", $message) . "~" . date("Y-m-d H:i:s") .  "\n");
                         $lines = file($file);
                         $query = "UPDATE chat1 SET estado = ".count($lines)." Where archivo='".$file."'";
                         mysql_query($query, $conn);
		 }
		 
		 break;
        case('delete'):
            $nombre = htmlentities(strip_tags($_REQUEST['nickname']));
            //$cat = htmlentities(strip_tags($_POST['categ']));
            
            $query = "Select * From chat1 Where login ='$nombre' AND activo = 1";
            $result = mysql_query($query, $conn) or die(mysql_error());
            if(mysql_num_rows($result) > 0){
                $row = mysql_fetch_assoc($result);
                $query = "UPDATE chat1 SET activo = 0 WHERE id = ".$row['id'];
                mysql_query($query, $conn);
                $message = htmlentities(strip_tags(utf8_decode("El administrador termino la conversación.")));
                fwrite(fopen($row['archivo'], 'a'), "<span class='sistema'>".$message."<span>\n");
                $message = htmlentities(strip_tags(utf8_decode("El chat ha finalizado.")));
                fwrite(fopen($row['archivo'], 'a'), "<span class='sistema'>".$message."<span>\n");
            }
        break;

        case('users'):
            //$cat = htmlentities(strip_tags($_POST['categ']));
            $query = "Select * From chat1 Where activo = 1";
            $result = mysql_query($query, $conn) or die(mysql_error());
            
            if(mysql_num_rows($result) > 0){
                echo "<ul>";
                
                while($row_query = mysql_fetch_assoc($result)){
                    $lines = file($row_query['archivo']);
                    $imagen = "";
                    if((count($lines)-$row_query['estado'])==count($lines)){
                        $imagen = "<img src='warning.png' valign='middle'/>";
                    }
					?>
                     <li>
                                <?php $imagen ?>
                                <a href='Adminindex.php?a=<?php echo $row_query['archivo']?>' >
                                        <?php echo utf8_decode($row_query['login']) . " (".(count($lines)-$row_query['estado']).")" ?>
                                </a>
                                <img src='images/Delete-32.png' width='12' title='Eliminar' alt='Eliminar' style='cursor: pointer;' onclick='chat.deleteChat("<?php  echo $row_query['login'] ?>")'/>
                     </li>
                    <?php
                }
                echo "</ul>";
            } else {
                echo "<b>No hay usuarios conectados</b>";
            }
        break;
    	
    }
    
    echo json_encode($log);

?>