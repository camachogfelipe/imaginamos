<?PHP
	require_once("conexion.php");
	
	class ParametrosMeeting {
		
		
		/*  Banner Principal */
		static function getImgMeeting() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_meeting_contenido;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		 
		
		
		/* Contenido secci�n lo que hacemos */
		static function getProposal() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_proposal_request;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
                
                /*Dibuja Titulo*/
                
                static function getTituloMeeting (){
                    
                    global  $conexion;
                    
                    if(!is_object($conexion)) trigger_error ("Failed to connect to 'database'"
                                              ." | Error = $conexion ",E_USER_ERROR);
                    
                    $sql = "select * from cms_meeting_titulo";
                    $dbRs =$conexion->query($sql);
                    $row = $dbRs->fetchAll();
                    
                    return $row;
                }
                
                // consulta item
                  static function getItemMeeting($id){
                    
                    global  $conexion;
                    
                    if (!is_object($conexion)) trigger_error ("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
                    
                    $sql = "select * from cms_meeting_item where id_meeting_titulo = '$id';";
                    $dbRs = $conexion->query($sql);
                    $row = $dbRs->fetchAll();

                    return $row;
                    
                }
        }
               ?>