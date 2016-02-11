<?php

/**
 * @author rigobcastro
 */
class _casos_exitos extends Back_Controller {

    protected $admin_area = true;
    private $model = 'nosotros';

    public function __construct() {
        parent::__construct();
//        $this->add_modular_assets('js', 'autoload');
    }

    // ----------------------------------------------------------------------

    public function index() {

        $data['pag'] = $this->session->userdata('page_casos_exitos');
        switch (trim($data['pag'])) {
            case 1:
                $data['pag_content'] = $this->casos_exitos();
                $data['pag_content_title'] = "Datos Casos de Éxito";
                break;
            case 2:
                $data['pag_content'] = $this->noticias();
                $data['pag_content_title'] = "Noticias Relacionadas";
                break;
            case 3:
                $data['pag_content'] = $this->clientes();
                $data['pag_content_title'] = "Clientes con Casos de Éxito";
                break;
            default :
                $this->session->set_userdata('page_casos_exitos', '1');
                $data['pag'] = 1;
                $data['pag_content'] = $this->casos_exitos();
                $data['pag_content_title'] = "Datos Casos de Éxito";
                break;
        }

        return $this->build('_index', $data);
    }

    public function buildajax($view, $data = array()) {
        return $this->template->set_layout(ADMINPATH . 'layouts/beoro_ajax')->build($view, $data);
    }

    public function casos_exitos() {
        $data['path_delete'] = cms_url('casos_exitos/delete_casos_exitos');
        $data['path_add'] = cms_url('casos_exitos/form_add_casos_exitos');
        $data['path_edit'] = cms_url('casos_exitos/form_edit_casos_exitos');
        $data['path_list'] = cms_url('casos_exitos/list_casos_exitos');
        $data['mpag_content'] = $this->list_casos_exitos();
        $data['pag'] = 1;
        $this->session->set_userdata('page_casos_exitos', '1');
        return $this->buildajax('_casos_exitos', $data);
    }

    public function form_edit_casos_exitos() {
        $casos_exitos = new caso_exito();
        $id = $this->_post('id');
        $data = array();
        $data['datos'] = array();
        $casos = new caso_exito();
        $array = $casos->get();
            $dats = array();
            foreach ($array as $value) {
                if($value->id != $id)
                $dats[] = $value->sublinea_id;
            }
            $sector = new sublinea();
            if (count($dats)) {
                $data['sector'] = $sector->where_not_in('id', $dats)->get();
            } else {
                $data['sector'] = $sector->get();
            }
            $data['datos'] = $casos_exitos->join_related('sublinea')->join_related('imagen')->get_by_id($id);
          return $this->buildajax('casos_exitos/edit', $data);
    }

    public function form_add_casos_exitos() {
        $data['img'] = $this->load_imagen("");
        $casos = new caso_exito();
        $array = $casos->get();
        $dats = array();
        foreach ($array as $value) {
            $dats[] = $value->sublinea_id;
        }
        $sector = new sublinea();
        if (count($dats)) {
            $data['sector'] = $sector->where_not_in('id', $dats)->get();
        } else {
            $data['sector'] = $sector->get();
        }
        return $this->buildajax('casos_exitos/add', $data);
    }

    public function list_casos_exitos() {
        $casos_exitos = new caso_exito();
        $data['datos'] = $casos_exitos->join_related('sublinea')->join_related('imagen')->get();
        return $this->buildajax('casos_exitos/lista', $data);
    }

    public function load_imagen($img_src = "") {
        $img_src = is_file($img_src) ? $img_src : "./uploads/dummy_150x150.gif";
        $imgbinary = fread(fopen($img_src, "r"), filesize($img_src));
        $img_str = base64_encode($imgbinary);
        $img = '<img id="img" src="data:image/jpg;base64,' . $img_str . '" />';
        return $img;
    }

    public function add_casos_exitos() {
        $error = false;
        $msg = "";
        $obj = new caso_exito();
        $obj->get_by_id($this->_post('id'));
        if (!$obj->exists())
            $obj->id = "";

        $this->loadVar($obj);
        if (!$obj->save()) {
            $error = true;
            $msg = $obj->error->string;
        }

        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('casos_exitos'));
    }

    public function delete_casos_exitos() {
        $error = false;
        $obj = new caso_exito();
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
        else {
            $this->set_alert_session("Datos eliminados con exito...!", 'info');
        }
        return $this->render_json(!$error);
    }

    public function delete_all_relate(&$obj) {
        $rel = $obj->has_many;
        foreach ($rel as $r) {
            if (array_key_exists('imagen', $r)) {
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
        $data['path_add'] = cms_url('casos_exitos/form_add_noticias');
        $data['path_edit'] = cms_url('casos_exitos/form_edit_noticias');
        $data['path_list'] = cms_url('casos_exitos/list_noticias');
        $data['mpag_content'] = $this->list_noticias();
        $this->session->set_userdata('page_casos_exitos', '2');
        return $this->buildajax('_noticias', $data);
    }

    public function form_edit_noticias() {
        $id = $this->_post('id');
        $exito = new caso_exito();
        $data['exito'] = $exito->get();  
        $not = new noticia_relacionada();
        $data['datos'] = $not->join_related('imagen')->join_related('parrafo')->join_related('caso_exito')->get_by_id($id);
        return $this->buildajax('noticias/edit', $data);
    }

    public function form_add_noticias() {
        $exito = new caso_exito();
        $data['exito'] = $exito->get();     
        $data['img'] = $this->load_imagen("");
        return $this->buildajax('noticias/add', $data);
    }

    public function list_noticias() {
        $noticias = new noticia_relacionada();
        $data['datos'] = $noticias->join_related('imagen')->join_related('parrafo')->join_related('caso_exito')->where('caso_exito_id <>','')->get();
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
            if ($this->_post('caso_exito_id')) {
                $insert = $this->db->query('INSERT INTO cms_caso_exito_noticia_relacionada VALUES(' . $this->_post('caso_exito_id') . ',' . $obj->id . ')');
                if (!$insert) {
                    $error = true;
                    $msg = $obj->error->string;
                }
            } else {
                $error = true;
                $msg = "el campo CASO DE EXITO es requerido";
            }
        }
        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('casos_exitos'));
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
            $this->set_alert_session("Error Actualizando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Modificados con exito...!", 'info');
        redirect(cms_url('casos_exitos'));
    }

    public function delete_noticias() {
        $error = false;
        $obj = new noticia_relacionada();
        $obj->get_by_id($this->_post('value'));
        
        if ($this->_post('related_value')) {
            if ($obj->exists()) {
                $img_id = $obj->imagen_id;
                $delete = $this->db->query("DELETE FROM cms_caso_exito_noticia_relacionada WHERE cms_caso_exito_noticia_relacionada.caso_exito_id = ".$this->_post('related_value')." AND cms_caso_exito_noticia_relacionada.noticia_relacionada_id = " . $obj->id);
                if ($delete and $obj->delete()) {
                    $img = new imagen();
                    $img->get_by_id($img_id);
                    $this->delete_files($img->path);
                    $img->delete();
                } else {
                    $error = true;
                    $msg = $obj->error->string;
                }
            } else {
                $error = true;
                $msg = $obj->error->string;
            }
        } else {
            $error = true;
            $msg = "No existe el caso de exito asociado a esta noticia";
        }
        if ($error)
            $this->set_alert('Error al eliminar datos' . ', ' . $msg, 'error');
        else
            $this->set_alert('Datos eliminados con exito...!', 'info');
        return $this->render_json(!$error);
    }

    public function clientes() {
        $data['pag'] = 3;
        $data['path_add'] = cms_url('casos_exitos/form_add_clientes');
        $data['path_edit'] = cms_url('casos_exitos/form_edit_clientes');
        $data['path_list'] = cms_url('casos_exitos/list_clientes');
        $data['mpag_content'] = $this->list_clientes();
        $cliente = new cliente();
        $data['datos'] = $cliente->join_related('imagen')->join_related('caso_exito')->where('caso_exito_id <>','')->get();
        $this->session->set_userdata('page_casos_exitos', '3');
        return $this->buildajax('_clientes', $data);
    }

    public function form_edit_clientes() {
        $id = $this->_post('id');
        $exito = new caso_exito();
        $data['exito'] = $exito->get(); 
        $not = new cliente();
        $data['datos'] = $not->join_related('imagen')->join_related('caso_exito')->get_by_id($id);
        return $this->buildajax('clientes/edit', $data);
    }

    public function form_add_clientes() {
        $data['img'] = $this->load_imagen("");
          $exito = new caso_exito();
        $data['exito'] = $exito->get(); 
        return $this->buildajax('clientes/add', $data);
    }

    public function list_clientes() {
        $noticias = new cliente();
        $data['datos'] = $noticias->join_related('imagen')->join_related('caso_exito')->where('caso_exito_id <>','')->get();
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
            if ($this->_post('caso_exito_id')) {
                $insert = $this->db->query('INSERT INTO cms_cliente_caso_exito VALUES(' . $obj->id . ','.$this->_post('caso_exito_id').')');
                if (!$insert) {
                    $error = true;
                    $msg = $obj->error->string;
                }
            } else {
                $error = true;
                $msg = "el campo CASO DE EXITO es requerido";
            }
        }
        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('casos_exitos'));
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
        redirect(cms_url('casos_exitos'));
    }

    public function delete_clientes() {
        $error = false;
        $obj = new cliente();
        $obj->get_by_id($this->_post('value'));
        if ($obj->exists()) {
           if ($this->_post('related_value')) {
            $img_id = $obj->imagen_id;
            $delete = $this->db->query("DELETE FROM cms_cliente_caso_exito WHERE cms_cliente_caso_exito.caso_exito_id = 1 AND cms_cliente_caso_exito.cliente_id = " . $obj->id);
            if ($delete and $obj->delete()) {
                $img = new imagen();
                $img->get_by_id($img_id);
                $this->delete_files($img->path);
                $img->delete();
            } else {
                $error = true;
                $msg = $obj->error->string;
            }
           } else {
              $error = true;
              $msg = "No existe un caso de exito asociado a este cliente";
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