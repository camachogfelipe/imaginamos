<?php

class Members extends MX_Controller {

    

    function index() {
       $data['data'] = $this->db->get('members')->result();
       $this->load->view('csv',$data);
    }

   

}