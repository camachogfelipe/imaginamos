<?php

/**
 * @author rigobcastro
 */
class _sector_exito extends Back_Controller {

    protected $admin_area = true;
    private $model = 'nosotros';

    public function __construct() {
        parent::__construct();
//        $this->add_modular_assets('js', 'autoload');
    }

    // ----------------------------------------------------------------------

    public function index() {
          $data['pag'] = $this->session->userdata('page_sublinea');
          $this->session->set_userdata('page_sublinea', '1');
          $data['pag'] = 1;
          $data['pag_content'] = $this->sector_exito();
          $data['pag_content_title'] = "Datos de Servicios";
        return $this->build('_index', $data);
    }

    public function buildajax($view, $data = array()) {
        return $this->template->set_layout(ADMINPATH . 'layouts/beoro_ajax')->build($view, $data);
    }

    public function sector_exito() {
        $data['path_delete'] = cms_url('sector_exito/delete');
        $data['path_add'] = cms_url('sector_exito/form_add');
        $data['path_edit'] = cms_url('sector_exito/form_edit');
        $data['path_list'] = cms_url('sector_exito/lista');
        $data['mpag_content'] = $this->lista();
        $data['pag'] = 1;
        $this->session->set_userdata('page_sublinea', '1');
        return $this->buildajax('_sector_exito', $data);
    }

    public function form_edit() {
        $obj = new sublinea();
        $id = $this->_post('id');
        $linea = new linea(); 
        $data['linea'] = $linea->where('titulo','LÍNEA DE COMUNICACIÓN')->or_where('titulo','SERVICIO TÉCNICO')->or_where('titulo','SISTEMAS ELECTRÓNICOS DE SEGURIDAD')->get();
        $data['datos'] = $obj->join_related('imagen')->get_by_id($id);
        return $this->buildajax('sector_exito/edit', $data);
    }

    public function form_add() {
        $linea = new linea(); 
        $data['linea'] = $linea->where('titulo','LÍNEA DE COMUNICACIÓN')->or_where('titulo','SERVICIO TÉCNICO')->or_where('titulo','SISTEMAS ELECTRÓNICOS DE SEGURIDAD')->get();
        $data['img'] = $this->load_imagen("");
        return $this->buildajax('sector_exito/add', $data);
    }

    public function lista() {
        $obj = new sublinea();
        $data['datos'] = $obj->join_related('imagen')->join_related('linea')->get();
        return $this->buildajax('sector_exito/lista', $data);
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
        $cat = new categoria();
        $cat->where('categoria','SERVICIOS')->where('categoria_id',NULL)->get(); 
        if($cat->exists()){
          $obj = new sublinea();
          $obj->get_by_id($this->_post('id'));
          if(!$obj->exists())
            $obj->id = "";
              
          $this->loadVar($obj);
          $obj->categoria_id = $cat->id;
              if (!$obj->save()) {
                  $error = true;
                  $msg = $obj->error->string;
              }
        } else {
            $error = true;
            $msg = "No existe la categoria SERVICIOS.";
        }

        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('sector_exito'));
    }

    public function delete() {
        $error = false;
        $obj = new sublinea();
        $obj->get_by_id($this->_post('value'));
        $msg = "";
        if ($obj->exists()) {
            $M = $obj->imagen_id;
            $this->delete_all_relate($obj);
            if ($obj->delete()) {
                $img = new imagen();
                $img->get_by_id($M);
                $img->delete();
            }
            else{
                $error = true;
                $msg = $obj->error->string;
            }
        } else {
            $error = true;
            $msg = "No existe item...!";
        }
        if ($error)
            $this->set_alert('Error al eliminar datos' . ', ' . $msg, 'error');
        else
            $this->set_alert('Datos eliminados con éxito' . ', ' . $msg, 'error');
        return $this->render_json(!$error);
    }

    public function delete_all_relate(&$obj) {
        $rel = $obj->has_many;
        foreach ($rel as $r) {
            if (key_exists('imagen',$r)) {
                if (!is_null($obj->imagen_id)) {
                    $new_obj = new imagen();
                    $new_obj->get_by_id($obj->imagen_id);
                    if ($new_obj->exists()) {
                        $this->delete_files($img->path);
                    }
                }
            }
            $obj->{'delete_' . $r['class']}($r['class']);
        }
    }

  
}