<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Module_contact_data extends Module {

		public $version = '1.1';
    private $namespace = 'contact_data';
    private $slug_stream = 'contact_data';
		
		public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    public function info() {
        return array(
            'name' => array(
                'en' => 'contact_data',
                'es' => 'Datos de contacto'
            ),
            'description' => array(
                'en' => ''
            ),
            'frontend' => true,
            'backend' => true,         
            'sections' => array(
                'items' => array(
                    'name' => 'contact_data:items', // These are translated from your language file
                    'uri' => 'admin/contact_data',
//                    'shortcuts' => array(
//                        'create' => array(
//                            'name' => 'contact_data:create',
//                            'uri' => 'admin/contact_data/create',
//                            'class' => 'add'
//                        )
//                    )
                )
            )
        );
    }

    public function install() {
        $this->_clear_info();

        if (!$this->streams->streams->add_stream("lang:{$this->namespace}:title", $this->slug_stream, $this->namespace))
            return false;
        
         // add folder for video
       // $folder = Files::create_folder(0, $this->slug_stream);

        // ==== Create folder
        $folder = $this->file_folders_m->get_by('slug', 'banner');

        if (empty($folder)) {
            $folder = Files::create_folder(0, 'banner');

            if (!empty($folder['data'])) {
                $folder = (object) $folder['data'];
            }
        }

        // ==== Create Streams Fields

        $fields = array(
						array(
                'name' => "order",
                'slug' => 'order',
                'namespace' => $this->namespace,
                'type' => 'number',
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
						array(
                'name' => "direccion",
                'slug' => 'direccion',
                'namespace' => $this->namespace,
                'type' => 'text',
								'extra' => array('max_length' => 255),
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
						array(
                'name' => "barrio",
                'slug' => 'barrio',
                'namespace' => $this->namespace,
                'type' => 'text',
								'extra' => array('max_length' => 255),
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
						array(
                'name' => "ciudad",
                'slug' => 'ciudad',
                'namespace' => $this->namespace,
                'type' => 'text',
								'extra' => array('max_length' => 255),
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
						array(
                'name' => "telefono",
                'slug' => 'telefono',
                'namespace' => $this->namespace,
                'type' => 'text',
								'extra' => array('max_length' => 255),
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
						array(
                'name' => "tel_cel",
                'slug' => 'tel_cel',
                'namespace' => $this->namespace,
                'type' => 'text',
								'extra' => array('max_length' => 255),
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
						array(
                'name' => "correo",
                'slug' => 'correo',
                'namespace' => $this->namespace,
                'type' => 'text',
								'extra' => array('max_length' => 255),
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
						array(
                'name' => "map_url",
                'slug' => 'map_url',
                'namespace' => $this->namespace,
                'type' => 'text',
								'extra' => array('max_length' => 500),
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
						array(
                'name' => "parrafo_contacto",
                'slug' => 'parrafo_contacto',
                'namespace' => $this->namespace,
                'type' => 'wysiwyg',
                'extra' => array('editor_type' => 'simple'),
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
        );

        // $contact_data_setting = array(
        // 	'slug' => 'contact_data_setting',
        // 	'title' => 'contact_data Setting',
        // 	'description' => 'A Yes or No option for the contact_data module',
        // 	'`default`' => '1',
        // 	'`value`' => '1',
        // 	'type' => 'select',
        // 	'`options`' => '1=Yes|0=No',
        // 	'is_required' => 1,
        // 	'is_gui' => 1,
        // 	'module' => 'contact_data'
        // 	);

        
        if (!$this->streams->fields->add_fields($fields)) {
            return false;
        }
        return true;
    }

    public function uninstall() {
        return $this->_clear_info();

        return TRUE;
    }

    public function upgrade($old_version) {
        // Your Upgrade Logic
        return TRUE;
    }
		
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

    public function help() {
        // Return a string containing help info
        // You could include a file and return it here.
        return "No documentation has been added for this module.<br />Contact the module developer for assistance.";
    }

    public function admin_menu(&$menu) {
        $menu['Home']['Datos de contacto'] = 'admin/contact_data';
    }

}

/* End of file details.php */
