<?php

class _Banner extends Back_Controller {

    public function __construct() {
        parent::__construct();
        $this->_data['nombremodulo'] = "BANNER";
        //$this->load->model("banner");
        if (true != $this->have_admin_access()) {
            return redirect(cms_url('login'), 'refresh');
        }
    }

    // ----------------------------------------------------------------------

    public function index($value = '') {

        $this->_data['save'] = $value;
        $b = new Banner();
        $info = $b->getBanner();
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->count();
        return $this->build('banner');
    }

    public function add() {
        $this->_data['nombremodulo'] = "BANNER / NUEVO";
        $this->build('banner_new');
    }

    public function new_record() {
        $datos = array(
            'titulo' => $this->input->post('titulo'),
            'subtitulo' => $this->input->post('subtitulo'),
            'descripcion' => $this->input->post('texto'),
            'imagen' => $this->input->post('imagen')
        );
				if(!empty($_FILES['nombre'])) $nombre = $this->upload2();
				if($nombre['ok'] == true) $datos['imagen'] = $nombre['data']['file_name'];
        $this->_data['save'] = FALSE;
        $save = FALSE;
        $build = 'banner';
        $b = new Banner();
        if ($datos['titulo'] != '' && $datos['descripcion'] != '' && $datos['imagen'] != ''){
            
            $this->_data['save'] = FALSE;
            $build = 'banner_new';
            if ($b->saveBanner($datos)){
                $build = 'banner';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
        }
        $info = $b->getBanner();
        $this->_data["info"] = $info;
        return redirect('cms/banner/index/'.$save);
        //return $this->build($build);
        
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
    
    public function edit($id = "",$update = ""){
        $b = new Banner();
        $dat = $b->getBannerById($id);
        $this->_data["info"] = $dat;
        $this->_data["update"] = $update;
        return $this->build("banner_edit");
    }
    
    public function update_record(){
        $b = new Banner();
        $datos = $this->input->post();
				if(!empty($_FILES['nombre'])) $nombre = $this->upload2();
				if($nombre['ok'] == true) $datos['imagen'] = $nombre['data']['file_name'];
        $update = $b->updateBanner($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/banner/edit/".$this->input->post("id")."/".$a);
        //$this->build("banner_edit");
    }
    
    public function delete($id = ""){
        $b = new Banner();
        $return = FALSE;
        if ($b->eliminar($id)){
            $return = TRUE;
        };
        return redirect("cms/banner/index/".$return);
    }
		
		public function upload2() {
        $config = array(
            'allowed_types' => 'jpg|png',
            'upload_path' => UPLOADSFOLDER,
            'max_size' => 0,
            'encrypt_name' => true
        );
        $this->load->library('Upload', $config);
        if (!$this->upload->do_upload("nombre")) {
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
        return $data;
    }
}

