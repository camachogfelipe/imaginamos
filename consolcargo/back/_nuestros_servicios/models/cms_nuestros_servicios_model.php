<?php
/**
 * Description of cms_nuestros_servicios_model
 *
 * @author Andres Felipe Lopez
 */
class cms_nuestros_servicios_model extends CI_Model{
    /***
     * Get the nuestros_servicios
     */
    function getAll(){
        $q = $this->db->get('cms_nuestros_servicios');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene nuestros_servicios
     * @param type $id
     * @return boolean 
     */
    function getNuestros_servicios($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_nuestros_servicios');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addNuestros_servicios($file = NULL){
        try{
            
        $data = array(  
            'texto' => $this->input->post('texto'),
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_nuestros_servicios',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editNuestros_servicios($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
            'texto' => $this->input->post('texto'),
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_nuestros_servicios',$data);
    }
    
    function deleteNuestros_servicios($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_nuestros_servicios');
    }
    
    
}

?>
