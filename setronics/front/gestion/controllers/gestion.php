<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Gestion extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
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
        
        $client = new cliente(); 
        $this->_data['cliente'] = $client->join_related('imagen')->join_related('gestion_flota')->where('gestion_flota_id <>','')->get();  //$banners->get_banner();
        
        $gestion_flota = new gestion_flota(); 
        $this->_data['gestion_flota'] = $gestion_flota->join_related('imagen')->join_related('linea')->get();  //$banners->get_banner();
        
        $noticias = new noticia_relacionada(); 
        $this->_data['noticia_relacionada'] = $noticias->join_related('imagen')->join_related('parrafo')->join_related('gestion_flota')->where('gestion_flota_id <>','')->get();
        
        return $this->build('gestion.php');
    }

    // ----------------------------------------------------------------------
   
}
