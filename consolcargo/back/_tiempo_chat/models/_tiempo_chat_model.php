<?php
/**
 * Description of _redes_sociales_model
 *
 * @author Andres Felipe Lopez
 */
class _tiempo_chat_model extends CI_Model{
    /***
     * Get the Tiempo_chat
     */
    function getAll(){
        $q = $this->db->get('cms_tiempo_chat');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene Tiempo_chat
     * @param type $id
     * @return boolean 
     */
    function getTiempo_chat($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_tiempo_chat');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addTiempo_chat($file = NULL){
        try{
            
        $data = array(  
            'time_chat' => $this->input->post('time_chat'),
        );
        
        $this->db->insert('cms_tiempo_chat',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editTiempo_chat($id,$file = NULL){
        $this->db->where('id',$id);
                
        $data = array(  
            'time_chat' => $this->input->post('time_chat'),
        );
		
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_tiempo_chat',$data);
    }
    
    function deleteTiempo_chat($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_tiempo_chat');
    }
    
    
}

?>
