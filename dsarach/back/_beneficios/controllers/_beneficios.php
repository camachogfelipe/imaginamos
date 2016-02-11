<?php

class _Beneficios extends Back_Controller {

    public function __construct() {
        parent::__construct();
        $this->_data['nombremodulo'] = "BENEFICIOS";
        //$this->load->model("beneficios");
        if (true != $this->have_admin_access()) {
            return redirect(cms_url('login'), 'refresh');
        }
    }

    // ----------------------------------------------------------------------

    public function index($value = '') {

        $this->_data['save'] = $value;
        $b = new Beneficios();
        $info = $b->getBeneficios();
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->count();
        return $this->build('beneficios');
    }

    public function add() {
        $this->_data['nombremodulo'] = "BENEFICIOS / NUEVO";
        $this->build('beneficios_new');
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
        $build = 'beneficios';
        $b = new Beneficios();
        if ($datos['titulo'] != '' && $datos['descripcion'] != '' && $datos['imagen'] != ''){
            
            $this->_data['save'] = FALSE;
            $build = 'beneficios_new';
            if ($b->saveBeneficios($datos)){
                $build = 'beneficios';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
        }
        $info = $b->getBeneficios();
        $this->_data["info"] = $info;
        return redirect('cms/beneficios/index/'.$save);
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
                $resize['width']	 = 266;
                $resize['height']	= 300;
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
        $b = new Beneficios();
        $dat = $b->getBeneficiosById($id);
        $this->_data["info"] = $dat;
        $this->_data["update"] = $update;
        return $this->build("beneficios_edit");
    }
    
    public function update_record(){
        $b = new Beneficios();
        $datos = $this->input->post();
				if(!empty($_FILES['nombre'])) $nombre = $this->upload2();
				if($nombre['ok'] == true) $datos['imagen'] = $nombre['data']['file_name'];
        $update = $b->updateBeneficios($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/beneficios/edit/".$this->input->post("id")."/".$a);
        //$this->build("beneficios_edit");
    }
    
    public function delete($id = ""){
        $b = new Beneficios();
        $return = FALSE;
        if ($b->eliminar($id)){
            $return = TRUE;
        };
        return redirect("cms/beneficios/index/".$return);
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

