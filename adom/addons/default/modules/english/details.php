<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * In english details module
 *
 * @author 	Eduard Russy - Imaginamos Dev Team
 * @website	http://imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	In english Module
 */
class Module_english extends Module {

    public $version = '1.0';
    private $namespace = 'english';
    private $slug_stream = 'english';

    public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    // ----------------------------------------------------------------------

    public function info() {
        $sections['admin_english'] = array(
            'name' => $this->namespace . ':title',
            'uri' => "admin/{$this->namespace}",
//            'shortcuts' => array(
//                'create' => array(
//                    'name' => $this->namespace . ':new',
//                    'uri' => "admin/{$this->namespace}/create",
//                    'class' => 'add'
//                )
//            )
        );
        return array(
            'name' => array(
                'en' => 'english',
                'es' => 'english'
            ),
            'description' => array(
                'en' => 'This is a PyroCMS module english.',
                'es' => 'Administrador de english principal.'
            ),
            'frontend' => true,
            'backend' => true,
            'sections' => $sections
        );
    }

    public function install() {


        $this->_clear_info();

        if (!$this->streams->streams->add_stream("lang:{$this->namespace}:title", $this->slug_stream, $this->namespace))
            return false;

        // ==== Create folder
        $folder = $this->file_folders_m->get_by('slug', 'english');

        if (empty($folder)) {
            $folder = Files::create_folder(0, 'english');

            if (!empty($folder['data'])) {
                $folder = (object) $folder['data'];
            }
        }

        // ==== Create Streams Fields

        $fields = array(
            
            array(
                'name' => "Imagen",
                'slug' => "images_{$this->namespace}",
                'namespace' => $this->namespace,
                'type' => 'bootstrap_image',
                'extra' => array(
                    'folder' => $folder->id,
                    'allowed_types' => 'gif|png|jpg|'
                ),
                'assign' => $this->slug_stream,
                'required' => true
            ),              
            array(
                'name' => "Descripción",
                'slug' => "description_{$this->namespace}",
                'namespace' => $this->namespace,
                'type' => 'wysiwyg',
                'extra' => array('editor_type' => 'advanced'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "Imagen lateral 1",
                'slug' => "images_lateral1_{$this->namespace}",
                'namespace' => $this->namespace,
                'type' => 'bootstrap_image',
                'extra' => array(
                    'folder' => $folder->id,
                    'allowed_types' => 'gif|png|jpg|'
                ),
                'assign' => $this->slug_stream,
                'required' => true
            ),  
            array(
                'name' => "Imagen lateras 2",
                'slug' => "images_lateral2_{$this->namespace}",
                'namespace' => $this->namespace,
                'type' => 'bootstrap_image',
                'extra' => array(
                    'folder' => $folder->id,
                    'allowed_types' => 'gif|png|jpg|'
                ),
                'assign' => $this->slug_stream,
                'required' => true
            ),              
           array(
                'name' => "Texto formulario",
                'slug' => "textocontact_{$this->namespace}",
                'namespace' => $this->namespace,
                'type' => 'wysiwyg',
                'extra' => array('editor_type' => 'advanced'),
                'assign' => $this->slug_stream,
                'required' => true
            )
        );
        if (!$this->streams->fields->add_fields($fields)) {
            return false;
        }
         if (!$this->db->table_exists('english_contact')) {
             return false;
         }
       $this->db->query("INSERT INTO default_english (id, created, updated, created_by, ordering_count, images_english, description_english, images_lateral1_english, images_lateral2_english, textocontact_english) VALUES('1', '2013-09-14 23:46:01', '2013-09-16 00:07:21', 2, 1, 'cdd836703dfd42a', '<p class=\"main_p\"  none; margin: 0px 0px 10px; padding: 0px; font-size: 14px; text-align: justify; color: rgb(102, 102, 102); font-family: pt_sansregular; line-height: normal;\">ADOM Home Care is a Colombian company that has been serving Bogot&aacute; for over 35 years. We strive to provide accurate, cost effective and compassionate care to patients at home, because we firmly believe that healing is better when they feel confortable and supported by their family.</p>\n\n<p class=\"main_p\"  none; margin: 0px 0px 10px; padding: 0px; font-size: 14px; text-align: justify; color: rgb(102, 102, 102); font-family: pt_sansregular; line-height: normal;\">Our team of caregivers includes the following:</p>\n\n<ul class=\"list_serv\"  none; margin: 20px 0px 0px; padding-right: 0px; padding-left: 0px; list-style: none; color: rgb(0, 0, 0); font-family: pt_sansregular; font-size: medium; line-height: normal;\">\n <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;\">Doctors</li>\n <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;\">Nurses</li>\n <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;\">Certified Nursing Assistants</li>\n <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;\">Therapists</li>\n</ul>\n\n<p class=\"main_p\"  none; margin: 0px 0px 10px; padding: 0px; font-size: 14px; text-align: justify; color: rgb(102, 102, 102); font-family: pt_sansregular; line-height: normal;\">We work for several international well-known hotels, health and insurance companies, providing medical assistance to their clients and travellers when they visit Bogot&aacute;. All of our services are tailored to fit individual clients&rsquo; needs and we attend to patients at home or wherever they are.&nbsp;<br  none;\" />\n<br  none;\" />\nPlease call or email our office to find out how ADOM Home Care can improve the quality of life for your clients.&nbsp;<br  none;\" />\n<br  none;\" />\n<span  none; font-style: inherit; font-weight: 600;\">Proud to be recognized as the first Home Care provider in Colombia and to have national and international quality certifications.</span></p>\n', '523e8b149eeaf45', '2a22c2cbc0fb5f9', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make. ');");
        
        
        return true;
    }

    public function uninstall() {
        // This is a core module, lets keep it around.
        return $this->_clear_info();
    }

    public function upgrade($old_version) {
        return true;
    }

    /**
     * Clear info of module (Reset)
     * 
     * @return boolean
     */
    private function _clear_info() {
        // Check foreign keys false
        $this->db->query('SET foreign_key_checks = 0;');
        $this->streams->utilities->remove_namespace($this->namespace);
        if ($this->db->table_exists('data_streams')) {
            $this->db->where('stream_namespace', $this->namespace)->delete('data_streams');
        };
        {
            $this->db->query('SET foreign_key_checks = 1;');
            return true;
        }
    }
    
   public function admin_menu(&$menu) {
        $menu['Menu']['English'] = 'admin/english';
    }

}