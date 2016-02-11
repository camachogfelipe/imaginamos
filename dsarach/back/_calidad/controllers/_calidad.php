<?php

class _Calidad extends Back_Controller {

    public function __construct() {
        parent::__construct();
        $this->_data['nombremodulo'] = "CALIDAD";
        //$this->load->model("banner");
        if (true != $this->have_admin_access()) {
            return redirect(cms_url('login'), 'refresh');
        }
    }

    // ----------------------------------------------------------------------

    public function index($value = '') {

        $this->_data['save'] = $value;
        $b = new Calidad();
        $info = $b->getCalidad();
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->count();
        return $this->build('calidad');
    }

    public function edit($id = "",$update = ""){
        $b = new Calidad();
        $dat = $b->getCalidadById($id);
        $this->_data["info"] = $dat;
        $this->_data["update"] = $update;
        return $this->build("calidad");
    }
    
    public function update_record(){
        $b = new Calidad();
        $datos = $this->input->post();
        $update = $b->updateCalidad($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/calidad/edit/".$this->input->post("id")."/".$a);
        //$this->build("banner_edit");
    }
    
    public function imagenes($update = ""){
        $this->_data['nombremodulo'] = "CALIDAD / IMAGENES";
        $this->load->model("_calidad/imagenes");
        $b = new Imagenes();
        $info = $b->getImagenes(); 
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->getImagenes()->count();
        return $this->build("imagenes");
    }
    
    public function addimagenes() {
        $this->_data['nombremodulo'] = "CALIDAD / NUEVO / IMAGEN";
        $this->build('newimagenes');
    }
    
    public function new_imagenes() {
        $datos = array(
            'imagen' => $this->input->post('imagen'),
            'imagen2' => $this->input->post('imagen2')
            
        );
        $this->_data['save'] = FALSE;
        $save = FALSE;
        $build = 'destacados';
        $b = new Imagenes();
        //if ($datos['descripcion'] != '' && $datos['quehacemos_id'] != ''){
            $this->_data['save'] = FALSE;
            $build = 'new';
            if ($b->saveImagenes($datos)){
                $build = 'destacados';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
           // echo $b->saveImagenes($datos);
        //}
        
        $info = $b->get();
        $this->_data["info"] = $info;
        return redirect("cms/calidad/imagenes/".$save);
        //return $this->build($build);
        
    }
    
    public function editimagenes($id = "",$update = ""){
        $this->_data['nombremodulo'] = "CALIDAD / EDIT / IMAGENES";
        $b = new Imagenes();
        $dat = $b->getImagenesById($id);
        $this->_data["info"] = $dat;
        $this->_data["update"] = $update;
        return $this->build("editimagenes");
    }
    
    public function update_imagenes(){
        $b = new Imagenes();
        $datos = $this->input->post();
        $update = $b->updateImagenes($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/calidad/editimagenes/".$this->input->post("id")."/".$a);
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
                $resize['width']	 = 440;
                $resize['height']	= 400;
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
    
    public function deleteimagenes($id = ""){
        $b = new Imagenes();
        $return = FALSE;
        if ($b->eliminar($id)){
            $return = TRUE;
        };
        return redirect("cms/calidad/imagenes/".$return);
    }
    
    public function destacados($update = ""){
        $this->_data['nombremodulo'] = "CALIDAD / DESTACADOS";
        $this->load->model("_calidad/destacado");
        $b = new Destacado();
        $info = $b->getDestacado(); 
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->getDestacado()->count();
        return $this->build("destacados");
    }
    
    public function adddestacados() {
        $this->_data['nombremodulo'] = "CALIDAD / NUEVO / DESTACADO";
        $this->build('new_destacados');
    }
    
    public function new_destacados() {
        $datos = array(
            'titulo' => $this->input->post('titulo'),
            'link' => $this->input->post('link'),
            'descripcion' => $this->input->post('descripcion')
            
        );
        $this->_data['save'] = FALSE;
        $save = FALSE;
        $build = 'destacados';
        $b = new Destacado();
        //if ($datos['descripcion'] != '' && $datos['quehacemos_id'] != ''){
            $this->_data['save'] = FALSE;
            $build = 'new';
            if ($b->saveDestacado($datos)){
                $build = 'destacados';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
           // echo $b->saveImagenes($datos);
        //}
        
        $info = $b->get();
        $this->_data["info"] = $info;
        return redirect("cms/calidad/destacados/".$save);
        //return $this->build($build);
        
    }
    
    public function editdestacados($id = "",$update = ""){
        $this->_data['nombremodulo'] = "CALIDAD / EDIT / DESTACADOS";
        $b = new Destacado();
        $dat = $b->getDestacadoById($id);
        $this->_data["info"] = $dat;
        $this->_data["update"] = $update;
        return $this->build("destacados_edit");
    }
    
    public function update_destacados(){
        $b = new Destacado();
        $datos = $this->input->post();
        $update = $b->updateDestacado($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/calidad/editdestacados/".$this->input->post("id")."/".$a);
        //$this->build("edit");
    }
    
    public function deletedestacados($id = ""){
        $b = new Destacado();
        $return = FALSE;
        if ($b->eliminar($id)){
            $return = TRUE;
        };
        return redirect("cms/calidad/destacados/".$return);
    }


}

