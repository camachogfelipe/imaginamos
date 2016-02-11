<?php
/**
 * Description of cms_visitenos_model
 *
 * @author Andres Felipe Lopez
 */
class cms_visitenos_model extends CI_Model{
    /***
     * Get the visitenos
     */
    function getAll(){
        $q = $this->db->get('cms_visitenos');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene visitenos
     * @param type $id
     * @return boolean 
     */
    function getVisitenos($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_visitenos');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addVisitenos($file = NULL){
        try{
            
        $data = array(  
            'direccion' => $this->input->post('direccion'),
            'barrio' => $this->input->post('barrio'),
            'ciudad' => $this->input->post('ciudad'),
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_visitenos',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editVisitenos($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
            'direccion' => $this->input->post('direccion'),
            'barrio' => $this->input->post('barrio'),
            'ciudad' => $this->input->post('ciudad'),
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_visitenos',$data);
    }
    
    function deleteVisitenos($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_visitenos');
    }
    
    
}

?>
