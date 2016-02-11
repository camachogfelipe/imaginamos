<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Nosotros extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $redes = new\ redes();
        $this->_data['datos'] = $redes->get_redes();

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
        
        
        
        $this->db->select('cms_nosotros.*,cms_parrafo.titulo as parrafo_titulo, 
                           cms_parrafo.texto as parrafo_texto, 
                           cms_parrafo1.titulo as parrafo1_titulo, 
                           cms_parrafo1.texto as parrafo1_texto,
                           cms_imagen.path as imagen_path');                                                    
        $this->db->from('cms_nosotros');
        $this->db->join('cms_imagen', 'cms_imagen.id  = cms_nosotros.imagen_id');
        $this->db->join('cms_parrafo', 'cms_parrafo.id  = cms_nosotros.parrafo_id');
        $this->db->join('cms_parrafo as cms_parrafo1', 'cms_parrafo1.id  = cms_nosotros.parrafo1_id');
        
       $this->_data['nosotros'] = $this->getresult($this->db->get());
        //  $banners = new\ banners();
        $this->_data['dat_ban'] = array(); //$banners->get_banner();
        
        return $this->build('empresa.php');
    }

    // ----------------------------------------------------------------------
   
}
