<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Integracion extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $redes = new\ redes_sociales();
        $this->_data['datos'] = $redes->get_datos();

        $contacto = new\ contacto();
        $this->_data['data_contact'] = $contacto->get_by_id(1);

        $departamentos = new\ departamentos();
        $this->_data['deptos'] = $departamentos->get_deptos();

        $obj = new novedad();
        $this->_data['novedades'] = $obj->join_related('imagen')
                        ->order_by('fecha', 'DESC')
                        ->limit(3)->get();
         $this->db->select('cms_imagen.*');
        $this->db->from('cms_imagen');
        $this->db->join('cms_logo', 'cms_imagen.id  = cms_logo.id');
        $this->_data['logos'] =  $this->getresult($this->db->get());

        //  $banners = new\ banners();
        $this->_data['dat_ban'] = array(); //$banners->get_banner();
    }

    // ---------------------------------------------------------------------


    public function index() {
        $linea= new linea();
        $this->_data['linea_1'] = $linea->get_by_titulo('LÍNEA DE COMUNICACIÓN');
        $linea= new linea();
        $this->_data['linea_2'] = $linea->get_by_titulo('SISTEMAS ELECTRÓNICOS DE SEGURIDAD');
        $linea= new linea();
        $this->_data['linea_3'] = $linea->get_by_titulo('SERVICIO TÉCNICO');
        return $this->build('integracion.php');
    }
    
    
   public function integracion_casos() {
       if($this->_get('id')){
        $id = $this->_get('id');
        $casos = new sublinea();
        $linea= new linea();
        $linea_1 = $linea->get_by_titulo('LÍNEA DE COMUNICACIÓN');
        $linea= new linea();
        $linea_2 = $linea->get_by_titulo('SISTEMAS ELECTRÓNICOS DE SEGURIDAD');
        $linea= new linea();
        $linea_3 = $linea->get_by_titulo('SERVICIO TÉCNICO');
        switch ($id) {
            case $linea_1->id:
            $this->_data['img'] = "img/logo-t1.png";
            break;
            case $linea_2->id:
            $this->_data['img'] = "img/logo-t2.png";
            break;
            case $linea_3->id:
            $this->_data['img'] = "img/logo-t3.png";
            break;
            default:
                $this->_data['img'] = "";
            break;
        }
       
       
        $this->_data['casos'] = $casos->join_related('linea')->join_related('imagen')->get_by_linea_id($id);   
           return $this->build('integracion-casos.php');
       }else{
           return $this->build('error/404.php');
       }
   }
   
   
   public function integracion_info() {
        if(is_numeric($this->_get('id'))){
        $id = $this->_get('id'); 
        $caso =  new caso_exito(); 
        $datos = $caso->join_related('imagen')->get_by_sublinea_id($id); 
        $this->_data['caso'] =  $datos; 
        if($datos->exists()){
          $client = new cliente(); 
          $this->_data['cliente'] = $client->join_related('imagen')->join_related('caso_exito')->where('caso_exito.id',$caso->id)->get();  //$banners->get_banner();
        
          $not = new noticia_relacionada(); 
          $this->_data['noticia_relacionada'] = $not->join_related('imagen')->join_related('parrafo')->join_related('caso_exito')->where('caso_exito.id',$caso->id)->get(); 
        }else{
            $this->_data['noticia_relacionada']=array();
            $this->_data['cliente'] = array();
        }
          return $this->build('integracion-info.php');
        }else{
           return $this->build('error/404.php');
        }
   }

    // ----------------------------------------------------------------------
   
}
