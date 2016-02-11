<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	PQR Module
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends Admin_Controller {
    
    private $namespace = 'vacantes';
    private $slug_stream = 'vacantes';
    protected $section = 'vacantes';

    public function __construct() {
        parent::__construct();

        // Load all the required classes
        $this->load->model("{$this->slug_stream}_m");
        $this->load->library('form_validation');
        $this->lang->load($this->namespace);

        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'name',
                'label' => lang("{$this->namespace}:name"),
                'rules' => 'trim|required'
            )
        );

        // We'll set the partials and metadata here since they're used everywhere
        $this->template->append_js('module::admin.js')->append_css('module::admin.css');
        $this->template->append_js('module::jquery.dataTables.js')->append_css('module::jquery.dataTables.css');
    }

    /**
     * List all items
     */
    public function index() {
        // here we use MY_Model's get_all() method to fetch everything
        $items = $this->{"{$this->namespace}_m"}->get_all();
        // Build the view with sample/views/admin/items.php
        $this->template
                ->title($this->module_details['name'])
                ->set('items', $items)
                ->build('admin/items');
    }
    
    public function download($id) {
    
       $results = $this->db->where('id', $id)->get('contact')->result();
     // $results = $this->db->get($this->namespace)->result();
      foreach ($results as $value) {
           
          $dat .= ("Nombre, ".$value->name.";".
                       "Telefono, ".$value->tel.";".
                       "Celular, ".$value->cel.";".
                       "Email, ".$value->email.";".
                       "doc, ".$value->doc.";".
                       "anos, ".$value->anos.";".
                       "vacante, ".$value->vacante.";".
                       "titulo, ".$value->titulo.";".
                       "titulo_otro, ".$value->titulo_otro.";".
                       "otro_estudio, ".$value->otro_estudio.";".
                       "archivo".$value->archivo.";".
                       "Comentario, ".$value->comentario.
                   "\n");
     }
     $this->output->set_content_type('application/octet-stream')
                  ->set_header("Content-Disposition:attachment; filename=datos.txt")            
                  ->set_output($dat);
        
   
    }

    public function create() {
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            if ($this->{"{$this->namespace}_m"}->create($this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang("{$this->namespace}.success"));
                redirect("admin/{$this->namespace}");
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang("{$this->namespace}.error"));
                redirect("admin/{$this->namespace}/create");
            }
        }

        $reults = new stdClass;
        foreach ($this->item_validation_rules as $rule) {
            $reults->{$rule['field']} = $this->input->post($rule['field']);
        }


        $this->template
                ->title($this->module_details['name'])
                ->build('admin/form');
    }

    public function edit($id = 0) {
        $reults = $this->{"{$this->namespace}_m"}->get_all($id);
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->{"{$this->namespace}_m"}->answer_{$this->namespace}($id, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('sample.success'));
                redirect("admin/{$this->namespace}");
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('sample.error'));
                redirect("admin/{$this->namespace}/edit");
            }
        }

        // Build the view using sample/views/admin/form.php
        $this->template
                ->title($this->module_details['name'])
                ->set($this->namespace, $reults)
                ->build('admin/form');
    }

    public function delete($id = 0) {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to'])) {
            // pass the ids and let MY_Model delete the items
            $this->{"{$this->namespace}_m"}->delete_many($this->input->post('action_to'));
             $this->session->set_flashdata('success', lang("{$this->namespace}.success"));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->{"{$this->namespace}_m"}->delete($id);
             $this->session->set_flashdata('success', lang("{$this->namespace}.success"));
        }
        redirect("admin/{$this->namespace}");
    }

   
    
    

}
