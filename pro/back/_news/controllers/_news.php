<?php

/**
 * Subtemas - CMS Albums
 *
 * @author rigobcastro
 */
class _News extends Back_Controller {

    protected $admin_area = true;

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $datos = new News;
        $datos->get();

        $this->set_datos($datos);

        // URL para editar
        $this->_data['edit_url'] = cms_url('news/guardar/%d/');
        $this->_data['delete_url'] = cms_url('news/delete/%d/');

        return $this->build('body');
    }

    // ----------------------------------------------------------------------

    public function guardar($id = null) {
        $datos = new News($id);


        $edit_mode = false;
        $save_url = cms_url('news/save');

        if ($datos->exists()) {
            $edit_mode = true;
            $save_url .= "/{$id}";
        }

        $this->_data['save_url'] = $save_url;
        $this->_data['upload_url'] = cms_url('news/upload');
        $this->_data['regresar_url'] = cms_url('news');
        $this->_data['datos'] = $datos;
        $this->_data['edit_mode'] = $edit_mode;

        return $this->build('guardar');
    }

    // ----------------------------------------------------------------------

    public function save($id = null) {
        $datos = new News($id);

        $datos->from_array($this->_post(null));
        $datos->var = seo_name($this->_post('title'));
        
        if (!$datos->exists()) {
            $datos->created_on = datetime_now();
        }

        // Guardando el subtema con la relacion al tema
        $ok = $datos->save();

        if (!$ok) {
            $this->set_message($datos->error->string);
        }

        // Titulo de la alerta de error
        $this->_data['title_error'] = 'Error al guardar datos';

        // URL de continuación del formulario
        $this->_data['continue_url'] = cms_url('news/index');

        // ID del nuevo elemento (si llega a guardar)
        $this->_data['id'] = $datos->id;

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
    
    public function delete($id = null) {
        $datos = new News($id);
        
        if($datos->news_image->exists()){
            foreach($datos->news_image as $news_image){
                $files = array(
                    UPLOADSFOLDER . $news_image->image,
                    UPLOADSFOLDER . $news_image->thumb
                );
                foreach($files as $file){
                    if(is_file($file)){
                        @unlink($file);
                    }
                }
            }
        }
        
        $ok = $this->db->delete('news', array('id' => $id));
        
        
        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function save_tamano() {
        $subtema_item_id = $this->_get('subtema_item_id');
        $tamano_id = $this->_get('tamano_id');

        $subtema = new Album_subtemas_item($subtema_item_id);
        $tamano = new Album_tamano($tamano_id);

        $ok = $subtema->save($tamano);
        
        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
}