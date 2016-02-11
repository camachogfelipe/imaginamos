<?php

/**
 * @author rigobcastro
 */
class _flota extends Back_Controller {

    protected $admin_area = true;
    private $model = 'nosotros';

    public function __construct() {
        parent::__construct();
//        $this->add_modular_assets('js', 'autoload');
    }

    // ----------------------------------------------------------------------

    public function index() {

        $data['pag'] = $this->session->userdata('page_flota');
        switch (trim($data['pag'])) {
            case 1:
                $data['pag_content'] = $this->flota();
                $data['pag_content_title'] = "Datos Gestión de Flota";
                break;
            case 2:
                $data['pag_content'] = $this->noticias();
                $data['pag_content_title'] = "Noticias Relacionadas";
                break;
            case 3:
                $data['pag_content'] = $this->clientes();
                $data['pag_content_title'] = "Clientes de Flota";
                break;
            default :
                $this->session->set_userdata('page_flota', '1');
                $data['pag'] = 1;
                $data['pag_content'] = $this->flota();
                $data['pag_content_title'] = "Datos de Gestion de Flota";
                break;
        }

        return $this->build('_index', $data);
    }

    public function buildajax($view, $data = array()) {
        return $this->template->set_layout(ADMINPATH . 'layouts/beoro_ajax')->build($view, $data);
    }

    public function flota() {
        $data['path_delete'] = cms_url('flota/delete_flota');
        $data['path_add'] = cms_url('flota/form_add_flota');
        $data['path_edit'] = cms_url('flota/form_edit_flota');
        $data['path_list'] = cms_url('flota/list_flota');
        $data['mpag_content'] = $this->list_flota();
        $data['pag'] = 1;
        $this->session->set_userdata('page_flota', '1');
        return $this->buildajax('_flota', $data);
    }

    public function form_edit_flota() {
        $flota = new gestion_flota();
        $id = $this->_post('id');
        $data['datos'] = $flota->join_related('linea')->join_related('imagen')->get_by_id($id);
        return $this->buildajax('flota/edit', $data);
    }

    public function form_add_flota() {
        $data['img'] = $this->load_imagen("");
        return $this->buildajax('flota/add', $data);
    }

    public function list_flota() {
        $flota = new gestion_flota();
        $data['datos'] = $flota->join_related('linea')->join_related('imagen')->get_by_id(1);
        return $this->buildajax('flota/lista', $data);
    }

    public function load_imagen($img_src = "") {
        $img_src = is_file($img_src) ? $img_src : "./uploads/dummy_150x150.gif";
        $imgbinary = fread(fopen($img_src, "r"), filesize($img_src));
        $img_str = base64_encode($imgbinary);
        $img = '<img id="img" src="data:image/jpg;base64,' . $img_str . '" />';
        return $img;
    }

    public function add_flota() {
        $error = false;
        $msg = "";
        $linea = new linea();
        $linea->get_by_titulo('GESTIÓN DE FLOTA');
        if ($linea->exists()) {
            $obj = new gestion_flota();
            $obj->get_by_id(1);
            if (!$obj->exists()) {
                $this->loadVar($obj);
                $obj->id = 1;
                $obj->linea_id = $linea->id;
                if (!$obj->save_as_new()) {
                    $error = true;
                    $msg = $obj->error->string;
                }
            } else {
                $this->loadVar($obj);
                $obj->linea_id = $linea->id;
                if (!$obj->save()) {
                    $error = true;
                    $msg = $obj->error->string;
                }
            }
        } else {
            $error = true;
            $msg = "No existe la linea GESTIÓN DE FLOTA";
        }

        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('flota'));
    }

    public function delete_flota() {
        $error = false;
        $obj = new gestion_flota();
        $obj->get_by_id($this->_post('value'));
        $msg = "";
        if ($obj->exists()) {
            $M = $obj->imagen_id;
            $this->delete_all_relate($obj);
            $error = !$obj->delete();
            if (!$error) {
                $img = new imagen();
                $img->get_by_id($M);
                //   $this->delete_files($img->path);
                $img->delete();
            }
            else
                $msg = $obj->error->string;
        } else {
            $error = true;
            $msg = "No existe item...!";
        }
        if ($error)
            $this->set_alert('Error al eliminar datos' . ', ' . $msg, 'error');
        return $this->render_json(!$error);
    }

    public function delete_all_relate(&$obj) {
        $rel = $obj->has_many;
        foreach ($rel as $r) {
            if ($r['imagen']) {
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

    //------------------  noticias relacionadas  -------------------------//

    public function noticias() {
        $data['pag'] = 2;
        $data['path_add'] = cms_url('flota/form_add_noticias');
        $data['path_edit'] = cms_url('flota/form_edit_noticias');
        $data['path_list'] = cms_url('flota/list_noticias');
        $data['mpag_content'] = $this->list_noticias();
        $this->session->set_userdata('page_flota', '2');
        return $this->buildajax('_noticias', $data);
    }

    public function form_edit_noticias() {
        $id = $this->_post('id');
        $not = new noticia_relacionada();
        $data['datos'] = $not->join_related('imagen')->join_related('parrafo')->join_related('gestion_flota')->get_by_id($id);
        return $this->buildajax('noticias/edit', $data);
    }

    public function form_add_noticias() {
        $data['img'] = $this->load_imagen("");
        return $this->buildajax('noticias/add', $data);
    }

    public function list_noticias() {
        $noticias = new noticia_relacionada();
        $data['datos'] = $noticias->join_related('imagen')->join_related('parrafo')->join_related('gestion_flota')->where('gestion_flota_id <>','')->get();
        return $this->buildajax('noticias/lista', $data);
    }

    public function add_noticias() {
        $error = false;
        $msg = "";
        $obj = new noticia_relacionada();
        $this->loadVar($obj);
        $obj->id = "";
        if ($obj->save() === false) {
            $error = true;
            $msg = $obj->error->string;
        } else {
                $insert =  $this->db->query('INSERT INTO cms_gestion_flota_noticia_relacionada VALUES(1,'.$obj->id.')'); 
                if (!$insert) {
                    $error = true;
                    $msg = $obj->error->string;
                }
        }
        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('flota'));
    }

    public function edit_noticias() {
        $error = false;
        $msg = "";
        $obj = new noticia_relacionada();
        $obj->get_by_id($this->_post('id'));
        if ($obj->exists()) {
            $this->loadVar($obj);
            if (!$obj->save()) {
                $error = true;
                $msg = $obj->error->string;
            }
        } else {
            $error = true;
            $msg = $obj->error->string;
        }
        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('flota'));
    }

    public function delete_noticias() {
            $error = false;
            $obj = new noticia_relacionada();
            $obj->get_by_id($this->_post('value'));
            if ($obj->exists()) {
                $img_id = $obj->imagen_id;  
                $delete = $this->db->query("DELETE FROM cms_gestion_flota_noticia_relacionada WHERE cms_gestion_flota_noticia_relacionada.gestion_flota_id = 1 AND cms_gestion_flota_noticia_relacionada.noticia_relacionada_id = ".$obj->id);
                if ($delete and $obj->delete()) {
                     $img = new imagen();
                     $img->get_by_id($img_id);
                     $this->delete_files($img->path);
                     $img->delete();
                }else{
                     $error = true;
                     $msg = $obj->error->string;
                }
            } else {
                $error = true;
                $msg = $obj->error->string;
            }
        if ($error)
            $this->set_alert('Error al eliminar datos' . ', ' . $msg, 'error');
        else
            $this->set_alert('Datos eliminados con exito...!', 'info'); 
        return $this->render_json(!$error);
    }

    public function clientes() {
        $data['pag'] = 3;
         $data['path_add'] = cms_url('flota/form_add_clientes');
        $data['path_edit'] = cms_url('flota/form_edit_clientes');
        $data['path_list'] = cms_url('flota/list_clientes');
        $data['mpag_content'] = $this->list_clientes();
        $cliente = new cliente();
        $data['datos'] = $cliente->join_related('imagen')->join_related('gestion_flota')->where('gestion_flota_id <>','')->get();
        $this->session->set_userdata('page_flota', '3');
        return $this->buildajax('_clientes', $data);
    }

    public function form_edit_clientes() {
        $id = $this->_post('id');
        $not = new cliente();
        $data['datos'] = $not->join_related('imagen')->join_related('gestion_flota')->get_by_id($id);
        return $this->buildajax('clientes/edit', $data);
    }

    public function form_add_clientes() {
        $data['img'] = $this->load_imagen("");
        return $this->buildajax('clientes/add', $data);
    }

    public function list_clientes() {
        $noticias = new cliente();
        $data['datos'] = $noticias->join_related('imagen')->join_related('gestion_flota')->where('gestion_flota_id <>','')->get();
        return $this->buildajax('clientes/lista', $data);
    }
    
    public function add_clientes() {
        $error = false;
        $msg = "";
        $obj = new cliente();
        $this->loadVar($obj);
        $obj->id = "";
        if ($obj->save() === false) {
            $error = true;
            $msg = $obj->error->string;
        } else {
                $insert =  $this->db->query('INSERT INTO cms_cliente_gestion_flota VALUES('.$obj->id.',1)'); 
                if (!$insert) {
                    $error = true;
                    $msg = $obj->error->string;
                }
        }
        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('flota'));
    }

    public function edit_clientes() {
        $error = false;
        $msg = "";
        $obj = new cliente();
        $obj->get_by_id($this->_post('id'));
        if ($obj->exists()) {
            $this->loadVar($obj);
            if (!$obj->save()) {
                $error = true;
                $msg = $obj->error->string;
            }
        } else {
            $error = true;
            $msg = $obj->error->string;
        }
        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('flota'));
    }

    public function delete_clientes() {
            $error = false;
            $obj = new cliente();
            $obj->get_by_id($this->_post('value'));
            if ($obj->exists()) {
                $img_id = $obj->imagen_id;  
                $delete = $this->db->query("DELETE FROM cms_cliente_gestion_flota WHERE cms_cliente_gestion_flota.gestion_flota_id = 1 AND cms_cliente_gestion_flota.cliente_id = ".$obj->id);
                if ($delete and $obj->delete()) {
                     $img = new imagen();
                     $img->get_by_id($img_id);
                     $this->delete_files($img->path);
                     $img->delete();
                }else{
                     $error = true;
                     $msg = $obj->error->string;
                }
            } else {
                $error = true;
                $msg = $obj->error->string;
            }
        if ($error)
            $this->set_alert('Error al eliminar datos' . ', ' . $msg, 'error');
        else
            $this->set_alert('Datos eliminados con exito...!', 'info'); 
        return $this->render_json(!$error);
    }

}