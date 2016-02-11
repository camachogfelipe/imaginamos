<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	Rss Module
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Module_Rss extends Module {

    public $version = '1.0';

    public function info() {
        return array(
            'name' => array(
                'en' => 'News from RSS',
                'es' => 'Noticias desde RSS',
            ),
            'description' => array(
                'en' => 'This is a PyroCMS module Rss.',
                'es' => 'Modulo para la creacion y vista de lectores RSS.'
            ),
            'frontend' => FALSE,
            'backend' => TRUE,
            
            'sections' => array(
                'rss' => array(
                    'name' => 'rss:rss', // These are translated from your language file
                    'uri' => 'admin/rss',
                    'shortcuts' => array(
                        'create' => array(
                            'name' => 'rss:create_rss',
                            'uri' => 'admin/rss/add_rss',
                            'class' => 'add'
                        )
                    )
                )
            )
        );
    }

    public function install() {
        $this->dbforge->drop_table('rss');
        $this->db->delete('settings', array('module' => 'rss'));

        $rss = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'url' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            )
        );

        $this->dbforge->add_field($rss);
        $this->dbforge->add_key('id', TRUE);

        if ($this->dbforge->create_table('rss')) {
            return TRUE;
        }
    }

    public function uninstall() {
        $this->dbforge->drop_table('rss');
        $this->db->delete('settings', array('module' => 'rss')); {
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
        $menu['Noticias'] = array(
            'Noticias' => 'admin/blog',
            'RSS' => 'admin/rss'
        );
    }

}

/* End of file details.php */
