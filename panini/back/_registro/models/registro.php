<?php

class Registro extends DataMapper {

    public $model = 'registro';
    public $table = 'registros';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getRegistro(){
        return $this->get();
    }
    
    public function saveRegistro($object = "") {
        $this->razon_social = $object['razon_social'];
        $this->nit = $object['nit'];
        $this->direccion = $object['direccion'];
        $this->ciudad = $object['telefono'];
        $this->actividad_comercial = $object['actividad_comercial'];
        $this->marcas_porta = $object['marcas_porta'];
        $this->mayorista = $object['mayorista'];
        $this->distribuidor = $object['distribuidor'];
        $this->puntosdeventa = $object['puntosdeventa'];
        $this->puntos_venta = $object['puntos_venta'];
        $this->items = $object['items'];
        $this->comentarioadicional = $object['comentarioadicional'];
        $this->cantidad_vendedores = $object['cantidad_vendedores'];
        $this->zona_cobertura = $object['zona_cobertura'];
        $this->nombre_ref = $object['nombre_ref'];
        $this->telefono_ref = $object['telefono_ref'];
        $this->direccion_ref = $object['direccion_ref'];
        $this->tiempo_operaciones = $object['tiempo_operaciones'];
        $this->contacto_resp = $object['contacto_resp'];
        $this->cargo = $object['cargo'];
        $this->celular = $object['celular'];
        $this->correo_contacto = $object['correo_contacto'];
        $this->trabajadoantes = $object['trabajadoantes'];
        $this->distribuidor_panini = $object['distribuidor_panini'];
        $this->sobres_2006 = $object['sobres_2006'];
        $this->sobres_2010 = $object['sobres_2010'];
        $this->cantidad_sobres = $object['cantidad_sobres'];
        return $this->save();
    }
    
    public function getRegistroById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateRegistro($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

