<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Audiciones extends Front_Controller {
    
    protected $user_area = true;

    private $_title = 'Nuevas audiciones', $_datos = null, $_page = 1;

    public function __construct() {
        parent::__construct();

        $this->_datos = new Audicion;

        if ($this->_get('order')) {
            $this->_datos->order_by($this->_get('order'), $this->_get('type'));
        }
    }

    // ----------------------------------------------------------------------

    public function index($seccion = 'nuevas_audiciones') {

        if ($seccion == 'nuevas_audiciones') {
            // Solo las audiciones que tenga fecha de cierre menor a la fecha actual
            $this->_datos->only_actives();
           
            $this->_datos->get();
        }
        

        $this->set_datos($this->_datos);

        $this->_data['content'] = parent::view($seccion);
        $this->_data['seccion'] = $seccion;

        $this->set_title($this->_title);

        return $this->build();
    }

    // ----------------------------------------------------------------------

    public function page($num_page = 1) {
        $this->_page = $num_page;
        return $this->index();
    }
    
    // ----------------------------------------------------------------------
    
    public function buscar($num_page = 1) {
        $keyword = trim($this->_get('s', true));
        
        $like = array(
            'ciudad' => $keyword,
            'titulo' => $keyword,
            'introduccion' => $keyword,
            'contacto' => $keyword
        );
        
        $this->_datos->or_ilike($like);
        
        $this->_page = $num_page;
        return $this->index();
    }

    // ----------------------------------------------------------------------

    public function crear() {
        $this->_title = 'Crear audición';
        //$q = $this->db->get('medicos');
        $this->_data['ciudades']=$this->_datos->__get('cms_ciudades');
        $this->_data['edit_mode'] = false;
        
        return $this->index('crear_audicion');
    }

    // ----------------------------------------------------------------------

    public function editar($id = null) {
        $this->_datos->get_by_id($id);
        
        if(!$this->_datos->exists()){
            return show_404();
        }
        
        $this->_data['edit_mode'] = true;
        return $this->index('crear_audicion');
    }

    // ----------------------------------------------------------------------

    public function save($id = null) {

        $datos =& $this->_datos;
        
        if(!empty($id)){
            $datos->get_by_id($id);
            
            if(!$datos->exists()){
                return show_404();
            }
        }
        
        $edit_mode = (bool) $this->_post('edit_mode');

        if ($this->_post(null)) {

            $datos->from_array($this->_post(null));


            $dias_publicacion = $this->_post('dias_publicacion');


            if (!empty($dias_publicacion)) {
                $fecha_inicial = $this->_post('fecha_inicio');

                if (!empty($fecha_inicial)) {
                    $fecha_inicial = new DateTime($fecha_inicial);
                    $fecha_cierre = clone $fecha_inicial;

                    $fecha_cierre->modify('+' . $dias_publicacion . ' days');

                    $datos->fecha_cierre = $fecha_cierre->format(DATE_MYSQL);
                }
            }

            $user = new User;
            $user->get_current();


            $datos->created_on = datetime_now();

            $ok = $datos->save($user);


            if (!$ok) {
                $this->set_alert($datos->error->string, 'error');
            } else {
                $datos->var = seo_name($datos->titulo);
                $datos->save();

                // Si se sube una imagen, ejecutar el upload
                // Si no, lanzar el mensaje de success
                if (!empty($_FILES['imagen']['name'])) {

                    $path = UPLOADSFOLDER . 'audiciones';

                    if (!is_dir($path)) {
                        @mkdir($path);
                        @chmod($path, 0777);
                    }

                    $config['upload_path'] = $path;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['encrypt_name'] = true;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('imagen')) {
                        $this->set_alert('Se guardo la información pero se presentaron los siguientes errores subiendo la imagen de perfil: ' . $this->upload->display_errors(), 'error');
                    } else {

                        // Borrando imagen actual
                        if (!empty($datos->imagen)) {
                            @unlink(UPLOADSFOLDER . $datos->imagen);
                        }

                        // Limpiando el path del logo para guardarlo
                        $datos_image = $this->upload->data();
                        $path = str_replace(UPLOADSFOLDER, '', $datos_image['full_path']);

                        $config['source_image'] = $datos_image['full_path'];
                        $config['master_dim'] = 'width';
                        $config['new_image'] = $datos_image['full_path'];
                        $config['width'] = 200;
                        $config['height'] = 280;

                        $this->load->library('image_lib', $config);

                        if (!$this->image_lib->resize()) {
                            $this->set_alert('Información guardada pero hubo un error al remasterizar la imagen. Verifique que la imagen tenga las medidas recomendadas', 'error');
                        } else {
                            $datos->imagen = $path;
                            if ($datos->save()) {
                                $this->set_alert('Información e imagen guardados correctamente.', 'success');
                            } else {
                                $this->set_alert('Información guardada pero hubo un error al guardar la imagen.', 'error');
                            }
                        }
                        
                        if(!$edit_mode){
                            return redirect('perfil/audiciones/');
                        }
                    }
                } else {
                    $this->set_alert('Información editada correctamente.', 'success');
                }
            }
        }

        if($edit_mode){
            return $this->editar($id);
        }
        
        return $this->crear();
    }

    // ----------------------------------------------------------------------

    public function detalle($audicion_id) {

        $this->_datos->get_by_id($audicion_id);

        if (!$this->_datos->exists()) {
            return show_404();
        }

        // Actualizando el número de aplicaciones de la audición
        $this->_datos->total_aplicaciones = $this->_datos->audiciones_aplicacion->count();
        $this->_datos->save();

        $fecha_inicio = new DateTime($this->_datos->fecha_inicio);
        $hoy = new DateTime('now');

        $diff = $hoy->diff($fecha_inicio);

        $this->_data['can_apply'] = $fecha_inicio <= $hoy;
        $this->_data['dias_restantes'] = $diff->format('%a día(s) y %h hora(s)');
        $this->_data['is_owner'] = $this->userinfo->username == $this->_datos->user->username;

        $this->set_datos($this->_datos)->set_title('Audición: ' . $this->_datos->titulo);

        return $this->build('detalle');
    }

    // ----------------------------------------------------------------------

    public function aplicar() {
        $audicion_id = (int) $this->_post('audicion_id');
        $presentacion = $this->_post('presentacion') ? (string) nl2br($this->_post('presentacion', true)) : null;

        $this->_datos->get_by_id($audicion_id);

        if (!$this->_datos->exists() OR empty($audicion_id)) {
            return show_404();
        }

        $audicion_aplicacion = new Audiciones_aplicacion;

        $audicion_aplicacion->presentacion = $presentacion;
        $audicion_aplicacion->created_on = datetime_now();


        if ($audicion_aplicacion->save($this->_datos)) {
            if ($audicion_aplicacion->save_user($this->_datos->user)) {
                if ($this->_send_email($this->_datos->user, $presentacion)) {
                    $message = '¡Gracias por aplicar a está audición!';
                } else {
                    $message = 'Has aplicado correctamente pero hubo un error al informar al dueño de la misma.';
                }
                $this->_datos->total_aplicaciones = $this->_datos->total_aplicaciones++;
                $this->_datos->save();
            }
        }

        $this->_data['message'] = $message;

        return $this->set_title('Aplicar a la audición: ' . $this->_datos->titulo)->build('aplicacion_audicion');
    }

    // ----------------------------------------------------------------------

    public function _send_email($user_owner, $presentacion = null) {
        $user_apply = new User;
        $user_apply->get_current();

        $this->load->library('email');

        $this->email->clear();

        $this->_data = array(
            'user_owner' => $user_owner,
            'user_apply' => $user_apply,
            'presentacion' => $presentacion,
            'datos' => $this->_datos,
            'urls' => $this->urls
        );

        $html = parent::view('emails/aplicar');

        $this->email->from(SITEEMAIL, SITENAME);
        $this->email->to($user_owner->email);

        $this->email->subject($user_apply->username . ' ha aplicado a la audición: ' . $this->_datos->titulo);
        $this->email->message($html);


        return $this->email->send();
    }

}
