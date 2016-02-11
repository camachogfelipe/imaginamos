<?php

class _Empresa extends Back_Controller {

    public function __construct() {
        parent::__construct();
        $this->_data['nombremodulo'] = "EMPRESA";
        //$this->load->model("empresa");
        if (true != $this->have_admin_access()) {
            return redirect(cms_url('login'), 'refresh');
        }
    }

    // ----------------------------------------------------------------------

    public function index($value = '') {
        $this->load->model("_empresa/empresa");
        $this->_data['save'] = $value;
        $b = new Empresa();
        $dat = $b->getEmpresaById(1);
        $this->_data["info"] = $dat;
        
        return $this->build('edit');
    }

    public function add() {
        $this->_data['nombremodulo'] = "EMPRESA / NUEVO";
        $this->build('edit');
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
                $resize['width']	 = 228;
                $resize['height']	= 128;
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
        $b = new Empresa();
        $dat = $b->getEmpresaById($id);
        $this->_data["info"] = $dat;
        $this->_data["update"] = $update;
        return $this->build("edit");
    }
    
    public function update_record(){
        $b = new Empresa();
        $datos = $this->input->post();
				if(!empty($_FILES['nombre'])) $nombre = $this->upload2();
				if($nombre['ok'] == true) $datos['imagen'] = $nombre['data']['file_name'];
        $update = $b->updateEmpresa($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/empresa/edit/".$this->input->post("id")."/".$a);
        //$this->build("edit");
    }
    
    public function imagenes($save = ""){
        $this->_data['nombremodulo'] = "EMPRESA / IMAGENES";
        $this->_data['save'] = $save;
        $this->load->model("_empresa/empresaimg");
        $i = new EmpresaImg();
        $info = $i->getEmpresaImg();
        $this->_data["info"] = $info;
        $this->_data["count"] = $i->count();
        return $this->build('viewImg');
    }
    
    public function addImg() {
        $this->_data['nombremodulo'] = "EMPRESA / IMAGENES / NUEVO";
        $this->build('newImg');
    }
    
    public function new_recordImg() {
        $datos = array(
            'imagen' => $this->input->post('imagen')
        );
				if(!empty($_FILES['nombre'])) $nombre = $this->upload2();
				if($nombre['ok'] == true) $datos['imagen'] = $nombre['data']['file_name'];
        $this->_data['save'] = FALSE;
        $save = FALSE;
        $build = 'empresa';
        $b = new EmpresaImg();
        if ($datos['imagen'] != ''){
            
            $this->_data['save'] = FALSE;
            $build = 'newImg';
            if ($b->saveEmpresaImg($datos)){
                $build = 'empresa';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
        }
        $info = $b->getEmpresaImg();
        $this->_data["info"] = $info;
        return redirect('cms/empresa/imagenes/'.$save);
        //return $this->build($build);
        
    }
    
    public function uploadImg() {
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
                $resize['width']	 = 248;
                $resize['height']	= 223;
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
    
    public function editImg($id = "",$update = ""){
        $this->_data['nombremodulo'] = "EMPRESA / IMAGENES / EDITAR";
        $b = new EmpresaImg();
        $dat = $b->getEmpresaImgById($id);
        $this->_data["info"] = $dat;
        $this->_data["update"] = $update;
        return $this->build("editImg");
    }
    
    public function update_recordImg(){
        $b = new EmpresaImg();
        $datos = $this->input->post();
				if(!empty($_FILES['nombre'])) $nombre = $this->upload2();
				if($nombre['ok'] == true) $datos['imagen'] = $nombre['data']['file_name'];
        $update = $b->updateEmpresaImg($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/empresa/editImg/".$this->input->post("id")."/".$a);
        //$this->build("edit");
    }
    
   public function upload2() {
        $config = array(
            'allowed_types' => 'jpg|png|',
            'upload_path' => UPLOADSFOLDER,
            'max_size' => 0,
            'encrypt_name' => true
        );
        $this->load->library('Upload', $config);
        if (!$this->upload->do_upload('nombre')) {
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

