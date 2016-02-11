<?php

class _Multimedia extends Back_Controller {

    public function __construct() {
        parent::__construct();
        $this->_data['nombremodulo'] = "MULTIMEDIA";
        //$this->load->model("multimedia");
        if (true != $this->have_admin_access()) {
            return redirect(cms_url('login'), 'refresh');
        }
    }

    // ----------------------------------------------------------------------

    public function index($value = '') {
        $this->load->model("_multimedia/multimedia");
        $this->_data['save'] = $value;
        $b = new Multimedia();
        $dat = $b->getMultimediaById(1);
        $this->_data["info"] = $dat;
        
        return $this->build('edit');
    }

    public function add() {
        $this->_data['nombremodulo'] = "MULTIMEDIA / NUEVO";
        $this->build('edit');
    }

    
    public function edit($id = "",$update = ""){
        $b = new Multimedia();
        $dat = $b->getMultimediaById($id);
        $this->_data["info"] = $dat;
        $this->_data["update"] = $update;
        return $this->build("edit");
    }
    
    public function update_record(){
        $b = new Multimedia();
        $datos = $this->input->post();
        $update = $b->updateMultimedia($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/multimedia/edit/".$this->input->post("id")."/".$a);
        //$this->build("edit");
    }
    
   

}

