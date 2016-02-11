<?php

/**
 * @author rigobcastro
 */
class _Notifications extends Back_Controller {

    protected $admin_area = true;

    public function __construct() {
        parent::__construct();
        
        $this->load->model('_users/users_project');
    }

    // ----------------------------------------------------------------------
    
    public function detail($id) {
        $this->load->model('_users/users_song', '_users/users_project');
        
        $datos = new Notification($id);
        
        $a = clone $datos;
        
        $this->_data['aceptadas'] = $a->soundcloud_song->where('accepted', true)->get_by_related_notification($datos);
        
         $this->set_datos($datos);
        return $this->build("detail");
    }

    // ----------------------------------------------------------------------
    
    public function type($var = null) {
        $datos = new Notification();
        $datos->get_by_related_notifications_type('var', $var);

        $this->set_datos($datos);

        return $this->build("{$var}/body");
    }

    // ----------------------------------------------------------------------

    public function guardar($var, $project_code = null) {
        $datos = new Users_project;
        $datos->get_by_code($project_code);
        
		if($var == "buscas"){
			$this->_data['save_action'] = cms_url("notifications/save/{$var}/{$project_code}");
        }else{
			$this->_data['save_action'] = cms_url("notifications/save2/{$var}/{$project_code}");
		}
        return $this->set_datos($datos)->build("{$var}/guardar");
    }

	// ----------------------------------------------------------------------
	
	public function save($var = null, $project_code = null) {
        $project = new Users_project;
        $project->get_by_code($project_code);

        $datos = new Notification;
        $type = new Notifications_type;
        
        
        $type->get_by_var($var);

        $datos->from_array($this->_post(null));

        $datos->code = md5($this->_post('name'));

        $ok = $datos->save($type);

        if (!$ok) {
            $this->set_message($datos->errors->string);
        } else {
            
            $datos->save_users_project($project);
            
            if ($this->_post('url')) {

                $soundcloud = new Soundcloud_song;

                foreach ($this->_post('url') as $url) {
                    if (!empty($url)) {
                        $soundcloud->url = $url;
                        $soundcloud->save_notification($datos);
						$soundcloud->clear();
                    }
                }
            }

            $this->_data['continue_url'] = cms_url('users/projects/detail/' . $project->id);
        }

        return $this->render_json($ok);
    }
	
	
	
	
    // ----------------------------------------------------------------------

    public function save2($var = null, $project_code = null) {
        $project = new Users_project;
        $project->get_by_code($project_code);

        $datos = new Notification;
        $type = new Notifications_type;
        
        
        $type->get_by_var($var);

        $datos->from_array($this->_post(null));

        $datos->code = md5($this->_post('name'));

        $ok = $datos->save($type);

        if (!$ok) {
            $this->set_message($datos->errors->string);
        } else {
            
            $datos->save_users_project($project);
            
			
			$idproject = $project->id;
			$iduser = $project->user_id;
			//$nombre = $project->name;
			$codeproject = $project->code;
			$codeNot = "d41d8cd98f00b204e9800998ecf8427e";
			//$precio = $project->price;
			$ref = $project->reference;
			//$descrip = $project->description;
			$creacion = date('Y-m-d h:i:s');
			
			
			
            /*
			$host = "localhost";
			$db = "usuarioric_musicall";
			$usuario = "usuarioric";
			$password = "gMPAi37GTk)o";
			*/
			$host = "articore1.ipowermysql.com";
			$db = "musicall";
			$usuario = "musicall";
			$password = "Musicall26032013";

		
			
			$conexion = new PDO("mysql:host=$host; dbname=$db", $usuario, $password);
			
			
			$sql55 = "select * from cms_users_projects_notifications where users_project_id = '".$idproject."';"; 			
			$dbRS55 = $conexion->query($sql55); 
			$row55 = $dbRS55->fetchAll();
			
			$vini = 0;
			$mayor = 0;
			if(is_array($row55) && !empty($row55)) {
				for($m = 0; $m < sizeof($row55); $m++) {
					$numBD = $row55[$m]['notification_id'];
					
					if($vini < $numBD){
						$mayor = $numBD;
						$vini = $mayor; 
					}
				}
			}
			
			$sql56 = "select * from cms_notifications where id = '".$mayor."';"; 			
			$dbRS56 = $conexion->query($sql56); 
			$row56 = $dbRS56->fetchAll();
			if(is_array($row56) && !empty($row56)) {
				for($n = 0; $n < sizeof($row56); $n++) {
					$nombre = $row56[$n]['project_name'];
					$precio = $row56[$n]['budget'];
					$descrip = $row56[$n]['description'];
					
					
				}
			}
			
			
			
			
			
			$sql = "select * from cms_users where id != '".$iduser."';"; 
			//$sql = "select * from cms_users where id != '91';"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			
			
			if(is_array($row) && !empty($row)) {
				for($i = 0; $i < sizeof($row); $i++) {
					
					
					$idnuser = $row[$i]['id'];					
					$idcnot = "";
					$tipo = "1";																				
					$activo = "0";
					
					
					$result = $conexion->exec("INSERT INTO `cms_notifications` (`id`, `notifications_type_id`, `project_name`, `code`, `budget`, `description`, `active`, `created_on`) VALUES('".$idcnot."', '1', '".$nombre."', 'd41d8cd98f00b204e9800998ecf8427e', '".$precio."', '".$descrip."', '0', '".$creacion."')");
					$insertId = $conexion->lastInsertId();
					
					$result2 = $conexion->exec("INSERT INTO `cms_notifications_mass`(`user_id`, `notifications_id`, `code`) VALUES('".$idnuser."', '".$insertId."', '".$codeproject."')");
					
					
				
				}
			}
			
			
			
			
			
			
			
			if ($this->_post('url')) {

                $soundcloud = new Soundcloud_song;

                foreach ($this->_post('url') as $url) {
                    if (!empty($url)) {
                        $soundcloud->url = $url;
                        $soundcloud->save_notification($datos);
						$soundcloud->clear();
                    }
                }
            }

			

			
			
		
            $this->_data['continue_url'] = cms_url('users/projects/detail/' . $project->id);
			
			
			
			
        }

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
}