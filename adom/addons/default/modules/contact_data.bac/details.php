<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Module_contact_data extends Module {

    public $version = '1.0';

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
        $this->dbforge->drop_table('contact_data');
        //$this->db->delete('settings', array('module' => 'contact_data'));
        // $this->load->library('files/files');
        // Files::create_folder(0, 'contact_data');

        $contact_data = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'order' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => true
            ),
            'direccion' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'barrio' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'ciudad' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'telefono' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'tel_cel' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'correo' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
			'map_url' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
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

        $this->dbforge->add_field($contact_data);
        $this->dbforge->add_key('id', TRUE);

        if ($this->dbforge->create_table('contact_data') AND
                //$this->db->insert('settings', $contact_data_setting) AND
                is_dir($this->upload_path . 'contact_data') OR @mkdir($this->upload_path . 'contact_data', 0777, TRUE)) {
            return TRUE;
        }
    }

    public function uninstall() {
        // $this->load->library('files/files');
        // $this->load->model('files/file_folders_m');
        // $folder = $this->file_folders_m->get_by('name', 'contact_data');
        // Files::delete_folder($folder->id);
        $this->dbforge->drop_table('contact_data');
        //$this->db->delete('settings', array('module' => 'contact_data'));

        return TRUE;
    }

    public function upgrade($old_version) {
        // Your Upgrade Logic
        return TRUE;
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
