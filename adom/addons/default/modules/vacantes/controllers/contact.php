<?php
/**
 * This is a pqr_type module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	PQR Module
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Contact extends Admin_Controller {

    protected $section = 'vacantes_contact';

    public function __construct() {
        parent::__construct();

    }

    /**
     * List all items
     */
    public function index() {
//        echo 'asdasdsad';
//        exit;
        // here we use MY_Model's get_all() method to fetch everything
        $items = $this->db->get('default_vacantes_aplicar')->result();
        
//        print_r($items);
//        exit;
        // Build the view with pqr_type/views/admin/items.php
        $this->template
                ->title($this->module_details['name'])
                ->set('items', $items)
                ->build('admin/items_contact');
    }
    

    public function delete($id = 0) {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to'])) {
            // pass the ids and let MY_Model delete the items
            $this->pqr_type_m->delete_many($this->input->post('action_to'));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->pqr_type_m->delete($id);
        }
        redirect('admin/pqr/type');
    }

}
