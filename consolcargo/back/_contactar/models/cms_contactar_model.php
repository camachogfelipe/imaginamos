<?php
/**
 * Description of cms_contactar_model
 *
 * @author Andres Felipe Lopez
 */
class cms_contactar_model extends CI_Model{
    /***
     * Get the contactar
     */
    function getAll(){
        $q = $this->db->get('cms_contactar');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene contactar
     * @param type $id
     * @return boolean 
     */
    function getContactar($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_contactar');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addContactar($file = NULL){
        try{
            
        $data = array(  
            'texto' => $this->input->post('texto'),
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_contactar',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editContactar($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
            'texto' => $this->input->post('texto'),
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_contactar',$data);
    }
    
    function deleteContactar($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_contactar');
    }
    
    
}

?>
