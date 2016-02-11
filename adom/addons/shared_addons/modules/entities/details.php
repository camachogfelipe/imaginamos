<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	Entities Module
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Module_Entities extends Module {

    public $version = '1.0';

    public function info()
    {
        $info = array(
            'name' => array(
                'en' => 'Main Entities',
                'es' => 'Entidades Principales',
            ),
            'description' => array(
                'en' => 'This is a PyroCMS module Entities.',
                'es' => 'Los administradores prodran editar todas la entidades principales.'
            ),
            'frontend' => FALSE,
            'backend' => TRUE,
            'menu' => 'content',
            'roles' => array(
                'admin_countries', 'admin_cities', 'admin_buildings', 'admin_offices', 'admin_areas'
            )
        );
        $info['sections'] = array();
        if (function_exists('group_has_role'))
        {
            if (group_has_role('entities', 'admin_countries'))
            {
                $info['sections']['countries'] = array(
                    'name' => 'entities:countries', // These are translated from your language file
                    'uri' => 'admin/entities',
                    'shortcuts' => array(
                        'create' => array(
                            'name' => 'entities:create_contry',
                            'uri' => 'admin/entities/add_country',
                            'class' => 'add'
                        )
                    )
                );
            }
            if (group_has_role('entities', 'admin_cities'))
            {
                $info['sections']['cities'] = array(
                    'name' => 'entities:cities', // These are translated from your language file
                    'uri' => 'admin/entities/cities',
                    'shortcuts' => array(
                        'create' => array(
                            'name' => 'entities:create_city',
                            'uri' => 'admin/entities/cities/add_city',
                            'class' => 'add'
                        )
                    )
                );
            }
            if (group_has_role('entities', 'admin_buildings'))
            {
                $info['sections']['buildings'] = array(
                    'name' => 'entities:buildings', // These are translated from your language file
                    'uri' => 'admin/entities/buildings',
                    'shortcuts' => array(
                        'create' => array(
                            'name' => 'entities:create_building',
                            'uri' => 'admin/entities/buildings/add_building',
                            'class' => 'add'
                        )
                    )
                );
            }
            if (group_has_role('entities', 'admin_offices'))
            {
                $info['sections']['offices'] = array(
                    'name' => 'entities:offices', // These are translated from your language file
                    'uri' => 'admin/entities/offices',
                    'shortcuts' => array(
                        'create' => array(
                            'name' => 'entities:create_offices',
                            'uri' => 'admin/entities/offices/add_office',
                            'class' => 'add'
                        )
                    )
                );
            }
            if (group_has_role('entities', 'admin_areas'))
            {
                $info['sections']['areas'] = array(
                    'name' => 'entities:areas', // These are translated from your language file
                    'uri' => 'admin/entities/areas/index',
                    'shortcuts' => array(
                        'create' => array(
                            'name' => 'entities:create_area',
                            'uri' => 'admin/entities/areas/add',
                            'class' => 'add'
                        )
                    )
                );
            }
        }
        return $info;
    }

    public function install()
    {
        $this->_clear_info();

        $countries = array(
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

        $this->dbforge->add_field($countries);
        $this->dbforge->add_key('id', TRUE);
        $createContries = $this->dbforge->create_table('countries');

        $cities = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'country_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'key' => TRUE
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
        $this->dbforge->add_field($cities);
        $this->dbforge->add_key('id', TRUE);
        $createCities = $this->dbforge->create_table('cities');

        $buildings = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'city_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'key' => TRUE
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
        $this->dbforge->add_field($buildings);
        $this->dbforge->add_key('id', TRUE);
        $createBuildings = $this->dbforge->create_table('buildings');

        $admin_building = array(
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
            'building_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'key' => TRUE
            )
        );
        $this->dbforge->add_field($admin_building);
        $this->dbforge->add_key('id', TRUE);
        $createAdminBuildings = $this->dbforge->create_table('admin_building');

        $offices = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
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
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            )
        );
        $this->dbforge->add_field($offices);
        $this->dbforge->add_key('id', TRUE);
        $createOffices = $this->dbforge->create_table('offices');

        $offices_user = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'SMALLINT',
                'constraint' => 5,
                'key' => TRUE
            ),
            'office_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'key' => TRUE
            )
        );
        $this->dbforge->add_field($offices_user);
        $this->dbforge->add_key('id', TRUE);
        $createOfficesUser = $this->dbforge->create_table('offices_users');

        $areas = array(
            'id' => array(
                'type' => 'INT',
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            )
        );
        $this->dbforge->add_field($areas);
        $this->dbforge->add_key('id', TRUE);
        $createAreas = $this->dbforge->create_table('areas');

        $areas_user = array(
            'id' => array(
                'type' => 'INT',
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'SMALLINT',
                'constraint' => 5,
                'key' => TRUE
            ),
            'area_id' => array(
                'type' => 'INT',
                'key' => TRUE
            )
        );
        $this->dbforge->add_field($areas_user);
        $this->dbforge->add_key('id', TRUE);
        $createAreasUsers = $this->dbforge->create_table('areas_users');

        if ($createContries && $createCities && $createBuildings && $createAdminBuildings && $createOffices && $createOfficesUser && $createAreas && $createAreasUsers)
        {
            // First seeders
            $first_country_id = $this->db->insert('countries', array(
                'name' => 'Colombia',
                'slug' => 'colombia'
            ));

            if (empty($first_country_id))
            {
                return false;
            }

            $first_city_id = $this->db->insert('cities', array(
                'name' => 'Bogotá D.C.',
                'slug' => 'bogota',
                'country_id' => $first_country_id
            ));

            if (empty($first_city_id))
            {
                return false;
            }

            // Creando el grupo "administradores de edificios" si no existe
            $group_name = 'administradores-edicios';

            $group_exists = $this->ion_auth->get_group_by_name($group_name);
            if (empty($group_exists))
            {
                $this->db->insert('groups', array(
                    'name' => $group_name,
                    'description' => 'Administradores de edificios'
                ));
            }


            return true;
        }

        return false;
    }

    // ----------------------------------------------------------------------

    public function uninstall()
    {
        $this->_clear_info(); {
            return true;
        }
    }

    // ----------------------------------------------------------------------

    private function _clear_info()
    {
        // Check foreign keys false
        $this->db->query('SET foreign_key_checks = 0;');

        $this->dbforge->drop_table('countries');
        $this->dbforge->drop_table('cities');
        $this->dbforge->drop_table('buildings');
        $this->dbforge->drop_table('admin_building');
        $this->dbforge->drop_table('offices');
        $this->dbforge->drop_table('offices_users');
        $this->dbforge->drop_table('areas');
        $this->dbforge->drop_table('areas_users');

        $this->db->query('SET foreign_key_checks = 1;');

        $this->db->delete('settings', array('module' => 'entities'));
    }

    public function upgrade($old_version)
    {
        // Your Upgrade Logic
        return TRUE;
    }

    public function help()
    {
        // Return a string containing help info
        // You could include a file and return it here.
        return "No documentation has been added for this module.<br />Contact the module developer for assistance.";
    }

}

/* End of file details.php */
