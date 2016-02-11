<?php
/**
 * Description of cms_servicios_model
 *
 * @author Andres Felipe Lopez
 */
class cms_servicios_model extends CI_Model{
    /***
     * Get the servicios
     */
    function getAll(){
        $q = $this->db->get('cms_servicios');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /***
     * Get the servicios
     */
    function getDetalleServicio(){
        $query = $this->db->select("cms_servicios.*");
        $query = $this->db->join("cms_detalle_servicios", "cms_servicios.id = cms_detalle_servicios.id_servicio");        
//        $this->db->order_by('cms_servicios.titulo', 'asc');
        $q = $this->db->get('cms_servicios');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene servicios
     * @param type $id
     * @return boolean 
     */
    function getServicios($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_servicios');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addServicios($file = NULL){
        try{
        $data = array(  
            'titulo' => $this->input->post('titulo'),
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_servicios',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editServicios($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
            'titulo' => $this->input->post('titulo'),
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_servicios',$data);
    }
    
    function deleteServicios($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_servicios');
    }
    
    
}

?>
