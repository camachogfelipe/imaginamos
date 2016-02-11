<?php
/**
 * Description of cms_oficinas_model
 *
 * @author Andres Felipe Lopez
 */
class cms_oficinas_model extends CI_Model{
    /***
     * Get the oficinas
     */
    function getAll(){
        $q = $this->db->get('cms_oficinas');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene oficinas
     * @param type $id
     * @return boolean 
     */
    function getOficinas($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_oficinas');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addOficinas($file = NULL){
        try{
            
        $data = array(  
            'titulo' => $this->input->post('titulo'),
            'texto' => $this->input->post('texto'),
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_oficinas',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editOficinas($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
            'titulo' => $this->input->post('titulo'),
            'texto' => $this->input->post('texto'),
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_oficinas',$data);
    }
    
    function deleteOficinas($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_oficinas');
    }
    
    
}

?>
