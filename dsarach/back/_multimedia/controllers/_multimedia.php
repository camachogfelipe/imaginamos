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
    
    public function upload() {
        $config = array(
            'allowed_types' => 'jpg|png|',
            'upload_path' => UPLOADSFOLDER,
            'max_size' => 0,
            'encrypt_name' => true
        );
        $this->load->library('Upload', $config);
        if (!$this->upload->do_upload('Filedata')) {
            $data = array(
                'ok' => false,
                'data' => $this->upload->display_errors(),
                'folder' => UPLOADSFOLDER
            );
            
        } else {
                $data = array(
                        'data' => $this->upload->data()
                );
                $resize['image_library'] = 'gd2';
                $resize['source_image']	= UPLOADSFOLDER.$data["data"]["file_name"];
                $resize['create_thumb'] = TRUE;
                $resize['maintain_ratio'] = TRUE;
                $resize['width']	 = 736;
                $resize['height']	= 396;
                $resize['thumb_marker'] = "";
                $resize['new_image'] = UPLOADSFOLDER."thumbnail/".$data["data"]["file_name"];
                
                $this->load->library('image_lib', $resize); 

                if ( ! $this->image_lib->resize())
                    {
                    $data = array(
                            'ok' => false,
                            'resize' => $this->image_lib->display_errors()
                        );    
                    }else{
                        $data = array(
                            'ok' => true,
                            'resize' => true,
                            'data' => $this->upload->data()
                            
                        );
                    }
        }
        echo json_encode($data);
    }
    
   

}

