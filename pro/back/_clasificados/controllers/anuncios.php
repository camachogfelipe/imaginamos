<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Anuncios extends Back_Controller {

    protected $admin_area = true;
    
    private $_datos = null;

    public function __construct() {
        parent::__construct();
        
        $this->_datos = new Directorio;
        
        $this->_data['edit_url'] = cms_url('directorio/categorias/editar/%d/');
        
        $this->_data['categoria_detalle_url'] = cms_url('directorio/anuncios/categoria/%s/');
        $this->_data['usuario_detalle_url'] = cms_url('directorio/anuncios/usuario/%s/');
        $this->_data['toggle_active_url'] = cms_url('directorio/anuncios/toggle_active/%s/');
    }

    // ----------------------------------------------------------------------

    public function index() {
        return $this->set_datos($this->_datos->get())->build('anuncios/body');
    }

    // ----------------------------------------------------------------------
    
    public function categoria($categoria = null) {
        $this->_datos->where_related_directorio_categoria('var', $categoria);
        return $this->index();
    }

    // ----------------------------------------------------------------------
    
    public function usuario($username = null) {
        $this->_datos->where_related_user('username', $username);
        return $this->index();
    }

    // ----------------------------------------------------------------------
    
    public function toggle_active($code) {
        $this->_datos->get_by_code($code);
        
        $active = $this->_datos->active ? false : true;
        
        $ok = $this->_datos->update('active', $active);
        
        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function editar($id = null) {
        $datos = new Directorio_categoria($id);


        if (empty($id) OR !$datos->exists()) {
            return show_404();
        }

        $save_url = cms_url('directorio/categorias/save/' . $id);
        $this->_data['save_url'] = $save_url;

        return $this->set_datos($datos)->build('categorias/editar');
    }

    // ----------------------------------------------------------------------

    public function save($id = null) {
        $datos = new Directorio_categoria($id);

        $datos->var = seo_name($this->_post('name'));

        $ok = $datos->from_array($this->_post(null), null, true);



        if (!$ok) {
            $this->set_message($datos->error->string);
        } else {
            $this->set_message('Guardado exitosamente...');
        }

        // Titulo de la alerta de error
        $this->_data['title_error'] = 'Error al guardar datos';

        // URL de continuación del formulario
        $this->_data['continue_url'] = cms_url('directorio/categorias');

        // ID del nuevo elemento (si llega a guardar)
        $this->_data['id'] = $datos->id;

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
}