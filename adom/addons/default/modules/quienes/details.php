<?php

/**
 * This is a quienes module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	quienes Module
 */
defined("BASEPATH") or exit("No direct script access allowed");

class Module_Quienes extends Module {

    public $version = "1.0";
    private $namespace = 'quienes';
    private $slug_stream = 'quienes';
    private $slug_page = 'quien_somos';

    public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    public function info() {
        $info = array(
            "name" => array(
                "en" => $this->namespace,
                "es" => "¿Quiénes Somos?",
            ),
            "description" => array(
                "en" => "This is a PyroCMS module {$this->namespace}.",
                "es" => "Los administradores prodran ver y crear los {$this->namespace}."
            ),
            "frontend" => FALSE,
            "backend" => TRUE,
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

        // add folder for video
        $folder = Files::create_folder(0, $this->slug_stream);

        // add streams
        $stream_id = $this->streams->streams->add_stream(
                $this->namespace, $this->slug_stream, "pages", "pages_", "Simple pagina para los {$this->namespace}"
        );

        // add the fields to the streams
        $fields = array(
             array(
                "name" => "Descripción",
                "slug" => "description_{$this->slug_stream}",
                "namespace" => "pages",
                "type" => "wysiwyg",
                "extra" => array(
                      "editor_type" => "advanced", 
                      "max_length" => 200),
                "instructions" => "Max. caracteres 200",             
                "assign" => $this->slug_stream
            ),
            array(
                "name" => "Imagen",
                "slug" => "image_{$this->slug_stream}",
                "namespace" => "pages",
                "type" => "bootstrap_image",
                "extra" => array(
                    "folder" => $folder['data']['id'],
                    "allowed_types" => "gif|png|jpg|"
                ),
                "instructions" => "940px x 400px",        
                "assign" => $this->slug_stream,      
            )
                
        );
        $this->streams->fields->add_fields($fields);

        // Insert the page type structures
        $page_type = array(
            "title" => "lang:{$this->namespace}:{$this->namespace}",
            "slug" => $this->slug_stream,
            "description" => "A simple page type {$this->namespace}",
            "theme_layout" => 'internas.html',
            "stream_id" => $stream_id,
            "body" => "<h2>{{title}}</h2>" . "\n\n" . "{{ body }}",
            "updated_on" => now()
        );

        if (!$this->db->insert("page_types", $page_type)) {
            return false;
        }

        $def_page_type_id = $this->db->insert_id();

        $user_id = $this->ion_auth->profile()->id;
        $this->db->insert("pages_{$this->slug_stream}", array("description_{$this->slug_stream}" => "{$this->namespace}", "created" => date("Y-m-d H:i:s"), "created_by" => $user_id));
        $entry_id = $this->db->insert_id();

        $page = array(
            "slug" => $this->slug_page,
            "title" =>"¿Quiénes Somos?",
            "uri" => $this->slug_page,
            "entry_id" => $entry_id,
            "parent_id" => 0,
            "type_id" => $def_page_type_id,
            "status" => "live",
            "created_on" => now(),
            "is_home" => false,
        );
        $this->db->insert("pages", $page);
        $paren_id = $this->db->insert_id(); 
       
        $this->db->insert("pages_{$this->slug_stream}", 
                array("description_{$this->slug_stream}" => "Contenido Editable", 
                      "created" => date("Y-m-d H:i:s"), 
                      "created_by" => $user_id));
        $entry_id = $this->db->insert_id();

        $page = array(
            "slug" => $this->slug_page,
            "title" => "¿Quiénes Somos?",
            "uri" => $this->slug_page,
            "entry_id" => $entry_id,
            "parent_id" => $paren_id,
            "type_id" => $def_page_type_id,
            "status" => "live",
            "created_on" => now(),
            "is_home" => false,
        );
        $this->db->insert("pages", $page);
        
        return TRUE;
    }

    public function uninstall($type = 0) {
       
        $this->db->delete("settings", array("module" => $this->slug_stream));

        // delete streams an fields   
        if ($type == 0)
        $this->streams->streams->delete_stream($this->slug_stream, "pages");
        $this->streams->fields->delete_field("description_{$this->slug_stream}", "pages");
        $this->streams->fields->delete_field("video_{$this->slug_stream}", "pages");
        $this->streams->fields->delete_field("image_{$this->slug_stream}", "pages");
        $this->streams->fields->delete_field("video_url_{$this->slug_stream}", "pages");
        $this->streams->fields->delete_field("state_{$this->slug_stream}", "pages");
        $this->streams->fields->delete_field("type_public_{$this->slug_stream}", "pages");

        // delete page
        $f = $this->db->where("slug", $this->slug_page)->get("pages")->row();
        $this->db->delete("pages", array("parent_id" => $f->id));
        $this->db->delete("pages", array("slug" => $this->slug_page));

        // delete page type
        $this->db->delete("page_types", array("slug" => $this->slug_stream));

        // Delete the forlder 
        $this->load->library("files/files");
        $f = $this->db->where("name", $this->slug_stream)->get("file_folders")->row();
        $folder_c = Files::folder_contents($f->id);
        foreach ($folder_c["data"]["file"] as $file) {
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
    
    public function admin_menu(&$menu) {
        $var= '¿Quiénes Somos?';
        $menu[$var][$var] = 'admin/quienes';
    }

}

/* End of file details.php */