<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * In Donde details module
 *
 * @author 	Eduard Russy - Imaginamos Dev Team
 * @website	http://imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	In Donde Module
 */
class Module_donde extends Module {

    public $version = '1.0';
    private $namespace = 'donde';
    private $slug_stream = 'donde';

    public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    // ----------------------------------------------------------------------

    public function info() {
        $sections['admin_donde'] = array(
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
                'en' => 'Donde',
                'es' => 'Donde'
            ),
            'description' => array(
                'en' => 'This is a PyroCMS module donde.',
                'es' => 'Administrador de donde principal.'
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
        $folder = $this->file_folders_m->get_by('slug', 'donde');

        if (empty($folder)) {
            $folder = Files::create_folder(0, 'donde');

            if (!empty($folder['data'])) {
                $folder = (object) $folder['data'];
            }
        }

        // ==== Create Streams Fields

        $fields = array(
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
                'instructions' => "940px × 400px",        
                'assign' => $this->slug_stream,
                'required' => true
            )
        );
        if (!$this->streams->fields->add_fields($fields)) {
            return false;
        }
        $datenow = new DateTime('NOW');  
        $now = $datenow->format('Y-m-d H:i:s');
        $this->db->query("INSERT INTO default_donde (id, created, updated, created_by, ordering_count, description, images) VALUES (1, '" . $now . "', '" . $now . "', 2, 1, 'DEFAULT_CONTENIDO : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec vulputate tellus. Maecenas laoreet condimentum nibh, id placerat quam mattis vitae. Donec non lobortis lectus. Mauris vitae posuere massa. Maecenas tristique sapien eget risus blandit vehicula. Vestibulum cursus augue vitae est molestie consequat.<br />\n<br />\nEtiam ut ante volutpat, ornare sapien sed, eleifend risus. Sed porta consequat nisi. Mauris magna dui, congue ut felis id, malesuada pellentesque eros. Integer ullamcorper tempus quam, a tincidunt risus pellentesque at. Integer tempor ante diam, non tempus nunc porttitor ut',NULL)");
        
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
        $var = '¿Dónde Atendemos?';
        $var2 = '¿Quiénes Somos?';
        $menu["{$var2}"]["{$var}"] = 'admin/donde';
    }

}