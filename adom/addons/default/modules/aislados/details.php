<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * In Banner details module
 *
 * @author 	Eduard Russy - Imaginamos Dev Team
 * @website	http://imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	In Banner Module
 */
class Module_aislados extends Module {

    public $version = '1.0';
    private $namespace = 'aislados';
    private $slug_stream = 'aislados';

    public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    // ----------------------------------------------------------------------

    public function info() {
        $sections['admin_aislados'] = array(
            'name' => $this->namespace . ':title',
            'uri' => "admin/{$this->namespace}",
            'shortcuts' => array(
                'create' => array(
                    'name' => $this->namespace . ':new',
                    'uri' => "admin/{$this->namespace}/create",
                    'class' => 'add'
                )
            )
        );
        return array(
            'name' => array(
                'en' => 'Imagenes Home(chat,etiquta Barner)',
                'es' => 'Imagenes Home(chat,etiquta Barner)'
            ),
            'description' => array(
                'en' => 'Administrador de Imagenes Home(chat,etiquta Barner).',
                'es' => 'Administrador de Imagenes Home(chat,etiquta Barner).'
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
        $folder = $this->file_folders_m->get_by('slug', 'aislados');

        if (empty($folder)) {
            $folder = Files::create_folder(0, 'aislados');

            if (!empty($folder['data'])) {
                $folder = (object) $folder['data'];
            }
        }

        // ==== Create Streams Fields

        $fields = array(
             array(
                'name' => "lang:{$this->namespace}:etiqueta_img",
                'slug' => 'etiqueta_img',
                'namespace' => $this->namespace,
                'type' => 'bootstrap_image',
                'extra' => array(
                    'folder' => $folder->id,
                    'allowed_types' => 'gif|png|jpg'
                ),
                'instructions' => "200px × 200px",        
                'assign' => $this->slug_stream,
          
            ),  
            array(
                'name' => "lang:{$this->namespace}:chat_img",
                'slug' => 'chat_img',
                'namespace' => $this->namespace,
                'type' => 'bootstrap_image',
                'extra' => array(
                    'folder' => $folder->id,
                    'allowed_types' => 'gif|png|jpg'
                ),
                'instructions' => "200px × 200px",        
                'assign' => $this->slug_stream,
              
            )          
        );
        if (!$this->streams->fields->add_fields($fields)) {
            return false;
        }
        $pqr = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'created' => array(
                'type' => 'datetime'
            ),
            'chat_img' => array(
                'type' => 'CHAR',
                'constraint' => '15'
            ),
            'etiqueta_img' => array(
                'type' => 'CHAR',
                'constraint' => '15'
            )
        );

        $this->dbforge->add_field($pqr);
        $this->dbforge->add_key('id', TRUE);
        if(!$this->dbforge->create_table($this->namespace,TRUE))
             return false;
       $tm = new DateTime("NOW");
        $this->db->query("INSERT INTO default_aislados(id, created, chat_img, etiqueta_img) VALUES ('1','".$tm->format('Y-m-d H:i:s')."',NULL,NULL);");

        
        
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
        $menu['Home']['Imagenes Home(chat,etiquta barner)'] = 'admin/aislados';
    }
    
  
}