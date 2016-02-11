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

class Module_Services extends Module {

    public $version = "1.0";
    private $namespace = 'services';
    private $slug_stream = 'services';
    private $slug_page = 'servicios';

    public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    public function info() {
        $info = array(
            "name" => array(
                "en" => $this->namespace,
                "es" => "Servicios",
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
            "shortcuts" => array(
               "create" => array(
                   "name" => "{$this->namespace}:create_{$this->namespace}",
                   "uri" => "admin/{$this->namespace}/create", "class" => "add"
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
                
       $folder = $this->file_folders_m->get_by('slug', $this->slug_stream);

        if (empty($folder)) {
            $folder = Files::create_folder(0, 'banner');

            if (!empty($folder['data'])) {
                $folder = (object) $folder['data'];
            }
        }

        // add the fields to the streams
        $fields = array(
            array(
                "name" => "lang:{$this->namespace}:description",
                "slug" => "description_{$this->slug_stream}",
                "namespace" => "pages",
                'type' => 'wysiwyg',
                'extra' => array('editor_type' => 'advanced',"max_length" => 200),
                "assign" => $this->slug_stream
            ),
            array(
                "name" => "lang:{$this->namespace}:image",
                "slug" => "image_{$this->slug_stream}",
                "namespace" => "pages",
                "type" => "bootstrap_image",
                "assign" => $this->slug_stream,
								"instructions" => "300x250",
                "extra" => array("folder" => $folder->id, "allowed_types" => "jpg|gif|png|")
            ),
            array(
                "name" => "lang:{$this->namespace}:image_interna",
                "slug" => "image_internal",
                "namespace" => "pages",
                "type" => "bootstrap_image",
                "assign" => $this->slug_stream,
								"instructions" => "700x298",
                "extra" => array("folder" => $folder->id, "allowed_types" => "jpg|gif|png|")
            ),
            array(
                "name" => "lang:{$this->namespace}:texto_inferior",
                "slug" => "texto_inferior_{$this->slug_stream}",
                "namespace" => "pages",
                 'type' => 'wysiwyg',
                'extra' => array('editor_type' => 'advanced',"max_length" => 200),
                "assign" => $this->slug_stream
            ),
         
        );
        $this->streams->fields->add_fields($fields);

        // Insert the page type structures
        $page_type = array(
            "title" => "lang:{$this->namespace}:{$this->namespace}",
            "slug" => $this->slug_stream,
            "description" => "A simple page type {$this->namespace}",
            "stream_id" => $stream_id,
            "theme_layout" => 'internas.html',
            "body" => '<div class="content_940 content_home">
    <div class="menu_servicios clearfix">
   
      <a  {{ if {url:segments segment="2"} == "consulta-medica-domiciliaria" }} class="servicio_activo" {{endif}} href="{{ url:base }}servicios/consulta-medica-domiciliaria">Consulta Médica Domiciliaria</a>
	 
	 <a {{ if page:slug == "enfermeria" }} class="servicio_activo"  {{ endif }} href="{{ url:base }}servicios/enfermeria">Enfermería</a>
	 
	  <a {{ if page:slug == "terapias" }} class="servicio_activo"  {{ endif }} href="{{ url:base }}servicios/terapias">Terapias</a>
	 
	  <a {{ if page:slug == "hospitalizacion-en-casa" }} class="servicio_activo" {{ endif }} href="{{ url:base }}servicios/hospitalizacion-en-casa">Hospitalización en Casa</a>
	 
	 <a {{ if page:slug == "telemedicina" }} class="servicio_activo"  {{ endif }} href="{{ url:base }}servicios/telemedicina">Especialistas por Telemedicina</a>
    </div>
    <div class="linea_home">
      <h1 class="title_dest bold">{{title}}</h1>
    </div>
    <div class="clearfix">
      <div class="content_serv left">
      	<p class="main_text_serv" style="text-align:justify;">
          {{description_services}}
        </p>


    <img src="{{ url:site }}files/large/{{image_internal:filename}}" width="700" height="298" class="img_serv" />


        <p class="main_p">
        {{texto_inferior_services}}
      </div>
      <a class="fixed_box right" href="{{ url:site }}contact" style="top: 300px;">
        ¿Quieres conocer más de nuestros servicios y saber por qué ADOM esla mejor opción para cuidar la salud de tu familia al mejor precio?
        <h4>Contacta un asesor</h4>
      </a>
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
            "is_home" => false,
        );
        $this->db->insert("pages", $page);
         $paren_id = $this->db->insert_id();
        $page = array(
            "slug" => $this->slug_page,
            "title" => $this->slug_page,
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
         $this->streams->fields->delete_field("destacado_{$this->slug_stream}", "pages");
        $this->streams->fields->delete_field("texto_inferior_{$this->slug_stream}", "pages");
        $this->streams->fields->delete_field("image_{$this->slug_stream}", "pages");

   

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
        $menu['Servicios'] = 'admin/' . $this->slug_stream;
    }

}

/* End of file details.php */
