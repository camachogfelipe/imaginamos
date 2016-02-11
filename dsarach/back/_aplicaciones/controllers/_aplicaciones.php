<?php

class _Aplicaciones extends Back_Controller {

    public function __construct() {
        parent::__construct();
        $this->_data['nombremodulo'] = "APLICACIONES";
        //$this->load->model("aplicaciones");
        if (true != $this->have_admin_access()) {
            return redirect(cms_url('login'), 'refresh');
        }
    }

    // ----------------------------------------------------------------------

    public function index($value = '') {

        $this->_data['save'] = $value;
        $b = new Aplicaciones();
        $info = $b->getAplicaciones();
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->count();
        return $this->build('aplicaciones');
    }

    public function add() {
        $this->_data['nombremodulo'] = "APLICACIONES / NUEVO";
        $this->build('aplicaciones_new');
    }

    public function new_record() {
        $datos = array(
            'titulo' => $this->input->post('titulo'),
            'descripcion' => $this->input->post('texto'),
            'imagen' => $this->input->post('imagen'),
            'archivo' => $this->input->post('archivo')
        );
				if(!empty($_FILES['nombre'])) $nombre = $this->upload2();
				if($nombre['ok'] == true) $datos['imagen'] = $nombre['data']['file_name'];
				if(!empty($_FILES['nombre2'])) $nombre = $this->uploadpdf2();
				if($nombre['ok'] == true) $datos['archivo'] = $nombre['data']['file_name'];
        $this->_data['save'] = FALSE;
        $save = FALSE;
        $build = 'aplicaciones';
        $b = new Aplicaciones();
        if ($datos['titulo'] != '' && $datos['descripcion'] != '' && $datos['imagen'] != ''){
            
            $this->_data['save'] = FALSE;
            $build = 'aplicaciones_new';
            if ($b->saveAplicaciones($datos)){
                $build = 'aplicaciones';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
        }
        $info = $b->getAplicaciones();
        $this->_data["info"] = $info;
        return redirect('cms/aplicaciones/index/'.$save);
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
    
    public function uploadpdf() {
        $config = array(
            'allowed_types' => 'pdf|',
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
                            'ok' => true,
                            'data' => $this->upload->data()
                        );
        }
        echo json_encode($data);
    }
    
    public function edit($id = "",$update = ""){
        $b = new Aplicaciones();
        $dat = $b->getAplicacionesById($id);
        $this->_data["info"] = $dat;
        $this->_data["update"] = $update;
        return $this->build("aplicaciones_edit");
    }
    
    public function update_record(){
        $b = new Aplicaciones();
        $datos = $this->input->post();
				if(!empty($_FILES['nombre'])) $nombre = $this->upload2();
				if($nombre['ok'] == true) $datos['imagen'] = $nombre['data']['file_name'];
				if(!empty($_FILES['nombre2'])) $nombre = $this->uploadpdf2();exit();
				if($nombre['ok'] == true) $datos['archivo'] = $nombre['data']['file_name'];
        $update = $b->updateAplicaciones($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/aplicaciones/edit/".$this->input->post("id")."/".$a);
        //$this->build("aplicaciones_edit");
    }
    
    public function delete($id = ""){
        $b = new Aplicaciones();
        $return = FALSE;
        if ($b->eliminar($id)){
            $return = TRUE;
        };
        return redirect("cms/aplicaciones/index/".$return);
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
		
		public function uploadpdf2() {
        $config = array(
            'allowed_types' => '*',
            'upload_path' => UPLOADSFOLDER,
            'max_size' => 0,
            'encrypt_name' => true
        );
        $this->load->library('Upload', $config);
        if (!$this->upload->do_upload('nombre2')) {
            $data = array(
                'ok' => false,
                'data' => $this->upload->display_errors(),
                'folder' => UPLOADSFOLDER
            );
            
        } else {
                $data = array(
                            'ok' => true,
                            'data' => $this->upload->data()
                        );
        }
				print_r($_FILES['nombre2']);
				print_r($data);
        return $data;
    }
}

