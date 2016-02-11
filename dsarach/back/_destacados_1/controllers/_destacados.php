<?php

class _Destacados extends Back_Controller {

    public function __construct() {
        parent::__construct();
        $this->_data['nombremodulo'] = "DESTACADOS";
        //$this->load->model("destacados");
        if (true != $this->have_admin_access()) {
            return redirect(cms_url('login'), 'refresh');
        }
    }

    // ----------------------------------------------------------------------

    public function index($value = '') {

        $this->_data['save'] = $value;
        $b = new Destacado();
        $info = $b->getDestacado();
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->count();
        return $this->build('view');
    }

    public function add() {
        $this->_data['nombremodulo'] = "DESTACADOS / NUEVO";
        $this->build('new');
    }

    public function new_record() {
        $datos = array(
            'seccion' => $this->input->post('seccion'),
            'imagen' => $this->input->post('imagen')
        );
        $this->_data['save'] = FALSE;
        $save = FALSE;
        $build = 'destacados';
        $b = new Destacado();
        if ($datos['seccion'] != '' && $datos['imagen'] != ''){
            
            $this->_data['save'] = FALSE;
            $build = 'new';
            if ($b->saveDestacado($datos)){
                $build = 'destacados';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
        }
        $info = $b->getDestacado();
        $this->_data["info"] = $info;
        return redirect('cms/destacados/index/'.$save);
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
                $resize['width']	 = 468;
                $resize['height']	= 216;
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
        $b = new Destacado();
        $dat = $b->getDestacadoById($id);
        $this->_data["info"] = $dat;
        $this->_data["update"] = $update;
        return $this->build("edit");
    }
    
    public function update_record(){
        $b = new Destacado();
        $datos = $this->input->post();
        $update = $b->updateDestacado($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/destacados/edit/".$this->input->post("id")."/".$a);
        //$this->build("edit");
    }
    
    public function delete($id = ""){
        $b = new Destacado();
        $return = FALSE;
        if ($b->eliminar($id)){
            $return = TRUE;
        };
        return redirect("cms/destacados/index/".$return);
    }

}

