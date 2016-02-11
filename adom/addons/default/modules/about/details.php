<?php

/**
 * This is a about module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	about Module
 */
defined("BASEPATH") or exit("No direct script access allowed");

class Module_About extends Module {

    public $version = "1.0";
    private $namespace = 'about';
    private $slug_stream = 'about';
    private $slug_page = 'about-us';

    public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    public function info() {
        $info = array(
            "name" => array(
                "en" => $this->namespace,
                "es" => "Quienes Somos",
            ),
            "description" => array(
                "en" => "This is a PyroCMS module {$this->namespace}.",
                "es" => "Los administradores prodran ver y crear los {$this->namespace}."
            ),
            "frontend" => FALSE,
            "backend" => TRUE,
            "menu" => "content"
        );
        $info["sections"] = array();
        $info["sections"][$this->slug_stream] = array(
            "name" => "{$this->namespace}:{$this->namespace}", // These are translated from your language file
            "uri" => "admin/{$this->namespace}",
            "shortcuts" => array(
                "create" => array(
                    "name" => "{$this->namespace}:create_{$this->namespace}",
                    "uri" => "admin/{$this->namespace}/create",
                    "class" => "add"
                )
            )
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
                "name" => "lang:{$this->namespace}:description",
                "slug" => "description_{$this->slug_stream}",
                "namespace" => "pages",
                "type" => "textarea",
                "assign" => $this->slug_stream
            ),
            array(
                "name" => "lang:{$this->namespace}:image",
                "slug" => "image_{$this->slug_stream}",
                "namespace" => "pages",
                "type" => "bootstrap_image",
                "assign" => $this->slug_stream,
                "extra" => array("folder" => $folder['data']['id'], "allowed_types" => "jpg|gif|png|")
            ),
            array(
                "name" => "lang:{$this->namespace}:video",
                "slug" => "video_{$this->slug_stream}",
                "namespace" => "pages",
                "type" => "file",
                "assign" => $this->slug_stream,
                "extra" => array("folder" => $folder['data']['id'], "allowed_types" => "mp4|")
            ),
            array(
                "name" => "lang:{$this->namespace}:url",
                "slug" => "video_url_{$this->slug_stream}",
                "namespace" => "pages",
                "type" => "video_url",
                "assign" => $this->slug_stream
            ),
            array(
                'name' => "lang:{$this->namespace}:type_public",
                'slug' => "type_public_{$this->slug_stream}",
                'namespace' => 'pages',
                'type' => 'choice',
                'extra' => array('choice_data' => '1 : Imagen
                    2 : Video Mp4
                    3 : Video Youtube', 'choice_type' => 'dropdown'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
//            array(
//                'name' => "lang:{$this->namespace}:state",
//                'slug' => "state_{$this->slug_stream}",
//                'namespace' => 'pages',
//                'type' => 'choice',
//                'extra' => array('choice_data' => '1 : Activo
//                    0 : Inactivo', 'choice_type' => 'dropdown'),
//                'assign' => $this->slug_stream,
//                'required' => true
//            )
        );
        $this->streams->fields->add_fields($fields);

        // Insert the page type structures
        $page_type = array(
            "title" => "lang:{$this->namespace}:{$this->namespace}",
            "slug" => $this->slug_stream,
            "description" => "A simple page type {$this->namespace}",
            "stream_id" => $stream_id,
            "theme_layout" => 'internas.html',
            "body" => '<div class="lateralbar">
    {{ widgets:instance id="2"}}
    {{ widgets:instance id="4"}}
</div>
<div class="contenidos">
    <div class="fondoblanco mtop">
        <div class="contenidodetalle">
            <div class="headerdetalle">
                <div class="titulodetalle">
                    <h1>{{title}}</h1>
                </div>		
                <div class="cerrardetalle">
                    <a href="#" class="icon-close"></a>
                </div>
            </div>
            <div class="jp-container">
                <div class="imgdetalle">
                    {{ if type_public_about:key==1 }}
                    {{image_about:img}}
                    {{ endif }}
                    {{ if type_public_about:key==2 }}
                    <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="100%" height="310"
                           poster="{{ url:base }}uploads/default/files/video_play.jpg"
                           data-setup="{}">
                        <source src="{{ url:base }}uploads/default/files/{{video_about:fullname}}" type="{{video_about:mimetype}}" />       
                    </video>
                    {{ endif }}
                    {{ if type_public_about:key==3 }}
                    {{video_url_about}}
                    {{ endif }}
                </div>
                <div class="textodetalle">
                    {{description_about}}     
                </div>
            </div>
        </div>
    </div>
</div>',
            "css" => "",
            "js" => "",
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
            "title" => $this->slug_page,
            "uri" => $this->slug_page,
            "entry_id" => $entry_id,
            "parent_id" => 0,
            "type_id" => $def_page_type_id,
            "status" => "live",
            "created_on" => now(),
            "is_home" => FALSE,
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

}

/* End of file details.php */