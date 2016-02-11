<?php

class _Registro extends Back_Controller {

    public function __construct() {
        parent::__construct();
        $this->_data['nombremodulo'] = "Registro";
        if (true != $this->have_admin_access()) {
            return redirect(cms_url('login'), 'refresh');
        }
    }

    // ----------------------------------------------------------------------

    public function index($value = '') {

        $this->_data['save'] = $value;
        $b = new Registro();
        $info = $b->getRegistro();
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->count();
        return $this->build('registro');
    }

    public function add() {
        $this->_data['nombremodulo'] = "Registro ";
        $this->build('registro_new');
    }

    public function new_Registro() {
        $datos = array(
            'imagen' => $this->input->post('imagen')
        );
        $this->_data['save'] = FALSE;
        $save = FALSE;
        $build = 'registro';
        $b = new Registro();
        if ($datos['imagen'] != ''){
            
            $this->_data['save'] = FALSE;
            $build = 'registro_new';
            if ($b->saveRegistro($datos)){
                $build = 'registro';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
        }
        $info = $b->getRegistro();
        $this->_data["info"] = $info;
        return redirect('cms/registro/index/'.$save);
        
    }

    public function upload() {
        $config = array(
            'allowed_types' => 'gif|jpg|png|jpeg|rgb|psd',
            'upload_path' => UPLOADSFOLDER.'registro/',
            'max_size' => 0,
            'encrypt_name' => true
        );
        $this->load->library('Upload', $config);
        if (!$this->upload->do_upload('Filedata')) {
            $data = array(
                'ok' => false,
                'data' => $this->upload->display_errors()
            );
            
        } else {
                $data = array(
                        'data' => $this->upload->data()
                );
                $resize['image_library'] = 'GD2';
                $resize['source_image']	= UPLOADSFOLDER."registro/".$data["data"]["file_name"];
                $resize['maintain_ratio'] = TRUE;
                $resize['width']	 = 694;
                $resize['height']	= 477;
                $resize['new_image'] = UPLOADSFOLDER."registro/new/".$data["data"]["file_name"];

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
        $b = new Registro();
        $dat = $b->getRegistroById($id);
        $this->_data["info"] = $dat;
        $this->_data["update"] = $update;
        return $this->build("registro_edit");
    }
    
    public function update_Registro(){
        $b = new Registro();
        $datos = array(
            'id' => $this->input->post('id')
                
        );
        $update = $b->updateRegistro($datos); 
        $a = FALSE;
        if($this->input->post('imagen') != ''){
            $datos = array(
            'imagen' => $this->input->post('imagen'),
            'id' => $this->input->post('id')
        );
            $update = $b->updateRegistro($datos);
        }
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/registro/edit/".$this->input->post("id")."/".$a);
    }
    
    public function delete($id = ""){
        $b = new Registro();
        $return = FALSE;
        if ($b->eliminar($id)){
            $return = TRUE;
        };
        return redirect("cms/registro/index/".$return);
    }

}

