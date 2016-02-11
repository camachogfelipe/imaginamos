<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Directorios extends Front_Controller {

    protected $user_area = true;
    private $_datos = null;
    private $_page = 1;
    private $_tab_content = 'categorias';
    private $_title = 'Categorias';

    public function __construct() {
        parent::__construct();

        $this->_datos = new Directorio;

        $this->_datos->where('active', true);
    }

    // ----------------------------------------------------------------------

    public function index() {

        $directorio_categorias = new Directorio_categoria();

        $this->_datos->get_paged($this->_page, 10);

        $this->set_datos($this->_datos);
        
        $this->_data['tab_content'] = parent::view($this->_tab_content, true, array(
                    'select_categorias' => $directorio_categorias->get_for_select('Seleccione'),
                    'categorias' => $directorio_categorias->get()
                ));

        $this->_data['tab_content_active'] = $this->_tab_content;

        return $this->set_title('Directorio - ' . $this->_title)->build();
    }

    // ----------------------------------------------------------------------

    public function page($page = 1) {
        $this->_page = $page;
        return $this->index();
    }

    // ----------------------------------------------------------------------

    public function buscador($page = 1) {
        $this->_tab_content = 'buscador';
        $this->_title = 'Buscador';

        $this->_datos->clear();
        
        $keyword = $this->_get('s', true);

        $like = array(
            'empresa' => $keyword,
            'direccion' => $keyword,
            'telefono' => $keyword,
            'sitio_web' => $keyword,
            'email' => $keyword
        );

        $this->_datos->group_start()->or_ilike($like)->group_end();
        
        $this->_page = $page;

        return $this->index();
    }

    // ----------------------------------------------------------------------

    public function a_z($letter = 'A', $page = 1) {
        $this->_tab_content = 'a_z';
        $this->_title = 'A - Z';
        

        if (!empty($letter)) {
            $this->_data['letter_active'] = $letter;

            $this->_datos->clear();
            $this->_datos->ilike('empresa', $letter, 'after');
        }

        $this->_page = $page;

        return $this->index();
    }

    // ----------------------------------------------------------------------

    public function crear_anuncio() {
        $this->_tab_content = 'crear_anuncio';
        $this->_title = 'Crear anuncio';

        return $this->index();
    }

    // ----------------------------------------------------------------------

    public function crear() {

        $user = new User;
        $user->get_current();

        $directorio = new Directorio;

        $adicionales = $this->_post('adicionales');
        $datos = $this->_post(null);

        $directorio->from_array($datos);

        // Datos que no vienen del post
        $directorio->created_on = datetime_now();
        $directorio->code = $directorio->create_code();
      //  $directorio->image = $directorio->_post(image);
        $ok = $directorio->save($user);

        if ($ok) {
            $this->set_alert('Anuncio creado exitosamente, ahora redireccionando', 'success');

            // Guardando los adicionales en caso de que existan
            $directorio_adicionales = new Directorio_adicional;
            if (!empty($adicionales)) {
                foreach ($adicionales as $adicional) {
                    $directorio_adicionales->name = $adicional;

                    $directorio_adicionales->save_as_new($directorio);
                }
            }
        } else {
            $this->set_alert($directorio->error->string, 'error');
        }

        $this->_data['continue_url'] = site_url('perfil/directorios');

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
}