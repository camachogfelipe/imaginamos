<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * In Events details module
 *
 * @author 	Eduard Russy - Imaginamos Dev Team
 * @website	http://imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	In Events Module
 */
class Module_properties extends Module {

    public $version = '1.0';
    private $namespace = 'properties';
    private $slug_stream = 'properties_web';

    public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    // ----------------------------------------------------------------------

    public function info() {
        $sections['admin_properties'] = array(
            'name' => $this->namespace . ':title',
            'uri' => "admin/{$this->namespace}",
            'shortcuts' => array(
                'create' => array(
                    'name' => $this->namespace . ':new',
                    'uri' => "admin/{$this->namespace}/create",
                    'class' => 'add'
                )
            )
        );
        $sections['admin_types'] = array(
            'name' => $this->namespace . ':title_types',
            'uri' => "admin/{$this->namespace}/types",
            'shortcuts' => array(
                'create' => array(
                    'name' => $this->namespace . ':new_type',
                    'uri' => "admin/{$this->namespace}/types/create",
                    'class' => 'add'
                )
            )
        );

        return array(
            'name' => array(
                'en' => 'Propertiees',
                'es' => 'Inmuebles'
            ),
            'description' => array(
                'en' => 'This is a PyroCMS module properties.',
                'es' => 'Directorio de inmuebles.'
            ),
            'frontend' => true,
            'backend' => true,
            'menu' => 'content',
            'sections' => $sections
        );
    }

    public function install() {


        $this->_clear_info();

        if (!$this->streams->streams->add_stream("lang:{$this->namespace}:title", $this->slug_stream, $this->namespace))
            return false;

        // ==== Create folder
        $folder = $this->file_folders_m->get_by('slug', 'properties');

        if (empty($folder)) {
            $folder = Files::create_folder(0, 'Properties');

            if (!empty($folder['data'])) {
                $folder = (object) $folder['data'];
            }
        }

        // ==== Create Streams Fields

        $fields = array(
            // ---- Events ----
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
                'name' => "lang:{$this->namespace}:country",
                'slug' => 'country_id',
                'namespace' => $this->namespace,
                'type' => 'choice_db',
                'extra' => array('choice_table_name' => 'countries', 'field_key' => 'id', 'field_value' => 'name', 'choice_type' => 'dropdown'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:city",
                'slug' => 'city_id',
                'namespace' => $this->namespace,
                'type' => 'city',
                'extra' => array('country_name' => 'country_id'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:building",
                'slug' => 'building_id',
                'namespace' => $this->namespace,
                'type' => 'building_entity',
                'extra' => array('city_field_name' => 'city_id'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:area",
                'slug' => 'area_id',
                'namespace' => $this->namespace,
                'type' => 'choice_db',
                'extra' => array('choice_table_name' => 'areas', 'field_key' => 'id', 'field_value' => 'name', 'choice_type' => 'dropdown'),
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:price",
                'slug' => 'price',
                'namespace' => $this->namespace,
                'type' => 'text',
                'extra' => array('max_length' => 100),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:salerental",
                'slug' => 'salerental',
                'namespace' => $this->namespace,
                'type' => 'choice',
                'extra' => array('choice_data' => '1 : Venta
                    2 : Alquiler', 'choice_type' => 'dropdown'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:customer",
                'slug' => 'customer',
                'namespace' => $this->namespace,
                'type' => 'choice_db',
                'extra' => array('choice_table_name' => 'customers_types', 'field_key' => 'id', 'field_value' => 'name', 'choice_type' => 'dropdown'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:types",
                'slug' => 'properties_types',
                'namespace' => $this->namespace,
                'type' => 'choice_db',
                'extra' => array('choice_table_name' => $this->slug_stream . '_types', 'field_key' => 'id', 'field_value' => 'name', 'choice_type' => 'dropdown'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:sector",
                'slug' => 'sector',
                'namespace' => $this->namespace,
                'type' => 'choice',
                'extra' => array('choice_data' => '1 : uno
                    2 : dos', 'choice_type' => 'dropdown'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:description",
                'slug' => 'description',
                'namespace' => $this->namespace,
                'type' => 'wysiwyg',
                'extra' => array('editor_type' => 'simple'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:state",
                'slug' => 'state',
                'namespace' => $this->namespace,
                'type' => 'choice',
                'extra' => array('choice_data' => '1 : Activo
                    0 : Inactivo', 'choice_type' => 'dropdown'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:multiple_files_label",
                'slug' => 'images',
                'namespace' => $this->namespace,
                'type' => 'multiple_images',
                'extra' => array(
                    'table_name' => $this->slug_stream . '_files',
                    'folder' => $folder->id,
                    'resource_id_column' => 'property_id',
                    'max_limit_images' => 5
                ),
                'assign' => $this->slug_stream
            )
        );


        if (!$this->streams->fields->add_fields($fields)) {
            return false;
        }

        // ==== Install tables
        $tables = array(
            $this->slug_stream . '_files' => array(
                'property_id' => array('type' => 'INT', 'constraint' => 11, 'null' => false, 'primary' => true),
                'file_id' => array('type' => 'CHAR', 'constraint' => 15, 'null' => false, 'primary' => true),
            )
        );

        if (!$this->install_tables($tables)) {
            return false;
        }


        /** Create table type_properties * */
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

        if (!$this->dbforge->create_table($this->slug_stream . '_types')) {
            return FALSE;
        }
        /** Create table customers_types * */
        $customer_type = array(
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

        $this->dbforge->add_field($customer_type);
        $this->dbforge->add_key('id', TRUE);

        if (!$this->dbforge->create_table('customers_types')) {
            return FALSE;
        }

        // ==== Relationships FOREIGN KEYS
        $foreign_key_format = "ALTER TABLE {$this->db->dbprefix}%s ADD CONSTRAINT %s FOREIGN KEY (%s) references {$this->db->dbprefix}%s(id) ON DELETE %s ON UPDATE %s";

        $foreigns_keys = array(
            // Files => module
            array(
                $this->slug_stream . '_files',
                'properties_files_property_' . rand_string(4),
                'property_id',
                $this->slug_stream,
                'CASCADE',
                'CASCADE'
            ),
            // Files => files
            array(
                $this->slug_stream . '_files',
                'properties_files_file_' . rand_string(4),
                'file_id',
                'files',
                'CASCADE',
                'CASCADE'
            )
        );

        foreach ($foreigns_keys as $fk) {
            if (!$this->db->query(vsprintf($foreign_key_format, $fk))) {
                return false;
            }
        }

        // INSERT REG
        $first_customers_types = $this->db->insert('customers_types', array(
            'name' => 'Alianza inmobiliaria',
            'slug' => 'alianza-inmobiliaria'
                ));
        $first_customers_types = $this->db->insert('customers_types', array(
            'name' => 'Cliente directo',
            'slug' => 'cliente-directo'
                ));
        if (empty($first_customers_types)) {
            return false;
        }

        $first_properties_types = $this->db->insert($this->slug_stream . '_types', array(
            'name' => 'Local',
            'slug' => 'local'
                ));
        $first_properties_types = $this->db->insert($this->slug_stream . '_types', array(
            'name' => 'Oficina',
            'slug' => 'oficina'
                ));
        if (empty($first_properties_types)) {
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
        // delete tables
        $this->dbforge->drop_table($this->slug_stream . '_types');
        $this->dbforge->drop_table('customers_types');

        // Check foreign keys false
        $this->db->query('SET foreign_key_checks = 0;');
        $this->streams->utilities->remove_namespace($this->namespace);
        if ($this->db->table_exists('data_streams')) {
            $this->db->where('stream_namespace', $this->namespace)->delete('data_streams');
        }; {
            $this->db->query('SET foreign_key_checks = 1;');
            return true;
        }
    }

}