<?php
class Home extends MX_Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->model('cms/cms_model');
        $this->load->model('home_model');
        $template_date['data'] = $this->home_model->get();
        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $this->load->view('home_view', $template_date);
    }
    
    function edit(){
        $this->load->model('home_model');
        $image = $_FILES['userfile']['name'];
        $oldImage = $this->input->post('oldImage');
        $address = $this->input->post('address');
        $phone = $this->input->post('phone1');
        $email = $this->input->post('email');
        $phone2 = $this->input->post('phone2');
        $phone3 = $this->input->post('phone3');
        
        
        
        if($image == ""){
            $img = $oldImage;
        }else{
            unlink(realpath(APPPATH . "../assets/home/1.png"));
            $img = '1.png';
            $this->home_model->upload($img);
            //echo $this->upload->display_errors();   
        }
        
        $data = array(
            'image' => $img,
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
            'phone2' => $phone2,
            'phone3' => $phone3
        );
        
        $this->home_model->update($data);
        redirect('home/index');
    }
}