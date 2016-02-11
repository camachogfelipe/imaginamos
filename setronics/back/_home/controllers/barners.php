<?php

/**
 * @author rigobcastro
 */
class barners extends Back_Controller {

    protected $admin_area = true;
    

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------
    public function index() {
     
            $data['pag'] = $this->session->userdata('page_barner');
            switch (trim($data['pag'])) {
                case 1:
                    $data['pag_content'] = $this->izq(); 
                    $data['pag_content_title'] = "Posición Izquierda";
                break;    
                case 2:
                    $data['pag_content'] = $this->der_up();
                    $data['pag_content_title'] = "Posición Derecha Arriba";
                break;    
                case 3:
                    $data['pag_content'] = $this->der_down(); 
                    $data['pag_content_title'] = "Posición Derecha Abajo";
                break;
                default :
                    $this->session->set_userdata('page_barner','1');
                    $data['pag'] = 1;
                    $data['pag_content'] = $this->izq(); 
                    $data['pag_content_title'] = "Posición Izquierda";
                break; 
            }
        
        return $this->build('barner/_barners',$data);
    }
    
    public function izq() {
        $data['pag'] = 1;
        $obj= new linea();
        $data['lineas'] = $obj->get();
        $obj1 = new barner_izq();
        $data['datos'] = $obj1->join_related('imagen')->join_related('linea')->get();
        $this->session->set_userdata('page_barner','1'); 
        return  $this->buildajax('barner/_barner_izq',$data); 
    }
    
    public function der_up() {
        $data['pag'] = 2;
        $obj= new linea();
        $data['lineas'] = $obj->get();
        $obj1 = new barner_der_up();
        $data['datos'] = $obj1->join_related('imagen')->join_related('linea')->get();
        $this->session->set_userdata('page_barner','2'); 
        return  $this->buildajax('barner/_barner_der_up',$data);
    }
    
    public function der_down() {
        $data['pag'] = 3; 
        $obj= new linea();
        $data['lineas'] = $obj->get();
        $obj1 = new barner_der_down();
        $data['datos'] = $obj1->join_related('imagen')->join_related('linea')->get();
        $this->session->set_userdata('page_barner','3'); 
        return  $this->buildajax('barner/_barner_der_down',$data);
    }
    
    public function buildajax($view, $data = array()) {
       return $this->template->set_layout(ADMINPATH . 'layouts/beoro_ajax')->build($view, $data);
    }
  
    public function edit_der_up() {
        $object = new barner_der_up(); 
        $object->join_related('imagen')->get();
        $extraFields = array('imagen_path','imagen_name');
        echo $this->_get_json_datos($object,$extraFields);
    }
    
    public function add_der_up() {
        $error = false;
        $msg = ""; 
          $obj = new barner_der_up();
          $obj->get_by_id($this->_post("id")); 
           if(!$obj->exists())
               $obj->id = "";
               $this->loadVar($obj);
              if(!$obj->save()){
                $msg = $obj->error->string;
                @unlink($this->dirImg . $dato);
                $error = true;
              }
        if ($error)
            $this->set_alert_session("Error guardando datos,".$msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('home/barners'));
      
    }

      public function delete_der_up() {
        $value = $this->_get('value');
        $obj = new barner_der_up();
        $obj->get_by_id($value);
        $error = false;
        $msg = "";
        if ($obj->exists()) {
             $img = new imagen(); 
             $img->get_by_id($obj->imagen_id);
             if($img->exists()){
               $url = $img->path;
               if($obj->delete()){
                 if ($img->delete()) {
                   $this->delete_files($url);
                 } else {
                   $error = true;
                   $msg = $obj->error->string;
                 }
               }else{
                  $error = true;
               }
            } else {
              $error = true;
            }
        }else{
            $error = true; 
        }
        if ($error)
            $this->set_alert('Error al eliminar datos.', 'error');
        $this->render_json(!$error);
    }
    
     public function edit_izq() {
        $object = new barner_izq(); 
        $object->join_related('imagen')->get();
        $extraFields = array('imagen_path','imagen_name');
        echo $this->_get_json_datos($object,$extraFields);
    }
    
    public function add_izq() {
        $error = false;
          $imagen = new imagen();
          $obj = new barner_izq();
          $obj->get_by_linea_id($this->_post("linea_id")); 
           if(!$obj->exists())
             $obj->id = "";
             $this->loadVar($obj);
              if(!$obj->save()){
                $imagen->delete();
                @unlink($this->dirImg . $dato);
                $error = true;
              }
        if ($error)
            $this->set_alert_session("Error guardando datos, favor intente mas tarde...!", 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('home/barners'));
    }

      public function delete_izq() {
        $value = $this->_get('value');
        $obj = new barner_izq();
        $obj->get_by_id($value);
        $error = false;
        if ($obj->exists()) {
             $img = new imagen(); 
             $img->get_by_id($obj->imagen_id);
             if($img->exists()){
               $url = $img->path;
               if($obj->delete()){
                 if ($img->delete()) {
                   $this->delete_files($url);
                 } else {
                   $error = true;
                 }
               }else{
                  $error = true;
               }
            } else {
              $error = true;
            }
        }else{
            $error = true; 
        }
        if ($error)
            $this->set_alert('Error al eliminar datos.', 'error');
        $this->render_json(!$error);
    }
    
    public function edit_der_down() {
        $object = new barner_der_down(); 
        $object->join_related('imagen')->get();
        $extraFields = array('imagen_path','imagen_name');
        echo $this->_get_json_datos($object,$extraFields);
    }
    
       public function add_der_down() {
        $error = false;
          $imagen = new imagen();
          $obj = new barner_der_down();
          $obj->get_by_linea_id($this->_post("linea_id")); 
           if(!$obj->exists())
             $obj->id = "";
             $this->loadVar($obj);
              if(!$obj->save()){
                $imagen->delete();
                @unlink($this->dirImg . $dato);
                $error = true;
              }
        if ($error)
            $this->set_alert_session("Error guardando datos, favor intente mas tarde...!", 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('home/barners'));
    }
//    public function add_der_down() {
//        $error = false;
//        $dato = $this->simple_upload('path');
//        if ($dato !== false) {
//          $imagen = new imagen();
//          $obj = new barner_der_down();
//          $obj->get_by_linea_id($this->_post("linea_id")); 
//           if($obj->exists()){
//             $imagen->get_by_id($obj->imagen_id);
//             if(!$imagen->exists())
//               $imagen->id = ""; 
//           }else{
//               $imagen->id = ""; 
//               $obj->id = "";
//           }
//            $imagen->path = $this->dirImg . $dato;
//            if($imagen->save()){
//               $this->loadVar($obj);
//               $obj->imagen_id = $imagen->id;
//              if(!$obj->save()){
//                $imagen->delete();
//                @unlink($this->dirImg . $dato);
//                $error = true;
//              }
//            } else {
//                @unlink($this->dirImg . $dato);
//                $error = true;
//            }
//        } else {
//            $error = true;
//        }
//        if ($error)
//            $this->set_alert_session("Error guardando datos, favor intente mas tarde...!", 'error');
//        else
//            $this->set_alert_session("Datos Guardados con exito...!", 'info');
//        redirect(cms_url('home/barners'));
//      
//    }

      public function delete_der_down() {
        $value = $this->_get('value');
        $obj = new barner_der_down();
        $obj->get_by_id($value);
        $error = false;
        if ($obj->exists()) {
             $img = new imagen(); 
             $img->get_by_id($obj->imagen_id);
             if($img->exists()){
               $url = $img->path;
               if($obj->delete()){
                 if ($img->delete()) {
                   $this->delete_files($url);
                 } else {
                   $error = true;
                 }
               }else{
                  $error = true;
               }
            } else {
              $error = true;
            }
        }else{
            $error = true; 
        }
        if ($error)
            $this->set_alert('Error al eliminar datos.', 'error');
        $this->render_json(!$error);
    }

}