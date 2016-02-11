<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 *   `name`,`tel`,`doc`,`cel`,`anos`,`email`,`vacante`,`titulo`,`comentario`,`otro_estudio`,`archivo`
 * @author  PyroCMS Dev Team
 * @package PyroCMS\Core\Modules\Blog\Controllers
 */
class Admin extends Admin_Controller {

    protected $section = 'admin_vacantes_aplicar';
    protected $namespace = 'vacantes_aplicar';
    protected $slug_stream = 'vacantes_aplicar';
    private $_tabs = array();

    public function __construct() {
        parent::__construct();
        $this->_tabs = array(
            array(
                'id' => 'info',
                'title' => 'Información',
                'fields' => array(
                    'name',
                    'description',
                )
            )
        );
        $this->template->append_js('module::admin.js');
    }

    // ----------------------------------------------------------------------

    public function index($page = 1) {
        $extra['title'] = "lang:{$this->namespace}:table_title";

        $extra['buttons'] = array(
            array(
                'label' => lang('global:delete'),
                'url' => "admin/{$this->namespace}/delete/-entry_id-/{$page}",
                'confirm' => true
            ),array(
                'label' => lang("{$this->namespace}:download"),
                'url' => "admin/{$this->namespace}/download/-entry_id-"
            )
        );
   
      
        $extra['delete_frist'] = false;
        $extra['no_entries_message'] = lang("{$this->namespace}:no_entries_message");
        $extra['columns'] = array('vacante','name', 'tel', 'cel','email','comentario','archivo');
        $this->streams->cp->entries_table($this->slug_stream, $this->namespace, 5, "admin/{$this->namespace}/index", true, $extra);
    }

    // ----------------------------------------------------------------------



    // ----------------------------------------------------------------------

     public function download($id) {
    
       $results = $this->db->where('id', $id)->get('vacantes_aplicar')->result();
     // $results = $this->db->get($this->namespace)->result();
      foreach ($results as $value) {
           
          $dat .= ("Nombre, ".$value->name.";".
                       "Telefono, ".$value->tel.";".
                       "Celular, ".$value->cel.";".
                       "Email, ".$value->email.";".
                       "Identificacion, ".$value->doc.";".
                       "Anos de Experiencia, ".$value->anos.";".
                       "Vacante, ".$value->vacante.";".
                       "Titulo, ".$value->titulo.";".
                       "Cual Titulo, ".$value->titulo_otro.";".
                       "Otros Estudios, ".$value->otro_estudio.";".
                       "Archivo".$value->archivo.";".
                       "Comentario, ".$value->comentario.
                   "\n");
     }
     $this->output->set_content_type('application/octet-stream')
                  ->set_header("Content-Disposition:attachment; filename=".str_replace(" ", "_", $value->name).".txt")            
                  ->set_output($dat);
        
   
    }


    // ----------------------------------------------------------------------

    /**
     * Delete a FAQ entry
     * 
     * @param   int [$id] The id of FAQ to be deleted
     * @return  void
     */
    public function delete($id = null, $page = 1) {
        $this->streams->entries->delete_entry($id, $this->slug_stream, $this->namespace);
        $this->session->set_flashdata('error', lang("{$this->namespace}:deleted"));

        return redirect("admin/{$this->namespace}/index/{$page}");
    }

}
