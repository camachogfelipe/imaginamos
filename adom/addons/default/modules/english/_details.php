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
                'type' => 'file',
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
                'extra' => array('editor_type' => 'simple'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "limagen lateral 1",
                'slug' => "images_lateral1_{$this->namespace}",
                'namespace' => $this->namespace,
                'type' => 'file',
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
                'type' => 'file',
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
                'type' => 'textarea',
                'extra' => array('editor_type' => 'advanced'),
                'assign' => $this->slug_stream,
                'required' => true
            )
        );
        if (!$this->streams->fields->add_fields($fields)) {
            return false;
        }
        
        
       $page_type = array(
            "title" => "lang:{$this->namespace}:{$this->namespace}",
            "slug" => $this->slug_stream,
            "description" => "A simple page type {$this->namespace}",
            "theme_layout" => 'internas.html',
            "stream_id" => $stream_id,
            "body" => "<h2>{{title}}</h2>" . "\n\n" . "{{ body }}",
            "updated_on" => now()
        );

        if (!$this->db->insert("page_types", $page_type)) {
            return false;
        }

        $def_page_type_id = $this->db->insert_id();

        $user_id = $this->ion_auth->profile()->id;
        $this->db->insert("pages_{$this->slug_stream}", array("description_{$this->slug_stream}" => "{$this->namespace}", "created" => date("Y-m-d H:i:s"), "created_by" => $user_id));
        $entry_id = $this->db->insert_id();

        $page = array(
            "slug" => $this->slug_page,
            "title" =>"English",
            "uri" => $this->slug_page,
            "entry_id" => $entry_id,
            "parent_id" => 0,
            "type_id" => $def_page_type_id,
            "status" => "live",
            "created_on" => now(),
            "is_home" => false,
        );
        $this->db->insert("pages", $page);
        $paren_id = $this->db->insert_id(); 
       
        $this->db->insert("pages_{$this->slug_stream}", 
                array("description_{$this->slug_stream}" => "Contenido Editable", 
                      "created" => date("Y-m-d H:i:s"), 
                      "created_by" => $user_id));
        $entry_id = $this->db->insert_id();

        $page = array(
            "slug" => $this->slug_page,
            "title" => "English",
            "uri" => $this->slug_page,
            "entry_id" => $entry_id,
            "parent_id" => $paren_id,
            "type_id" => $def_page_type_id,
            "status" => "live",
            "created_on" => now(),
            "is_home" => false,
        );
        $this->db->insert("pages", $page);
        
        return TRUE;
        
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
        $this->dbforge->drop_table('english_contact');
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