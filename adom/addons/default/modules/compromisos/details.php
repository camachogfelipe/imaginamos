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
class Module_compromisos extends Module {

    public $version = '1.0';
    private $namespace = 'compromisos';
    private $slug_stream = 'compromisos';

    public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    // ----------------------------------------------------------------------

    public function info() {
        $sections['admin_compromisos'] = array(
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
                'en' => 'Nuestros Compromisos (Para empresas)',
                'es' => 'Nuestros Compromisos (Para empresas)'
            ),
            'description' => array(
                'en' => 'This is a PyroCMS module compromisos.',
                'es' => 'Administrador de compromisos principal.'
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
        $folder = $this->file_folders_m->get_by('slug', 'compromisos');

        if (empty($folder)) {
            $folder = Files::create_folder(0, 'compromisos');

            if (!empty($folder['data'])) {
                $folder = (object) $folder['data'];
            }
        }

        // ==== Create Streams Fields

        $fields = array(
            array(
                'name' => "lang:{$this->namespace}:name",
                'slug' => 'name',
                'namespace' => $this->namespace,
                'type' => 'text',
                'extra' => array('max_length' => 100),
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:description",
                'slug' => 'description',
                'namespace' => $this->namespace,
                'type' => 'wysiwyg',
                'extra' => array('editor_type' => 'advanced'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:image",
                'slug' => 'images',
                'namespace' => $this->namespace,
                'type' => 'bootstrap_image',
                'extra' => array(
                    'folder' => $folder->id,
                    'allowed_types' => 'gif|png|jpg|'
                ),
                'assign' => $this->slug_stream,
                'required' => true
            ),array(
                'name' => "lang:{$this->namespace}:name_inf",
                'slug' => 'name_inf',
                'namespace' => $this->namespace,
				'type' => 'text',
                'extra' => array('max_length' => 100),
				'instructions' => "Max. 100 caracteres",
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:description_inf",
                'slug' => 'description_inf',
                'namespace' => $this->namespace,
                'type' => 'wysiwyg',
                'extra' => array('editor_type' => 'advanced'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
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
        $menu['Para empresas']['Nuestros Compromisos'] = 'admin/compromisos';
    }

}