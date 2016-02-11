<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Module_work_us extends Module {

    public $version = '1.0';

    public function info() {
        return array(
            'name' => array(
                'en' => 'work_us',
                'es' => 'Trabaje con nosotros'
            ),
            'description' => array(
                'en' => 'Modulo para el formulario de trabaje con nosotros'
            ),
            'frontend' => true,
            'backend' => true,
            'menu' => 'content', // You can also place modules in their top level menu. For example try: 'menu' => 'work_us',
            'sections' => array(
                'items' => array(
                    'name' => 'work_us:items', // These are translated from your language file
                    'uri' => 'admin/work_us',
//                    'shortcuts' => array(
//                        'create' => array(
//                            'name' => 'work_us:create',
//                            'uri' => 'admin/work_us/create',
//                            'class' => 'add'
//                        )
//                    )
                )
            )
        );
    }

    public function install() {
        $this->dbforge->drop_table('work_us');
        $this->dbforge->drop_table('charges');
        $this->db->delete('settings', array('module' => 'work_us'));
        $this->load->library('files/files');
        Files::create_folder(0, 'work_us');


        $charges = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            )
        );
        $this->dbforge->add_field($charges);
        $this->dbforge->add_key('id', TRUE);
        if (!$this->dbforge->create_table('charges'))
            return FALSE;


        $work_us = array(
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
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'date_birth' => array(
                'type' => 'DATE',
                'null' => true
            ),
            'document_type' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => true
            ),
            'document' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'address' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'tel' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'tel_mobile' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'country_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => true
            ),
            'city_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => true
            ),
            'neighborhood' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'charge_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => false,
                'key' => TRUE
            ),
            'schooling_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => true
            ),
            'is_student' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => true
            ),
            'career' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'semester' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'university' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'company_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'company_tel' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'company_career' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'company_chief' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
            'company_admission_date' => array(
                'type' => 'DATE',
                'null' => true
            ),
            'company_retirement_date' => array(
                'type' => 'DATE',
                'null' => true
            ),
            'company_reason_leaving' => array(
                'type' => 'TEXT',
                'null' => true
            ),
            'file' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ),
        );

        $work_us_setting = array(
            'slug' => 'work_us_setting',
            'title' => 'work_us Setting',
            'description' => 'A Yes or No option for the work_us module',
            '`default`' => '1',
            '`value`' => '1',
            'type' => 'select',
            '`options`' => '1=Yes|0=No',
            'is_required' => 1,
            'is_gui' => 1,
            'module' => 'work_us'
        );

        $this->dbforge->add_field($work_us);
        $this->dbforge->add_key('id', TRUE);

        if ($this->dbforge->create_table('work_us') AND
                $this->db->insert('settings', $work_us_setting) AND
                is_dir($this->upload_path . 'work_us') OR @mkdir($this->upload_path . 'work_us', 0777, TRUE)) {
            return TRUE;
        }
    }

    public function uninstall() {

        $this->dbforge->drop_table('work_us');
        $this->dbforge->drop_table('charges');
        $this->db->delete('settings', array('module' => 'work_us'));

        // Delete the forlder 
        $this->load->library('files/files');
        $this->load->model('files/file_folders_m');
        $folder = $this->file_folders_m->get_by('name', 'work_us');
        $folder_c = $folder_c = Files::folder_contents($folder->id);

        foreach ($folder_c["data"]["file"] as $file) {
            Files::delete_file($file->id);
        }
        Files::delete_folder($folder->id); {
            return TRUE;
        }
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

}

/* End of file details.php */
