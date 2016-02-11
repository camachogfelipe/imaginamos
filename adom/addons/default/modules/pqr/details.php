<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	PQR Module
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Module_Pqr extends Module {

    public $version = '1.0';

    public function info() {
        $info = array(
            'name' => array(
                'en' => 'PQR',
                'es' => 'PQR',
            ),
            'description' => array(
                'en' => 'This is a PyroCMS module PQR.',
                'es' => 'Los administradores prodran ver y reponder a los pqr que generen los usuarios.'
            ),
            'frontend' => TRUE,
            'backend' => TRUE,
            
            'roles' => array(
                'admin_pqr', 'admin_status_pqr', 'admin_type_pqr'
            )
        );
        $info['sections'] = array();
        if (function_exists('group_has_role')) {
            if (group_has_role('pqr', 'admin_pqr')) {
                $info['sections']['pqr'] = array(
                    'name' => 'pqr:pqr', // These are translated from your language file
                    'uri' => 'admin/pqr'
                );
            }
            if (group_has_role('pqr', 'admin_status_pqr')) {
                $info['sections']['pqr_status'] = array(
                    'name' => 'pqr:status', // These are translated from your language file
                    'uri' => 'admin/pqr/status',
                    'shortcuts' => array(
                        'create' => array(
                            'name' => 'pqr:create_status',
                            'uri' => 'admin/pqr/status/add_status',
                            'class' => 'add'
                        )
                    )
                );
            }
            if (group_has_role('pqr', 'admin_type_pqr')) {
                $info['sections']['pqr_type'] = array(
                    'name' => 'pqr:type', // These are translated from your language file
                    'uri' => 'admin/pqr/type',
                    'shortcuts' => array(
                        'create' => array(
                            'name' => 'pqr:create_type',
                            'uri' => 'admin/pqr/type/add_type',
                            'class' => 'add'
                        )
                    )
                );
            }
        }

        return $info;
    }

    public function install() {
        
        if(!module_installed('entities')){
           $this->session->set_flashdata('notice', 'Necesitas instalar el modulo Entidades Principales.');
           return false;
        }
        
        $this->dbforge->drop_table('pqr');
        $this->dbforge->drop_table('pqr_type');
        $this->dbforge->drop_table('pqr_status');
        $this->dbforge->drop_table('pqr_answer');
        $this->db->delete('settings', array('module' => 'pqr'));

        $pqr = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'key' => TRUE
            ),
            'pqr_type_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'key' => TRUE
            ),
            'pqr_status_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'key' => TRUE
            ),
            'building_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'key' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'comment' => array(
                'type' => 'TEXT'
            ),
            'created_on' => array(
                'type' => 'DATETIME'
            )
        );

        $this->dbforge->add_field($pqr);
        $this->dbforge->add_key('id', TRUE);
        $create_pqr = $this->dbforge->create_table('pqr');

        $pqr_type = array(
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
        $this->dbforge->add_field($pqr_type);
        $this->dbforge->add_key('id', TRUE);
        $create_pqr_type = $this->dbforge->create_table('pqr_type');

        $pqr_status = array(
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
        $this->dbforge->add_field($pqr_status);
        $this->dbforge->add_key('id', TRUE);
        $create_pqr_status = $this->dbforge->create_table('pqr_status');

        $pqr_answer = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'key' => TRUE
            ),
            'pqr_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'key' => TRUE
            ),
            'answer' => array(
                'type' => 'TEXT'
            ),
            'created_on' => array(
                'type' => 'DATETIME'
            )
        );
        $this->dbforge->add_field($pqr_answer);
        $this->dbforge->add_key('id', TRUE);
        $create_pqr_answer = $this->dbforge->create_table('pqr_answer');

        if ($create_pqr && $create_pqr_type && $create_pqr_status && $pqr_answer) {
            return TRUE;
        }
    }

    public function uninstall() {
        $this->dbforge->drop_table('pqr');
        $this->dbforge->drop_table('pqr_type');
        $this->dbforge->drop_table('pqr_status');
        $this->dbforge->drop_table('pqr_answer');
        $this->db->delete('settings', array('module' => 'pqr'));
        {
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
     public function admin_menu(&$menu) {
        $menu['Pqr'] = array(
            'PQR' => 'admin/pqr'
        );
    }
    

}

/* End of file details.php */
