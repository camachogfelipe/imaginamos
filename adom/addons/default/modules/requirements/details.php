<?php

/**
 * This is a Services module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	Services Module
 */
defined("BASEPATH") or exit("No direct script access allowed");

class Module_Requirements extends Module {

    public $version = "1.0";
    private $namespace = 'requirements';
    private $slug_stream = 'requirements';
    

    public function __construct() {
        $this->load->driver('Streams');
    }

    public function info() {
        $info = array(
            "name" => array(
                "en" => $this->namespace,
                "es" => "Requirements",
            ),
            "description" => array(
                "en" => "This is a PyroCMS module {$this->namespace}.",
                "es" => "Los administradores prodran ver y crear los {$this->namespace}."
            ),
            "frontend" => TRUE,
            "backend" => TRUE,
            "menu" => "content"
        );
        $info["sections"] = array();
        $info["sections"][$this->slug_stream] = array(
            "name" => "{$this->namespace}:{$this->namespace}", // These are translated from your language file
            "uri" => "admin/{$this->namespace}",
//            "shortcuts" => array(
//                "create" => array(
//                    "name" => "{$this->namespace}:create_{$this->namespace}",
//                    "uri" => "admin/{$this->namespace}/create",
//                    "class" => "add"
//                )
//            )
        );
        return $info;
    }

    public function install() {
        // load driver for streams an fields
        $this->uninstall(1);

        if (!$this->streams->streams->add_stream("lang:{$this->namespace}:title", $this->slug_stream, $this->namespace))
            return false;

        $fields = array(
            array(
                'name' => "lang:{$this->namespace}:country",
                'slug' => "country_id_{$this->slug_stream}",
                'namespace' => $this->namespace,
                'type' => 'choice_db',
                'extra' => array('choice_table_name' => 'countries', 'field_key' => 'id', 'field_value' => 'name', 'choice_type' => 'dropdown'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:city",
                'slug' => "city_id_{$this->slug_stream}",
                'namespace' => $this->namespace,
                'type' => 'city',
                'extra' => array('country_name' => "country_id_{$this->slug_stream}"),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:building",
                'slug' => 'building_id_' . $this->slug_stream,
                'namespace' => $this->namespace,
                'type' => 'building_entity',
                'extra' => array('city_field_name' => 'city_id_' . $this->slug_stream),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:office",
                'slug' => 'office_id_' . $this->slug_stream,
                'namespace' => $this->namespace,
                'type' => 'office',
                'extra' => array('building_name' => 'building_id_' . $this->slug_stream),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:description",
                'slug' => 'description_' . $this->slug_stream,
                'namespace' => $this->namespace,
                'type' => 'textarea',
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:state",
                'slug' => 'state_' . $this->slug_stream,
                'namespace' => $this->namespace,
                'type' => 'choice',
                'extra' => array('choice_data' => '1 : En proceso
                    2 : Atendido
                    3 : Cerrado', 'choice_type' => 'dropdown'),
                'assign' => $this->slug_stream,
                'required' => true
            )
        );


        if (!$this->streams->fields->add_fields($fields)) {
            return false;
        }


        return true;
    }

    public function uninstall($type = 0) {
        $this->db->delete("settings", array("module" => $this->slug_stream));
        // delete streams an fields   
        if ($type == 0)
         $this->streams->streams->delete_stream($this->slug_stream,  $this->namespace);
            $this->streams->fields->delete_field("description_{$this->slug_stream}",  $this->namespace);
        $this->streams->fields->delete_field("country_id_{$this->slug_stream}",  $this->namespace);
        $this->streams->fields->delete_field("city_id_{$this->slug_stream}",  $this->namespace);
        $this->streams->fields->delete_field("building_id_{$this->slug_stream}",  $this->namespace);
        $this->streams->fields->delete_field("office_id_{$this->slug_stream}",  $this->namespace);
        $this->streams->fields->delete_field("state_{$this->slug_stream}",  $this->namespace);
        $this->streams->utilities->remove_namespace($this->namespace);
        return true;
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
