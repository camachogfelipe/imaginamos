<?php

class _Quehacemos extends Back_Controller {

    public function __construct() {
        parent::__construct();
        $this->_data['nombremodulo'] = "QUE HACEMOS";
        //$this->load->model("destacados");
        if (true != $this->have_admin_access()) {
            return redirect(cms_url('login'), 'refresh');
        }
    }

    // ----------------------------------------------------------------------

    public function index($value = '') {

        $this->_data['save'] = $value;
        $b = new Quehacemos();
        $info = $b->getQuehacemos();
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->count();
        return $this->build('view');
    }

    public function add() {
        $this->_data['nombremodulo'] = "QUE HACEMOS / NUEVO";
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
        $b = new Quehacemos();
        if ($datos['seccion'] != '' && $datos['imagen'] != ''){
            
            $this->_data['save'] = FALSE;
            $build = 'new';
            if ($b->saveQuehacemos($datos)){
                $build = 'destacados';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
        }
        $info = $b->getQuehacemos();
        $this->_data["info"] = $info;
        return redirect('cms/destacados/index/'.$save);
        //return $this->build($build);
        
    }
    
    public function descripcion($idQ = "",$id = "",$update = ""){
        $this->_data['nombremodulo'] = "QUE HACEMOS / DESCRIPCIÓN";
        $this->load->model("_quehacemos/descripcion");
        $b = new Descripcion();
        //$dat = $b->getDescripcionById(1);
        $dat = $b->where("quehacemos_id", $idQ)->get();
        $this->_data["info"] = $dat;
        $this->_data["quehacemos_id"] = $idQ;
        $this->_data["update"] = $update;
        return $this->build("descripcion");
    }
    
    public function update_descripcion(){
        $this->load->model("_quehacemos/descripcion");
        $b = new Descripcion();
        $datos = $this->input->post();
        $update = $b->updateDescripcion($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/quehacemos/descripcion/".$this->input->post("quehacemos_id")."/".$this->input->post("id")."/".$a);
        //$this->build("edit");
    }
    
    public function bulletsuno($idQ = "",$update = ""){
        $this->_data['nombremodulo'] = "QUE HACEMOS / BULLETS UNO";
        $this->load->model("_quehacemos/titulobulletsuno");
        $this->load->model("_quehacemos/bulletsuno");
        $tb = new Titulobulletsuno();
        //$dat = $b->getDescripcionById(1);
        $dattitulo = $tb->where("quehacemos_id", $idQ)->get();
        $this->_data["infotitulo"] = $dattitulo;
        $dat = $tb->where("quehacemos_id", $idQ)->get();
        
        $b = new Bulletsuno();
        $info = $b->where("quehacemos_id", $idQ)->get(); 
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->where("quehacemos_id", $idQ)->count();
        
        $this->_data["quehacemos_id"] = $idQ;
        $this->_data["update"] = $update;
        return $this->build("bulletsuno");
    }
    
    public function update_titulobulletsuno(){
        $this->load->model("_quehacemos/titulobulletsuno");
        $b = new Titulobulletsuno();
        $datos = $this->input->post();
        $update = $b->updateTitulobulletsuno($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/quehacemos/bulletsuno/".$this->input->post("quehacemos_id")."/".$a);
        //$this->build("edit");
    }
    
    public function addbulletsuno($idQ) {
        $this->_data['nombremodulo'] = "QUE HACEMOS / NUEVO / BULLES UNO";
        $this->_data['quehacemos_id'] = $idQ;
        $this->build('newbulletsuno');
    }
    
    public function new_bulletsuno() {
        $datos = array(
            'titulo' => $this->input->post('titulo'),
            'quehacemos_id' => $this->input->post('quehacemos_id')
        );
        $this->_data['save'] = FALSE;
        $save = FALSE;
        $build = 'destacados';
        $b = new Bulletsuno();
        if ($datos['titulo'] != '' && $datos['quehacemos_id'] != ''){
            
            $this->_data['save'] = FALSE;
            $build = 'new';
            if ($b->saveBulletsuno($datos)){
                $build = 'destacados';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
        }
        $info = $b->where("quehacemos_id",$this->input->post('quehacemos_id'))->get();
        $this->_data["info"] = $info;
        return redirect("cms/quehacemos/bulletsuno/".$this->input->post("quehacemos_id")."/".$save);
        //return $this->build($build);
        
    }
    
    public function editbulletsuno($id = "",$idQ = "",$update = ""){
        $this->_data['nombremodulo'] = "QUE HACEMOS / EDIT / BULLES UNO";
        $b = new Bulletsuno();
        $dat = $b->getBulletsunoById($id);
        $this->_data["info"] = $dat;
        $this->_data["quehacemos_id"] = $idQ; 
        $this->_data["update"] = $update;
        return $this->build("editbulletsuno");
    }
    
    public function update_bulletsuno(){
        $b = new Bulletsuno();
        $datos = $this->input->post();
        $update = $b->updateBulletsuno($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/quehacemos/editbulletsuno/".$this->input->post("id")."/".$this->input->post("quehacemos_id")."/".$a);
        //$this->build("edit");
    }
    
    
    public function deletebulletsuno($id = "",$idQ = ""){
        $b = new Bulletsuno();
        $return = FALSE;
        if ($b->eliminar($id)){
            $return = TRUE;
        };
        return redirect("cms/quehacemos/bulletsuno/".$idQ."/".$return);
    }
    
    public function update_titulobulletsdos(){
        $this->load->model("_quehacemos/titulobulletsdos");
        $b = new Titulobulletsdos();
        $datos = $this->input->post();
        $update = $b->updateTitulobulletsdos($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/quehacemos/bulletsdos/".$this->input->post("quehacemos_id")."/".$a);
        //$this->build("edit");
    }
    
    public function bulletsdos($idQ = "",$update = ""){
        $this->_data['nombremodulo'] = "QUE HACEMOS / BULLETS DOS";
        $this->load->model("_quehacemos/titulobulletsdos");
        $this->load->model("_quehacemos/bulletsdos");
        $tb = new Titulobulletsdos();
        //$dat = $b->getDescripcionById(1);
        $dattitulo = $tb->where("quehacemos_id", $idQ)->get();
        $this->_data["infotitulo"] = $dattitulo;
        $dat = $tb->where("quehacemos_id", $idQ)->get();
        
        $b = new Bulletsdos();
        $info = $b->where("quehacemos_id", $idQ)->get(); 
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->where("quehacemos_id", $idQ)->count();
        
        $this->_data["quehacemos_id"] = $idQ;
        $this->_data["update"] = $update;
        return $this->build("bulletsdos");
    }
    
    public function addbulletsdos($idQ) {
        $this->_data['nombremodulo'] = "QUE HACEMOS / NUEVO / BULLES DOS";
        $this->_data['quehacemos_id'] = $idQ;
        $this->build('newbulletsdos');
    }
    
    public function new_bulletsdos() {
        $datos = array(
            'titulo' => $this->input->post('titulo'),
            'quehacemos_id' => $this->input->post('quehacemos_id')
        );
        $this->_data['save'] = FALSE;
        $save = FALSE;
        $build = 'destacados';
        $b = new Bulletsdos();
        if ($datos['titulo'] != '' && $datos['quehacemos_id'] != ''){
            
            $this->_data['save'] = FALSE;
            $build = 'new';
            if ($b->saveBulletsdos($datos)){
                $build = 'destacados';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
        }
        $info = $b->where("quehacemos_id",$this->input->post('quehacemos_id'))->get();
        $this->_data["info"] = $info;
        return redirect("cms/quehacemos/bulletsdos/".$this->input->post("quehacemos_id")."/".$save);
        //return $this->build($build);
        
    }
    
    public function editbulletsdos($id = "",$idQ = "",$update = ""){
        $this->_data['nombremodulo'] = "QUE HACEMOS / EDIT / BULLES DOS";
        $b = new bulletsdos();
        $dat = $b->getbulletsdosById($id);
        $this->_data["info"] = $dat;
        $this->_data["quehacemos_id"] = $idQ; 
        $this->_data["update"] = $update;
        return $this->build("editbulletsdos");
    }
    
    public function update_bulletsdos(){
        $b = new Bulletsdos();
        $datos = $this->input->post();
        $update = $b->updateBulletsdos($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/quehacemos/editbulletsdos/".$this->input->post("id")."/".$this->input->post("quehacemos_id")."/".$a);
        //$this->build("edit");
    }
    
    public function deletebulletsdos($id = "",$idQ = ""){
        $b = new Bulletsdos();
        $return = FALSE;
        if ($b->eliminar($id)){
            $return = TRUE;
        };
        return redirect("cms/quehacemos/bulletsdos/".$idQ."/".$return);
    }
    
    public function ventajas($idQ = "",$update = ""){
        $this->_data['nombremodulo'] = "QUE HACEMOS / VENTAJAS";
        $this->load->model("_quehacemos/ventajas");
        $b = new Ventajas();
        $info = $b->where("quehacemos_id", $idQ)->get(); 
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->where("quehacemos_id", $idQ)->count();
        
        $this->_data["quehacemos_id"] = $idQ;
        $this->_data["update"] = $update;
        return $this->build("ventajas");
    }
    
    public function addventajas($idQ) {
        $this->_data['nombremodulo'] = "QUE HACEMOS / NUEVO / BULLES DOS";
        $this->_data['quehacemos_id'] = $idQ;
        $this->build('newventajas');
    }
    
    public function new_ventajas() {
        $datos = array(
            'titulo' => $this->input->post('titulo'),
            'quehacemos_id' => $this->input->post('quehacemos_id')
        );
        $this->_data['save'] = FALSE;
        $save = FALSE;
        $build = 'destacados';
        $b = new Ventajas();
        if ($datos['titulo'] != '' && $datos['quehacemos_id'] != ''){
            
            $this->_data['save'] = FALSE;
            $build = 'new';
            if ($b->saveVentajas($datos)){
                $build = 'destacados';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
        }
        $info = $b->where("quehacemos_id",$this->input->post('quehacemos_id'))->get();
        $this->_data["info"] = $info;
        return redirect("cms/quehacemos/ventajas/".$this->input->post("quehacemos_id")."/".$save);
        //return $this->build($build);
        
    }
    
    public function editventajas($id = "",$idQ = "",$update = ""){
        $this->_data['nombremodulo'] = "QUE HACEMOS / EDIT / BULLES DOS";
        $b = new ventajas();
        $dat = $b->getventajasById($id);
        $this->_data["info"] = $dat;
        $this->_data["quehacemos_id"] = $idQ; 
        $this->_data["update"] = $update;
        return $this->build("editventajas");
    }
    
    public function update_ventajas(){
        $b = new Ventajas();
        $datos = $this->input->post();
        $update = $b->updateVentajas($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/quehacemos/editventajas/".$this->input->post("id")."/".$this->input->post("quehacemos_id")."/".$a);
        //$this->build("edit");
    }
    
    public function deleteventajas($id = "",$idQ = ""){
        $b = new Ventajas();
        $return = FALSE;
        if ($b->eliminar($id)){
            $return = TRUE;
        };
        return redirect("cms/quehacemos/ventajas/".$idQ."/".$return);
    }

    public function imagenes($idQ = "",$update = ""){
        $this->_data['nombremodulo'] = "QUE HACEMOS / IMAGENES";
        $this->load->model("_quehacemos/imagenes");
        $b = new Imagenes();
        $info = $b->where("quehacemos_id", $idQ)->get(); 
        $this->_data["info"] = $info;
        $this->_data["count"] = $b->where("quehacemos_id", $idQ)->count();
        
        $this->_data["quehacemos_id"] = $idQ;
        $this->_data["update"] = $update;
        return $this->build("imagenes");
    }
    
    public function addimagenes($idQ) {
        $this->_data['nombremodulo'] = "QUE HACEMOS / NUEVO / BULLES DOS";
        $this->_data['quehacemos_id'] = $idQ;
        $this->build('newimagenes');
    }
    
    public function new_imagenes() {
        $datos = array(
            'imagen' => $this->input->post('imagen'),
            'descripcion' => $this->input->post('descripcion'),
            'quehacemos_id' => $this->input->post('quehacemos_id')
        );
				if(!empty($_FILES['nombre'])) $nombre = $this->upload2();
				if($nombre['ok'] == true) $datos['imagen'] = $nombre['data']['file_name'];
        $this->_data['save'] = FALSE;
        $save = FALSE;
        $build = 'destacados';
        $b = new Imagenes();
        if ($datos['descripcion'] != '' && $datos['quehacemos_id'] != ''){
            $this->_data['save'] = FALSE;
            $build = 'new';
            if ($b->saveImagenes($datos)){
                $build = 'destacados';
                $this->_data["save"] = TRUE;
                $save = TRUE;
            }
            echo $b->saveImagenes($datos);
        }
        
        $info = $b->where("quehacemos_id",$this->input->post('quehacemos_id'))->get();
        $this->_data["info"] = $info;
        return redirect("cms/quehacemos/imagenes/".$this->input->post("quehacemos_id")."/".$save);
        //return $this->build($build);
        
    }
    
    public function editimagenes($id = "",$idQ = "",$update = ""){
        $this->_data['nombremodulo'] = "QUE HACEMOS / EDIT / IMAGENES";
        $b = new imagenes();
        $dat = $b->getimagenesById($id);
        $this->_data["info"] = $dat;
        $this->_data["quehacemos_id"] = $idQ; 
        $this->_data["update"] = $update;
        return $this->build("editimagenes");
    }
    
    public function update_imagenes(){
        $b = new Imagenes();
        $datos = $this->input->post();
				if(!empty($_FILES['nombre'])) $nombre = $this->upload2();
				if($nombre['ok'] == true) $datos['imagen'] = $nombre['data']['file_name'];
        $update = $b->updateImagenes($datos); 
        $a = FALSE;
        if ($update){
            $a = TRUE;
        }
        return redirect("cms/quehacemos/editimagenes/".$this->input->post("id")."/".$this->input->post("quehacemos_id")."/".$a);
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
                $resize['width']	 = 620;
                $resize['height']	= 306;
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
    
    public function deleteimagenes($id = "",$idQ = ""){
        $b = new Imagenes();
        $return = FALSE;
        if ($b->eliminar($id)){
            $return = TRUE;
        };
        return redirect("cms/quehacemos/imagenes/".$idQ."/".$return);
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

