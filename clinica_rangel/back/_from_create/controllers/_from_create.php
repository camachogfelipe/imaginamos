<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of from_create
 *
 * @author CF-4091
 */
class _from_create extends Back_Controller  {
    //put your code here
    
    private $obj; 
    public $config = array('img_mult'=>false); 
    
    
    public function __construct() {
        ;
    }
    
    public function setObj($Obj = NUll) {
        $this->obj = $Obj; 
    }
    
    public function imagen($id="", $path="", $label="Imagen", $instructios = "0px x 0px", $mult = false) {
        $data['label_load_img'] = 'Cargar Imagen' ; 
        $data['label_delete'] = 'Eliminar' ; 
        $data['label_change'] = 'Cambiar' ; 
        $data['title'] = $label ; 
        $data['imagen_id'] = $id;
        $data['imagen_path'] = $path;
        $data['instrutions'] = $instructios;
        if($mult){
           return $this->buildajax('template_img_mult');
        }
        return $this->buildajax('template_img');
    }
    
    public function input($dato="", $name = "",$max_length = 15, $label="Texto", $instructios = "Maximo 200 caracteres") {
        $data['title'] = $label ;
        $data['name'] = $name ;
        $data['instrutions'] = $instructios;
        $data['max_length'] = $max_length;
        return $this->buildajax('input',$dato);
   }
    
    public function text($dato="", $name = "", $label="Texto", $instructios = "Maximo 200 caracteres" ,$wysiwg=false , $count_text=false , $count="0") {
        $data['title'] = $label ;
        $data['name'] = $name ;
        $data['instrutions'] = $instructios;
        $data['dato'] = $dato ;
        $data['count_text'] = $count_text ;
        $data['wysiwg'] = $wysiwg ;
        $data['count'] = $count ;
        return $this->buildajax('text',$data);   
    }
    
    public function combox($datos=array(), $name = "", $label="Lista", $instructios = "Seleccionar un items") {
        $data['title'] = $label ;
        $data['name'] = $name ;
        $data['instrutions'] = $instructios;
        $data['datos'] = $datos ;
        return $this->buildajax('text',$data);   
    }
    
    public function generate_out() {
        
        $obj = new contenedor();
        $datos = $obj->fields; 
        $html = "hola mundo";
        
        foreach ($datos as $key => $value) {
             if($key == 'imagen_id'){
                 $img = new imagen(); 
                 $img->get_by_id($value); 
                 if(!$img->exists())
                     $img->id = "";
                $html .= $this->imagen($img->id, $img->path, "Imagen", "1025px x 400px"); 
             }else{
               $pos = strpos($key, '_id');
               if($pos !== false){
                $html .= $this->combox ($obj->get_data(), $key, str_replace('_id',"", $key)); 
               }else{
                    $pos = strpos($key, 'texto');
                    $pos1 = strpos($key, 'text');
                    $pos2 = strpos($key, 'intro');
                    $pos3 = strpos($key, 'descripcion');
                    $v = $obj->validation;
                    $val = $v[$key];
                    if(($pos!==false) or ($pos1!==false) or ($pos2!==false) or ($pos3!==false) ){
                        $html .= $this->text($obj->{$key}, $key, "Descripcion" ,"Maximo ".$val['max_length']." caracteres" ,false,true, $val['max_length']); 
                    }else{
                        $html .= $this->input($obj->{$key}, $key, $val['max_length'], $key, "Maximo ".$val['max_length']." caracteres") ;
                    }
               }
             }
        }
        echo $html; 
        
       
    }
    
}

?>
