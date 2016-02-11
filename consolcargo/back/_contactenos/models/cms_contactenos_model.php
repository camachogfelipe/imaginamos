<?php
/**
 * Description of cms_contactenos_model
 *
 * @author Andres Felipe Lopez
 */
class cms_contactenos_model extends CI_Model{
    /***
     * Get the contactenos
     */
    function getAll(){
        $q = $this->db->get('cms_contactenos');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene contactenos
     * @param type $id
     * @return boolean 
     */
    function getContactenos($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_contactenos');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addContactenos($file = NULL){
        try{
            
        $data = array(  
            'telefono' => $this->input->post('telefono'),
            'correo' => $this->input->post('correo'),
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_contactenos',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editContactenos($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
            'telefono' => $this->input->post('telefono'),
            'correo' => $this->input->post('correo'),
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_contactenos',$data);
    }
    
    function deleteContactenos($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_contactenos');
    }
    
    
}

?>
