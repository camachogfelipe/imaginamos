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

class Module_vacantes extends Module {

    public $version = "1.0";
    private $namespace = 'vacantes';
    private $slug_stream = 'vacantes';
    private $slug_page = 'vacante';

    public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    public function info() {
        $info = array(
            "name" => array(
                "en" => $this->namespace,
                "es" => "vacantes",
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
            "name" => "Vacantes", // These are translated from your language file
            "uri" => "admin/{$this->namespace}",
            "shortcuts" => array(
                "create" => array(
                    "name" => "{$this->namespace}:create_{$this->namespace}",
                    "uri" => "admin/{$this->namespace}/create",
                    "class" => "add"
                )
            )
        );
        $info['sections']['contact'] = array(
            'name' => "Aplicaciones", // These are translated from your language file
            'uri' => "admin/{$this->namespace}/contact",
//            'shortcuts' => array(
//                'create' => array(
//                    'name' => 'pqr:create_type',
//                    'uri' => "admin/{$this->namespace}/contact/add_type",
//                    'class' => 'add'
//                )
//            )
        );

        return $info;
    }

    public function install() {
        // load driver for streams an fields
        $this->uninstall(1);

        // add folder for video
      //  $folder = Files::create_folder(0, $this->slug_stream);

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
                "name" => "Descripción",
                "slug" => "description_{$this->slug_stream}",
                "namespace" => "pages",
                "type" => "wysiwyg",
                "extra" => array("max_length" => 200, 'editor_type' => 'advanced'),  
                "instructions" => "Max. caracteres 200",   
                "assign" => $this->slug_stream
            ),
            array(
                "name" => "Imagen",
                "slug" => "image_{$this->slug_stream}",
                "namespace" => "pages",
                "type" => "bootstrap_image",
                'extra' => array(
                    'folder' => $folder->id,
                    'allowed_types' => 'gif|png|jpg|'
                ),
                "assign" => $this->slug_stream,
            )
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
    <div class="linea_home">
      <h1 class="title_dest bold">{{title}}</h1>
    </div>
    <div class="clearfix">
      <div class="share left">
        <span class="st_facebook_hcount" displayText="Facebook"></span>
        <span class="st_linkedin_hcount" displayText="LinkedIn"></span>
      </div>
      <a class="btn_vermas right" href="{{ url:site }}vacantes" style="width:85px; background:none; padding:0;">Volver</a>
    </div>
    
    <div class="clearfix content_new">
      <img src="{{ url:site }}files/large/{{image_vacantes:filename}}" width="380" height="260" class="left" />
      <div class="con-sub-nov right">
      	<h1>{{subtitle_vacantes}}</h1>
      </div>
      <div class="text_new scroll_pane right">
        <p class="main_p">
{{description_vacantes}}
        </p>
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
            "is_home" => false,
        );
        $this->db->insert("pages", $page);
        
        if (!$this->db->table_exists('vacantes_aplicar')) {
           $pqr = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'tel' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'doc' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'cel' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'anos' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'vacante' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'titulo' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'titulo_otro' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'comentario' => array(
                'type' => 'TEXT'
            ),
            'otro_estudio' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'archivo' => array(
                'type' => 'CHAR',
                'constraint' => '15'
            )
         
        );
    


        $this->dbforge->add_field($pqr);
        $this->dbforge->add_key('id', TRUE);
        $create_pqr = $this->dbforge->create_table('vacantes_aplicar',TRUE);
        }
        if (!$this->db->table_exists('titulos')) {
            $titulos = array(
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
          $this->dbforge->add_field($titulos);
          $this->dbforge->add_key('id', TRUE);
          $create_pqr_type = $this->dbforge->create_table('titulos',TRUE);
        }
        
        
        
        
        /*
        $pqr = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'tel' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'doc' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'cel' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'anos' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'vacante' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'titulo' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'titulo_otro' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'comentario' => array(
                'type' => 'TEXT'
            ),
            'otro_estudio' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'archivo' => array(
                'type' => 'CHAR',
                'constraint' => '15'
            )
         
        );
    


        $this->dbforge->add_field($pqr);
        $this->dbforge->add_key('id', TRUE);
        $create_pqr = $this->dbforge->create_table('vacantes_aplicar',TRUE);
         * 
         */
        /*
        $titulos = array(
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
        $this->dbforge->add_field($titulos);
        $this->dbforge->add_key('id', TRUE);
        $create_pqr_type = $this->dbforge->create_table('titulos'); *
         * 
         */


        return TRUE;
    }
    


    public function uninstall($type = 0) {
        
        $this->db->delete("settings", array("module" => $this->slug_stream));

        // delete streams an fields   
        if ($type == 0)
            $this->streams->streams->delete_stream($this->slug_stream, "pages");
        $this->streams->fields->delete_field("description_{$this->slug_stream}", "pages");

        $this->streams->fields->delete_field("subtitle_{$this->slug_stream}", "pages");
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
        $menu['Menu']['Vacantes'] = 'admin/' . $this->slug_stream;
    }

}

/* End of file details.php */
