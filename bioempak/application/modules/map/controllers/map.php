<?php

class Map extends MX_Controller {

    function index() {
        $this->load->model('cms/cms_model');
        
        $this->db->where('id',1);
        $data = $this->db->get('map')->row();


        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('map_view', $template_date);
    }
    
    function update(){
        
        $data = array(
            'map' => $this->input->post('map')
        );
        
        $this->db->where('id',1);
        $this->db->update('map',$data);
        redirect('map/index/ok');
    }

}