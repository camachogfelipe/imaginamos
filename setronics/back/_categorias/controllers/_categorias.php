<?php

/**
 * @author rigobcastro
 */
class _categorias extends Back_Controller {

    protected $admin_area = true;
    private $model = 'nosotros';

    public function __construct() {
        parent::__construct();
//        $this->add_modular_assets('js', 'autoload');
    }

    // ----------------------------------------------------------------------

    public function index() {
          $data['pag'] = $this->session->userdata('page_categorias');
          $this->session->set_userdata('page_categorias', '1');
          $data['pag'] = 1;
          $data['pag_content'] = $this->categorias();
          $data['pag_content_title'] = "Datos de Categorias";
        return $this->build('_index', $data);
    }

    public function buildajax($view, $data = array()) {
        return $this->template->set_layout(ADMINPATH . 'layouts/beoro_ajax')->build($view, $data);
    }

    public function categorias() {
        $data['path_delete'] = cms_url('categorias/delete');
        $data['path_add'] = cms_url('categorias/form_add');
        $data['path_edit'] = cms_url('categorias/form_edit');
        $data['path_list'] = cms_url('categorias/lista');
        $data['mpag_content'] = $this->lista();
        $data['pag'] = 1;
        $this->session->set_userdata('page_categorias', '1');
        return $this->buildajax('_categorias', $data);
    }

    public function form_edit() {
        $obj = new categoria();
        $id = $this->_post('id');
        $data['datos'] = $obj->join_related('imagen')->get_by_id($id);
        return $this->buildajax('categorias/edit', $data);
    }

    public function form_add() {
        $linea = new linea(); 
        $data['lineas'] = $linea->where('titulo','LÍNEA DE COMUNICACIÓN')->or_where('titulo','SISTEMAS ELECTRÓNICOS DE SEGURIDAD')->get();
        $data['img'] = $this->load_imagen("");
        return $this->buildajax('categorias/add', $data);
    }

    public function lista() {
        $obj = new categoria();
        $data['datos'] = $obj->join_related('imagen')->join_related('linea')->where('titulo','LÍNEA DE COMUNICACIÓN')->or_where('titulo','SISTEMAS ELECTRÓNICOS DE SEGURIDAD')->get();
        return $this->buildajax('categorias/lista', $data);
    }

    public function load_imagen($img_src = "") {
        $img_src = is_file($img_src) ? $img_src : "./uploads/dummy_150x150.gif";
        $imgbinary = fread(fopen($img_src, "r"), filesize($img_src));
        $img_str = base64_encode($imgbinary);
        $img = '<img id="img" src="data:image/jpg;base64,' . $img_str . '" />';
        return $img;
    }

    public function add() {
        $error = false;
        $msg = "";
          $obj = new categoria();
          $obj->get_by_id($this->_post('id'));
          if(!$obj->exists())
            $obj->id=""; 
            $this->loadVar($obj);
            $obj->categoria_id = NULL;
            if (!$obj->save()) {
               $error = true;
               $msg = $obj->error->string;
            }
        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('categorias'));
    }

    public function delete() {
        $value = $this->_get('value');
        $obj = new categoria();
        $obj->get_by_id($value);
        $error = false;
        $msg = "";
        if ($obj->exists()) {
            if (!$obj->delete()) {
                $msg = $obj->error->string;
                $$error = true;
            }
        } else {
            $error = true;
        }
        if ($error)
            $this->set_alert('Error al eliminar datos,'.$msg, 'error');
        else {
           $this->set_alert_session("Datos eliminados con exito...!", 'info');
        }
        $this->render_json(!$error);
    }

  
}