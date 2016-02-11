<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Servicios extends Front_Controller {

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

    // ----------------------------------------------------------------------

    public function index() {
        $servicio =  new servicio(); 
        $this->_data['servicios'] = $servicio->join_related('imagen')->join_related('categoria')->get(); 
        return $this->build('servicios.php');
    }
    
     public function servicio_info() {
         if($this->_get('id')){
           $this->_data['is_cliente'] = $this->is_cliente(); 
           $this->_data['is_proveedor'] = $this->is_proveedor();   
           $servicio = new servicio();
           $this->_data['servicio'] = $servicio->join_related('imagen')->join_related('categoria')->get_by_id($this->_get('id')); 
           return $this->build('servicio_info.php');
         }
    }

    // ----------------------------------------------------------------------
   
}
