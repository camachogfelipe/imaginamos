<?php
/**
 * Description of _redes_sociales_model
 *
 * @author Andres Felipe Lopez
 */
class _redes_sociales_model extends CI_Model{
    /***
     * Get the redes_sociales
     */
    function getAll(){
        $q = $this->db->get('cms_redes_sociales');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene redes_sociales
     * @param type $id
     * @return boolean 
     */
    function getRedes_sociales($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_redes_sociales');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addRedes_sociales($file = NULL){
        try{
            
        $data = array(  
            'facebook' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'youtube' => $this->input->post('youtube'),
            'google' => $this->input->post('google'),
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_redes_sociales',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editRedes_sociales($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
            'facebook' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'youtube' => $this->input->post('youtube'),
            'google' => $this->input->post('google'),
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_redes_sociales',$data);
    }
    
    function deleteRedes_sociales($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_redes_sociales');
    }
    
    
}

?>
