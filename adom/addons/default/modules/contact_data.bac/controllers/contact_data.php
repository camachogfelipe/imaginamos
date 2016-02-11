<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 *
 * @author      Eduard Russy
 * @website     
 * @package     
 * @subpackage  
 * @copyright   MIT
 */
class contact_data extends Public_Controller
{

    /**
     * The constructor
     * @access public
     * @return void
     */
    public function __construct()
    {
      parent::__construct();
      $this->lang->load('contact_data');
      $this->load->model('contact_data_m');
      $this->template->append_css('module::contact_data.css');
    }
     /**
     * List all contact_datas
     *
     *
     * @access  public
     * @return  void
     */
     public function index()
     {
      // bind the information to a key
      $data['contact_data'] = (array)$this->contact_data_m->get_all();
      echo json_encode($data['contact_data']);
    }
     public function getRedes() {
       
            $results = $this->db->get('default_redes')->result();
            echo json_encode($results);
      
    }

  }

/* End of file contact_data.php */