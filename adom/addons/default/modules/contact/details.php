<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Module_contact extends Module {

    public $version = '1.0';

    public function info() {
        return array(
            'name' => array(
                'en' => 'Contáctanos'
            ),
            'description' => array(
                'en' => 'Contáctanos'
            ),
            'frontend' => true,
            'backend' => true,
            // 'menu' => 'content', // You can also place modules in their top level menu. For example try: 'menu' => 'contact',
            'sections' => array(
                'items' => array(
                    'name' => 'contact:items', // These are translated from your language file
                    'uri' => 'admin/contact',
//                    'shortcuts' => array(
//                        'create' => array(
//                            'name' => 'contact:create',
//                            'uri' => 'admin/contact/create',
//                            'class' => 'add'
//                        )
//                    )
                )
            )
        );
    }

    public function install() {
        $this->dbforge->drop_table('contact');
        //$this->db->delete('settings', array('module' => 'contact'));
        // $this->load->library('files/files');
        // Files::create_folder(0, 'contact');

        $contact = array(
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
            'nombre' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'empresa' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'celular' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'telefono' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'pais' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'ciudad' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'comentario' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        );

        // $contact_setting = array(
        // 	'slug' => 'contact_setting',
        // 	'title' => 'contact Setting',
        // 	'description' => 'A Yes or No option for the contact module',
        // 	'`default`' => '1',
        // 	'`value`' => '1',
        // 	'type' => 'select',
        // 	'`options`' => '1=Yes|0=No',
        // 	'is_required' => 1,
        // 	'is_gui' => 1,
        // 	'module' => 'contact'
        // 	);

        $this->dbforge->add_field($contact);
        $this->dbforge->add_key('id', TRUE);

        if ($this->dbforge->create_table('contact') AND
                //$this->db->insert('settings', $contact_setting) AND
                is_dir($this->upload_path . 'contact') OR @mkdir($this->upload_path . 'contact', 0777, TRUE)) {
            return TRUE;
        }
    }

    public function uninstall() {
        // $this->load->library('files/files');
        // $this->load->model('files/file_folders_m');
        // $folder = $this->file_folders_m->get_by('name', 'contact');
        // Files::delete_folder($folder->id);
        $this->dbforge->drop_table('contact');
        //$this->db->delete('settings', array('module' => 'contact'));

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
        $menu['Menu']['Contáctanos'] = 'admin/contact';
    }

}

/* End of file details.php */
