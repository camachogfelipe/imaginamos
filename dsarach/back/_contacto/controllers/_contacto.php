<?php

class _Contacto extends Back_Controller {

    public function __construct() {
        parent::__construct();
        $this->_data['nombremodulo'] = "TEXTO CONTACTO";
        //$this->load->model("banner");
        if (true != $this->have_admin_access()) {
            return redirect(cms_url('login'), 'refresh');
        }
    }

    // ----------------------------------------------------------------------

    public function index($value = '') {
        $this->load->model(array('_contacto/contacto'));
        $this->_data['save'] = $value;
        $b = new Contacto();
        $info = $b->getContactoById(1);
        $this->_data["info"] = $info;
        return $this->build('edit');
    }

    
    public function upload() {
        $config = array(
            'allowed_types' => 'pdf',
            'upload_path' => UPLOADSFOLDER,
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
                        'ok' => true,
                        'resize' => true,
                        'data' => $this->upload->data()
                    );
        }
        echo json_encode($data);
    }
    
    public function update_record(){
        $b = new Contacto();
        $datos = $this->input->post();
        $update = $b->updateContacto($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/contacto/index/".$a);
        
    }
    
    

}

