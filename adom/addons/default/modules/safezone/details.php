<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	Safe Zone Module
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Module_Safezone extends Module {

    public $version = '1.0';

    public function info() {
        $info = array(
            'name' => array(
                'en' => 'Safe Zone',
                'es' => 'Zona Segura',
            ),
            'description' => array(
                'en' => 'Users Zone.',
                'es' => 'Zona de Usuarios.'
            ),
            'frontend' => FALSE,
            'backend' => TRUE,
            'menu' => 'content'
        );
        $info['sections'] = array();
        $info['sections']['safezone'] = array(
            'name' => 'safezone:docs', // These are translated from your language file
            'uri' => 'admin/safezone',
            'shortcuts' => array(
                'create' => array(
                    'name' => 'safezone:create_docs',
                    'uri' => 'admin/safezone/create',
                    'class' => 'add'
                )
            )
        );
        $info['sections']['type_files'] = array(
            'name' => 'safezone:type', // These are translated from your language file
            'uri' => 'admin/safezone/types',
            'shortcuts' => array(
                'create' => array(
                    'name' => 'safezone:create_types',
                    'uri' => 'admin/safezone/types/add_types',
                    'class' => 'add'
                )
            )
        );
        $info['sections']['user'] = array(
            'name' => 'safezone:users', // These are translated from your language file
            'uri' => 'admin/users',
        );
        return $info;
    }

    public function install() {
        $this->dbforge->drop_table('type_files');
        $this->dbforge->drop_table('files_type_files');

        /** validate module pqr exist * */
        $this->db->delete('settings', array('module' => 'safezone'));
        if (!module_installed('pqr')) {
            $this->session->set_flashdata('notice', 'Necesitas instalar el PQR.');
            return false;
        }


        /** Create table type_files * */
        $type = array(
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
                'constraint' => '255'
            )
        );

        $this->dbforge->add_field($type);
        $this->dbforge->add_key('id', TRUE);
        $table_type_files = $this->dbforge->create_table('type_files');
        /** Create table  files_type_files * */
        $type_file = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'file_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'key' => TRUE
            ),
            'type_file_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'key' => TRUE
            )
        );

        $this->dbforge->add_field($type_file);
        $this->dbforge->add_key('id', TRUE);
        $table_files_type_files = $this->dbforge->create_table('files_type_files');

        /* create folder for document´s module */
        $this->load->library('files/files');
        Files::create_folder(0, 'safezone');
        if ($table_type_files && $table_files_type_files) {
            return TRUE;
        }
    }

    public function uninstall() {
        /** delete the tables * */
        $this->dbforge->drop_table('type_files');
        $this->dbforge->drop_table('files_type_files');
        /** Delete the module * */
        $this->db->delete('settings', array('module' => 'safezone'));
        /** Delete the forlder * */
        $this->load->library('files/files');
        $f = $this->db->where('name', 'safezone')->get('file_folders')->row();
        $folder_c = Files::folder_contents($f->id);
        foreach ($folder_c['data']['file'] as $file) {
            Files::delete_file($file->id);
        }
        Files::delete_folder($f->id);
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

}

/* End of file details.php */
