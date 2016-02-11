<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Directorios extends Front_Controller {

    protected $user_area = true;
    private $page = 1;
    private $_datos = null, $_user_id = 0;

    public function __construct() {
        parent::__construct();

        // Mostrar header del perfil del usuario
        $this->show_header_perfil = true;

        $this->load->model(array('_directorio/directorio_categoria', '_directorio/directorio', '_directorio/directorio_adicional', '_directorio/directorio_image'));

        $this->_datos = new Directorio;


        if ($this->_get('s')) {
            $match = trim($this->_get('s', true));

            if (!empty($match)) {
                $like = array('empresa' => $match, 'descripcion' => $match, 'sitio_web' => $match, 'email' => $match, 'direccion' => $match);
                $this->_datos->or_like($like);
            }
        }
    }

    // ----------------------------------------------------------------------



    public function index() {
        $datos = & $this->_datos;
        $user = new User;
        $user->get_current();

        $datos->where_related_user($user);

        $datos->get_paged($this->page, 10);

        $this->set_title('Mi directorio');

        $this->set_datos($datos);

        $this->_data['editar_url'] = site_url('perfil/directorios/editar/%s');
        $this->_data['eliminar_url'] = site_url('perfil/directorios/eliminar/%s');


        return $this->build('mi_directorio/body');
    }

    // ----------------------------------------------------------------------

    public function page($page = 1) {
        $this->page = $page;
        return $this->index();
    }

    // ----------------------------------------------------------------------


    public function editar($code = null) {
        $datos = $this->_datos;
        $datos->get_by_code($code);

        if (empty($code) OR !$datos->exists()) {
            return show_404();
        }


        if ($this->_post(null)) {
            $datos->from_array($this->_post(null));
            $datos->update_on = datetime_now();

            if ($datos->save()) {

                $adicionales = $this->_post('adicionales');

                $datos->directorio_adicional->delete_all();


                if (!empty($adicionales)) {
                    foreach ($adicionales as $adicional) {
                        $datos->directorio_adicional->name = $adicional;

                        $datos->directorio_adicional->save($datos);

                        $datos->directorio_adicional->clear();
                    }
                }

                // Si se sube una imagen, ejecutar el upload
                // Si no, lanzar el mensaje de success
                if (!empty($_FILES['logo']['name'])) {
                    $config['upload_path'] = UPLOADSFOLDER . $this->userinfo->username . '/directorio/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['encrypt_name'] = true;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('logo')) {
                        $this->set_alert('Se guardo la información pero se presentaron los siguientes errores subiendo el logo: ' . $this->upload->display_errors(), 'error');
                    } else {

                        // Borrando logo actual
                        if (!empty($datos->logo)) {
                            @unlink(UPLOADSFOLDER . $datos->logo);
                        }


                        // Limpiando el path del logo para guardarlo
                        $datos_image = $this->upload->data();
                        $logo_path = str_replace(UPLOADSFOLDER, '', $datos_image['full_path']);

                        $config['source_image'] = $datos_image['full_path'];
                        $config['master_dim'] = 'both';
                        $config['new_image'] = $datos_image['full_path'];
                        $config['width'] = 127;
                        $config['height'] = 127;

                        $this->load->library('image_lib', $config);

                        if (!$this->image_lib->resize()) {
                            $this->set_alert('Información guardada pero hubo un error al remasterizar el logo. Verifique que la imagen tiene las medidas recomendadas', 'error');
                        } else {
                            if ($datos->where('code', $code)->update('logo', $logo_path)) {
                                $this->set_alert('Información y logo guardados correctamente.', 'success');
                            } else {
                                $this->set_alert('Información guardada pero hubo un error al actualizar el logo.', 'error');
                            }
                        }
                    }
                } else {

                    $this->set_alert('Información guardada correctamente.', 'success');
                }
            } else {
                $this->set_alert($datos->error->string, 'error');
            }

            $datos->clear();
            $datos->get_by_code($code);
        }



        // Objeto que contendrá los adicionales
        $adicionales = array();

        if ($datos->directorio_adicional->exists()) {
            foreach ($datos->directorio_adicional as $adicional) {
                array_push($adicionales, $adicional->name);
            }
        }

        $datos->adicionales_object = json_encode($adicionales);

        $directorio_categorias = new Directorio_categoria();

        $this->_data['select_categorias'] = $directorio_categorias->get_for_select();
        $this->_data['upload_url'] = cms_url('directorio/upload/index/' . $this->userinfo->username . '/' . $code);

        return $this->set_datos($datos)->set_title('Editar anuncio: ' . $datos->empresa)->build('mi_directorio/editar');
    }

    // ----------------------------------------------------------------------

    public function eliminar($code = null) {
        $ok = $this->db->where('code', $code)->delete('directorio');
        
        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function eliminar_imagen($id) {
        $datos = new Directorio_image($id);
        
        if( ! $datos->exists()){
            return show_404();
        }
        
        $files = array($datos->thumb, $datos->image);
        
        foreach($files as &$file){
            $file = UPLOADSFOLDER . $file;
            if(is_file($file)){
                @unlink($file);
            }
        }
        
        $ok = $datos->delete();
        
        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
}