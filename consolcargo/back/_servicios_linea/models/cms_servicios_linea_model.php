<?php
/**
 * Description of cms_servicios_linea_model
 *
 * @author Andres Felipe Lopez
 */
class cms_servicios_linea_model extends CI_Model{
    /***
     * Get the servicios_linea
     */
    function getAll(){
        $q = $this->db->get('cms_servicios_linea');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene servicios_linea
     * @param type $id
     * @return boolean 
     */
    function getServicios_linea($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_servicios_linea');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addServicios_linea($file = NULL){
        try{
            
        $data = array(  
            'texto' => $this->input->post('texto'),
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_servicios_linea',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editServicios_linea($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
            'texto' => $this->input->post('texto'),
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_servicios_linea',$data);
    }
    
    function deleteServicios_linea($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_servicios_linea');
    }
    
    
}

?>
