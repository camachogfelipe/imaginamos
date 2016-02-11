<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Services module controller
 *
 * @author Eduard Russy
 */
class english extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes

    }

    public function index() {
        $url = site_url('english');
        $base_url = isset($_SERVER['QUERY_STRING']) ? $url . '?' . $_SERVER['QUERY_STRING'] : $url;
        $params = array(
            'stream' => 'english',
            'namespace' => 'english',
        );

        $english = $this->streams->entries->get_entries($params, array('suffix' => '?' . $_SERVER['QUERY_STRING'], 'first_url' => $base_url));

//        echo '<pre>';
//        print_r($english);
//
//       exit;
        
        $this->template
                ->set_layout('internas.html')
                ->title($this->module_details['name'])
                ->set('englishs', $english['entries'])
                ->build('index');
        
    }
    
      public function Comment() {
         $time = new DateTime('NOW'); 
        $input = $this->input->post();
        $data = array(
            'name' => $input['name'],
            'tel' => $input['cel'],
            'company' => $input['company'],
            'email' => $input['email'],
            'comment' => $input['comment'],
            'created' => $time->format('Y-m-d G:i:s')  
        );

        $this->db->insert('default_english_contact', $data);

        // Send mail to user                
        $this->email->clear();
        $this->email->from('cms@adom.com', 'CMS Adom');
        $this->email->to("mercadeo@adomsaluddomiciliaria.com");
        $html = $this->template->build('contacto');
        $this->email->subject('Hello, have contacted the website');
        $this->email->message($html);
        $this->email->send();        
        redirect('english');
    }

    

}
