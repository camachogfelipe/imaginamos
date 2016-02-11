<?php
/**
 * Description of cms_certificaciones_model
 *
 * @author Andres Felipe Lopez
 */
class cms_certificaciones_model extends CI_Model{
    /***
     * Get the certificaciones
     */
    function getAll(){
        $q = $this->db->get('cms_certificaciones');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene certificaciones
     * @param type $id
     * @return boolean 
     */
    function getCertificaciones($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_certificaciones');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addCertificaciones($file = NULL){
        try{
            
        $data = array(  
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_certificaciones',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editCertificaciones($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_certificaciones',$data);
    }
    
    function deleteCertificaciones($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_certificaciones');
    }
    
    
}

?>
