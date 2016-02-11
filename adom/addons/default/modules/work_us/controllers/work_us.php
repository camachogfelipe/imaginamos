<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Modulo para el formulario de trabaje con nosotros
 *
 * @author      Eduard Russy
 * @website     imaginamos.com
 * @package     
 * @subpackage  
 * @copyright   MIT
 */
class work_us extends Public_Controller
{

    /**
     * The constructor
     * @access public
     * @return void
     */
    public function __construct()
    {
      parent::__construct();
      $this->lang->load('work_us');
      $this->load->model('work_us_m');
      $this->template->append_css('module::work_us.css');
    }
     /**
     * List all work_uss
     *
     *
     * @access  public
     * @return  void
     */
     public function index()
     {
      // bind the information to a key
      $data['work_us'] = (array)$this->work_us_m->get_all();
      // Build the page
      $this->template->title($this->module_details['name'])
      ->build('index', $data);
    }

  }

/* End of file work_us.php */