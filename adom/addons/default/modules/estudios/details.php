<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * In estudios details module
 *
 * @author 	Eduard Russy - Imaginamos Dev Team
 * @website	http://imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	In estudios Module
 */
class Module_estudios extends Module {

    public $version = '1.0';
    private $namespace = 'estudios';
    private $slug_stream = 'estudios';

    public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    // ----------------------------------------------------------------------

    public function info() {
        $sections['admin_estudios'] = array(
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
                'en' => 'Estudios',
                'es' => 'Estudios'
            ),
            'description' => array(
                'en' => 'Administrador de opciones de estudio.',
                'es' => 'Administrador de opciones de estudio Formulario Vacantes.'
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
        
         // add folder for video
       // $folder = Files::create_folder(0, $this->slug_stream);

        // ==== Create folder
        $folder = $this->file_folders_m->get_by('slug', 'estudios');

        if (empty($folder)) {
            $folder = Files::create_folder(0, 'estudios');

            if (!empty($folder['data'])) {
                $folder = (object) $folder['data'];
            }
        }

        // ==== Create Streams Fields

        $fields = array(
            array(
                'name' => "lang:{$this->namespace}:label",
                'slug' => 'opcion',
                'namespace' => $this->namespace,
                'type' => 'text',
                'extra' => array('max_length' => 50),
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            )
        );
        if (!$this->streams->fields->add_fields($fields)) {
            return false;
        }
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
        $menu['Home']['Estudios'] = 'admin/estudios';
    }

}