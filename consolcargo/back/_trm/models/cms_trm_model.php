<?php
/**
 * Description of cms_trm_model
 *
 * @author Andres Felipe Lopez
 */
class cms_trm_model extends CI_Model{
    /***
     * Get the trm
     */
    function getAll(){
        $q = $this->db->get('cms_trm');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene trm
     * @param type $id
     * @return boolean 
     */
    function getTrm($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_trm');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addTrm($file = NULL){
        try{
            
        $data = array(  
            'trm' => $this->input->post('trm'),
						'color' => $this->input->post('color')
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_trm',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editTrm($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
            'trm' => $this->input->post('trm'),
						'color' => $this->input->post('color')
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_trm',$data);
    }
    
    function deleteTrm($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_trm');
    }
    
    
}

?>
