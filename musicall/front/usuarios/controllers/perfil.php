<?php

/**
 * Perfil - Usuario 
 *
 * MÃ³dulo de perfil del usuario
 * 
 * @author rigobcastro
 */
class Perfil extends Front_Controller {

    public function __construct() {
        parent::__construct();

        ini_set('post_max_size', 100000);
        ini_set('upload_max_filesize', 100000);
    }

    // ----------------------------------------------------------------------

    public function load_profile() {
        $datos = new \User;
        $datos->get_current();

        echo json_encode(array(
            'username' => $datos->full_name,
            'image' => (!empty($datos->image) ? uploads_url($datos->image) : null)
        ));
    }

    // ----------------------------------------------------------------------

    public function check_notifications_tienes() {
        $notificaciones_count = 0;

        if ($this->is_usuario()) {

            $datos = new \User;
            $datos->get_current();


            $notifications = new Notification;

            $ur = clone $notifications;

            /* Modificado el 13/03/2013 */
			//$ur->distinct()->select('user_id')->where_related($datos)->where_related_notifications_type('var', 'tienes');
			//$ur->distinct()->select('id')->where_related($datos)->where_related_users_project('user_id', $datos->id)->where_related_notifications_type('var', 'tienes');
			$ur->distinct()->select('id')->where_related($datos)->where_related_users_project('user_id', $datos->id)->where_related_notifications_type('var', 'tienes');
						
			/* Modificado el 13/03/2013 */
            //$notifications->where_related_notifications_type('var', 'tienes')->where('active', false);
			/*
			$notifications->select('notifications.id')
                    ->where_related_users_project('user_id', $datos->id)->where_related_notifications_type('var', 'tienes')->where('active', false);
			*/
			
			$notifications->select('notifications.*')
                    ->get_by_related_users_project('user_id', $datos->id)->get_by_related_notifications_type('var', 'tienes')->where('active', false);
				
					
					
            /* Modificado el 13/03/2013 */
			//$notificaciones_count = $notifications->count();
			$notificaciones_count = $notifications->count() - $ur->count();
        }

        echo json_encode(array(
            'notificaciones_count' => (int) $notificaciones_count
        ));
    }

    // ----------------------------------------------------------------------

    public function check_notifications_buscas() {
        $notificaciones_count = 0;

        if ($this->is_usuario()) {

            $datos = new \User;
            $datos->get_current();

            $notifications = new Notification;

            $ur = clone $notifications;

			/* Lo comente el 12 de febrero del 2013 */
            //$ur->distinct()->select('id')->where_related($datos)->where_related_users_project('user_id', $datos->id);
			/* Lo agregé el 12 de febrero del 2013  */  
			//$ur->distinct()->select('user_id')->where_related($datos)->where_related_notifications_type('var', 'buscas');	
			/* Lo agregé el 13 de marzo del 2013 */
			$ur->distinct()->select('id')->where_related($datos)->where_related_users_project('user_id', $datos->id)->where_related_notifications_type('var', 'buscas');


		 
            
            /* Lo comente el 12 de febrero del 2013
            $notifications->select('notifications.id')
                    ->where_related_users_project('user_id', $datos->id);
			*/
			/* Lo agregé el 12 de febrero del 2013  */ 
			//$notifications->where_related_notifications_type('var', 'buscas')->where('active', false);		
			/* Lo agregé el 13 de marzo del 2013 */
			
			//Modificado el día 27 de marzo del 2013
			/*
			$notifications->select('notifications.id')
                    ->where_related_users_project('user_id', $datos->id)->where('active', false);
			*/
		
		/*
			$notifications->select('notifications.id')
                    ->where_related_users_project('user_id', $datos->id)->where_related_notifications_type('var', 'buscas')->where('active', false);
		*/	
			
			$notifications->select('notifications.*')
                    ->get_by_related_users_project('user_id', $datos->id)->get_by_related_notifications_type('var', 'buscas')->where('active', false);
			
//            echo $notifications->get_sql();
//            exit;
			
			/* Lo comente el 12 de febrero del 2013
            $notificaciones_count = $notifications->count() - $ur->count();
			*/
			
			/* Lo agregé el 12 de febrero del 2013  */ 
			//$notificaciones_count = $notifications->count();
			/* Lo agregé el 13 de marzo del 2013 */
			$notificaciones_count = $notifications->count() - $ur->count();
        }

        echo json_encode(array(
            'notificaciones_count' => (int) $notificaciones_count
        ));
    }

    // ----------------------------------------------------------------------

    public function load_notifications_tienes() {
        $datos = new \User;
        $datos->get_current();

        $notifications = new Notification;

        //$notifications->get_by_related_notifications_type('var', 'tienes');
		/* Lo agregé el 13 de marzo del 2013 */
		/*
		$notifications->select('notifications.*')
                    ->get_by_related_users_project('user_id', $datos->id)->where('active', false)->where('notifications_type_id', '1');
		*/
		$notifications->select('notifications.*')
                    ->get_by_related_users_project('user_id', $datos->id)->get_by_related_notifications_type('var', 'tienes')->where('active', false);

					
        $notificaciones_tienes = parent::view('perfil/popup_notificaciones_tienes', true, array(
                    'datos' => $notifications
                ));

        echo json_encode(array(
            'tienes' => $notificaciones_tienes
        ));
    }

    // ----------------------------------------------------------------------



    public function load_notifications_buscas() {
        $datos = new \User;
        $datos->get_current();

        $notifications = new Notification;
  
		/*	Lo comente el 12 de febrero del 2013
        $notifications->select('notifications.*')
                ->get_by_related_users_project('user_id', $datos->id);
		*/
		/* Lo agregé el 12 de febrero del 2013  */ 
		//$notifications->get_by_related_notifications_type('var', 'buscas');
		/* Lo agregé el 13 de marzo del 2013 */
		
		/* Modificado el 27 de abril del 2013 */
		/*
		$notifications->select('notifications.*')
                    ->get_by_related_users_project('user_id', $datos->id)->get_by_related_notifications_type('var', 'buscas')->where('active', false);
			
		*/
		$notifications->select('notifications.*')
                    ->get_by_related_users_project('user_id', $datos->id)->get_by_related_notifications_type('var', 'buscas')->where('active', false);
		
		
		
		$notificaciones_content = parent::view('perfil/popup_notificaciones_buscas', true, array(
                    'datos' => $notifications
                ));

        echo json_encode(array(
            'buscas' => $notificaciones_content
        ));
    }

    // ----------------------------------------------------------------------

    public function load_notification_detail($id) {
        if (!$this->is_usuario()) {
            return show_404();
        }

        $this->load->model(array('_notifications/soundcloud_song'));

        $notifications = new Notification($id);

        $this->set_datos($notifications);

        echo parent::view('perfil/popup_detalle_notificacion_buscas');
    }

    // ----------------------------------------------------------------------

    public function toggle_read_notification($id) {

        if (!$this->is_usuario()) {
            return show_404();
        }

        $datos = new User;
        $notifications = new Notification();

        $datos->get_current();
        $notifications->where('id', $id)->get_by_related_user($datos);
		
		$active=false;
		if(!$notifications->where('id', $id)->active)
			$active=true;
		
		
		$notifications->where('id', $id)->update('active',$active);
        /*if ($notifications->exists()) {
            $ok = $notifications->delete_user($datos);
        } else {
            $notifications->get_by_id($id);
            $ok = $notifications->save_user($datos);
        }
*/

        echo (bool) $ok;
    }

    // ----------------------------------------------------------------------

    public function load_edit_info() {
        $datos = new \User;

        $datos->get_current();

        return parent::view('perfil/edit_info_dialog', false, array('datos' => $datos));
    }

    // ----------------------------------------------------------------------

    public function load_edit_info_quieres() {
        $datos = new \User;

        $datos->get_current();

        return parent::view('perfil/edit_info_dialog_quieres', false, array('datos' => $datos));
    }

    // ----------------------------------------------------------------------

    public function upload_song() {

        $datos = new User;

        $datos->get_current();

        if ($datos->exists()) {

            $users_song = new Users_song;

            $users_song->from_array($this->_post(null));

            $users_song->code = random_string('md5', 6);
			
			//var_dump($users_song->gender);exit;
			
			/*
            if (!$this->_post('gender')) {
                 $users_song->gender = $this->_post('gender_another');
            } 
            */
			
			$unir = "";
			
			if ($this->_post('gender')) {
                
                foreach ($this->_post('gender') as $gende) {
                    if (!empty($gende)) {
                        
						//$users_song->name = $gende;
						if($gende == "Otros"){
							$otro = $this->_post('gender_another');
							$unir.= $otro.", ";
							
						}else{
							$unir.= $gende.", ";
						}
						
					}
                }
            }
			
			$users_song->gender = $unir;
			
			//var_dump($unir);exit;
			
			
			$ok = $users_song->save($datos);

            if (!$ok) {
                $message_upload = ($users_song->errors->string);
                $message_upload_type = 'error';
            } else {

                // Si se sube una imagen, ejecutar el upload
                // Si no, lanzar el mensaje de success
                if (!empty($_FILES['fileUpload']['name'])) {

                    $path = UPLOADSFOLDER . 'songs';

                    if (!is_dir($path)) {
                        @mkdir($path);
                        @chmod($path, 0777);
                    }

                    $config['upload_path'] = $path;
                    $config['allowed_types'] = 'mp3|m4u|wma|mpeg';
                    $config['encrypt_name'] = true;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('fileUpload')) {
                        $message_upload = ('Al guardar la canción, surgieron los siguientes errores: ' . $this->upload->display_errors());
                        $message_upload_type = 'error';
                    } else {

                        // Limpiando el path del logo para guardarlo
                        $song_data = $this->upload->data();
                        $path = str_replace(UPLOADSFOLDER, '', $song_data['full_path']);

                        if ($users_song->where('id', $users_song->id)->update('filepath', $path)) {
                            $message_upload = ('Canción subida correctamente.');
                            $message_upload_type = 'success';

                            if ($this->_post('uses')) {
                                $songs_uses = new \Users_songs_use;
                                foreach ($this->_post('uses') as $use) {
                                    if (!empty($use)) {
                                        
										if($use == "Todos los usos"){
											$songs_uses->name = $use;
											$songs_uses->save_as_new($users_song);
											break;
										}else{
										
											if($use == "Otros"){
												$otro = $this->_post('use_another');
												$songs_uses->name = $otro;
												$songs_uses->save_as_new($users_song);
												
											}else{
												$songs_uses->name = $use;
												$songs_uses->save_as_new($users_song);
											}
										
										}
																			
                                    }
                                }
                            }


                            // Postulando automaticamente la cancion
                            if ($this->_post('project_code')) {
                                $project = new Users_project;
                                $project->get_by_code($this->_post('project_code'));
                                if ($project->exists()) {
                                    $users_song->save_users_project($project);
                                }
                            }
                        } else {
                            $message_upload = ($datos->errors->string);
                            $message_upload_type = 'error';
                        }
                    }
                }
            }
        }

        $this->session->set_flashdata('message_upload', $message_upload);
        $this->session->set_flashdata('message_upload_type', $message_upload_type);


        return redirect('/?uploaded_song=true&content=tienes', 'refresh');
    }

    // ----------------------------------------------------------------------

    public function upload_project() {
        $datos = new \Users_project;
        $user = new User;
        $user->get_current();
      
        $ok = false;
        
        $genders = $this->_post('genders');

        if (empty($genders)) {
            $this->set_message('Selecciona al menos un género');
            $this->_data['messages_type'] = 'error';

            goto finished;
        } else {
            $validate = 0;
            foreach ($genders as $gender) {
                if (!empty($gender)) {
                    $validate++;
                }
            }
            if (empty($validate)) {
                $this->set_message('Selecciona al menos un género');
                $this->_data['messages_type'] = 'error';

                goto finished;
            } else {
                if($validate > 3){
                    $this->set_message('Debes seleccionar 3 o menos generos.');
                    $this->_data['messages_type'] = 'error';

                    goto finished;
                }
            }
        }
        

        if (!$this->_post('uses')) {
            $this->set_message('Selecciona al menos un uso');
            $this->_data['messages_type'] = 'error';

            goto finished;
            
        } else {
            if(count($this->_post('uses')) > 3){
                 $this->set_message('Debes seleccionar 3 o menos usos.');
                $this->_data['messages_type'] = 'error';

                goto finished;
            }
        }

        $datos->from_array($this->_post(null));

        $datos->code = 'x' . strtoupper(random_string('alnum', 6));

        $ok = $datos->save($user);

        if ($ok) {

            foreach ($this->_post('genders') as $gender) {
					if($gender == "Otros"){
						$otro = $this->_post('gender_another');
						$datos->users_projects_gender->name = $otro;
						$datos->users_projects_gender->save_as_new($datos);
							
					}else{
						$datos->users_projects_gender->name = $gender;
						$datos->users_projects_gender->save_as_new($datos);
					}
				
			}

            foreach ($this->_post('uses') as $use) {
			
				if($use == "Todos los usos"){
					$datos->users_projects_use->name = $use;
					$datos->users_projects_use->save_as_new($datos);
					break;
				}else{
					if($use == "Otros"){
						$otro = $this->_post('use_another');
						$datos->users_projects_use->name = $otro;
						$datos->users_projects_use->save_as_new($datos);												
					}else{
						$datos->users_projects_use->name = $use;
						$datos->users_projects_use->save_as_new($datos);
					}
				
				}
            }

            $this->set_message('Proyecto creado exitosamente.');
            $this->_data['messages_type'] = 'success';
        } else {
            $this->set_message($datos->errors->string);
            $this->_data['messages_type'] = 'error';
        }

        finished:

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function save_edit_info() {

        $datos = new User;

        $datos->get_current();


        if ($datos->exists()) {

            $datos->from_array($this->_post(null));


            $ok = $datos->save();


            if (!$ok) {
                $message_upload = ($datos->errors->string);
                $message_upload_type = 'error';
            } else {

                // Si se sube una imagen, ejecutar el upload
                // Si no, lanzar el mensaje de success
                if (!empty($_FILES['imageUpload']['name'])) {

                    $path = UPLOADSFOLDER . 'profile';

                    if (!is_dir($path)) {
                        @mkdir($path);
                        @chmod($path, 0777);
                    }

                    $config['upload_path'] = $path;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['encrypt_name'] = true;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('imageUpload')) {
                        $message_upload = ('Se guardo la informaci&oacute;n pero se presentaron los siguientes errores subiendo la imagen de perfil: ' . $this->upload->display_errors());
                        $message_upload_type = 'warning';
                    } else {

                        // Borrando imagen actual
                        if (!empty($datos->image)) {
                            @unlink(UPLOADSFOLDER . $datos->image);
                        }

                        // Limpiando el path del logo para guardarlo
                        $datos_image = $this->upload->data();
                        $path = str_replace(UPLOADSFOLDER, '', $datos_image['full_path']);

                        $config['source_image'] = $datos_image['full_path'];
                        $config['master_dim'] = 'width';
                        $config['new_image'] = $datos_image['full_path'];
                        $config['width'] = 113;
                        $config['height'] = 86;


                        $this->load->library('image_lib', $config);

                        if (!$this->image_lib->resize()) {
                            $message_upload_type = 'warning';
                            $message_upload = ('Info. guardada pero hubo un error al remasterizar la imagen. Verifique que la imagen tenga las medidas recomendadas');
                        } else {
                            $datos->image = $path;
                            if ($datos->save()) {
                                $message_upload = ('Info. e imagen guardada correctamente.');
                                $message_upload_type = 'success';
                            } else {
                                $message_upload = ('Info. guardada pero hubo un error al guardar la imagen.');
                                $message_upload_type = 'warning';
                            }
                        }
                    }
                } else {
                    $message_upload = ('Info. guardada correctamente.');
                    $message_upload_type = 'success';
                }
            }
        }




        $this->session->set_flashdata('message_edit', $message_upload);
        $this->session->set_flashdata('message_edit_type', $message_upload_type);


        return redirect('/?edit_info=true&content=' . $this->_get('content'), 'refresh');
    }
	
	// ----------------------------------------------------------------------
	
	
	public function change_password() {
        

        $ok = false;

        if ($this->is_usuario()) {

            $this->form_validation->set_rules('old', 'Contraseña actual', 'required');
            $this->form_validation->set_rules('new', 'Nueva contraseña', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
            $this->form_validation->set_rules('new_confirm', 'Repetir nueva contraseña', 'required');


            $user = $this->ACL->user()->row();

            if ($this->form_validation->run() == false) {
                if (validation_errors()) {
                    $this->set_message(validation_errors());
                    $this->_data['messages_type'] = 'error';
                }
            } else {
                $identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));

                $ok = $this->ACL->change_password($identity, $this->input->post('old'), $this->input->post('new'));

                if ($ok) {
                     $this->set_message('Contraseña cambiada correctamente. Ingresa nuevamente para confirmarla.');
                    $this->_data['messages_type'] = 'success';
                    $this->_data['continue_url'] = site_url('usuarios/logout');
                    $this->_data['delay_to_continue'] = 1.5;
                } else {
                    $this->set_message($this->ACL->errors());
                    $this->_data['messages_type'] = 'error';
                }
            }
        }

        return $this->render_json($ok);
    }
	
	
	
	

    // ----------------------------------------------------------------------

    public function delete_song($song_id = null) {
        $datos = new Users_song($song_id);
        $ok = false;
        if ($datos->exists()) {
            if (!empty($datos->filepath)) {
                $path = UPLOADSFOLDER . $datos->filepath;

                if (is_file($path)) {
                    @unlink($path);
                }
            }

            $ok = $this->db->where('id', $song_id)->delete('users_songs');
        }

        echo (int) $ok;
    }

    // ----------------------------------------------------------------------

    public function delete_project($project_id = null) {
        $datos = new Users_project($project_id);
        $ok = false;
        if ($datos->exists()) {
            $ok = $this->db->where('id', $project_id)->delete('users_projects');
        }

        echo (int) $ok;
    }

    // ----------------------------------------------------------------------

    public function load_mi_musica() {
        $datos = new \User;

        $datos->get_current();

        return parent::view('perfil/mi_musica', false, array('datos' => $datos));
    }

    // ----------------------------------------------------------------------

    public function load_mis_proyectos() {
        $datos = new \User;

        $datos->get_current();

        return parent::view('perfil/mis_proyectos', false, array('datos' => $datos));
    }

    // ----------------------------------------------------------------------

    public function postulates_songs() {
        $ok = false;

        $datos = new Users_song;
        $project = new Users_project;

        $songs = $this->_post('songs');

        if (!empty($songs)) {
            foreach ($songs as $song_id => $song) {
                if (!empty($song['postulate'])) {
                    $project_code = $song['project_code'];
                    $project->get_by_code($project_code);
                    if (!$project->exists()) {
                        $this->set_message('Uno de los codigos de proyecto es inv&aacute;lido.');
                        $this->_data['messages_type'] = 'error';
                    } else {
                        $datos->get_by_id($song_id);
                        if ($project->save_users_song($datos)) {
                            $this->set_message('Cancion(es) postuladas correctamente.');
                            $this->_data['messages_type'] = 'success';
                            $this->_data['continue_url'] = site_url('/?content=tienes');
                        }
                        $project->clear();
                        $datos->clear();
                    }
                }
            }
        }

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function accept_songs() {

        if (!$this->is_usuario()) {
            return show_404();
        }
        
        $ok = false;

        if ($this->_post('songs')) {
            $this->load->model(array('_notifications/soundcloud_song'));
            $soundcloud_song = new Soundcloud_song();

            foreach ($this->_post('songs') as $song) {
                if($soundcloud_song->where('id', $song)->update('accepted', true)){
                    $this->set_message('Canci&oacute;n(es) aceptada(s) correctamente.');
                    $this->_data['messages_type'] = 'success';
                    $this->_data['continue_url'] = site_url('/?content=quieres');
                    $ok = true;
                } else {
                     $this->set_message('Error en la aplicaci&oacuten.');
                     $this->_data['messages_type'] = 'error';
                    $ok = false;
                }
            }
        } else {
            $this->set_message('Debes seleccionar al menos una (1) canci&oacuten.');
            $this->_data['messages_type'] = 'error';
        }
        
        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
}