<?php
/**
 * Description of cms_noticias_model
 *
 * @author Andres Felipe Lopez
 */
class cms_noticias_model extends CI_Model{
    /***
     * Get the noticias
     */
    function getAll(){
        $q = $this->db->get('cms_noticias');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene noticias
     * @param type $id
     * @return boolean 
     */
    function getNoticias($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_noticias');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addNoticias($file = NULL){
        try{
            
        $data = array(  
            'titulo' => $this->input->post('titulo'),
            'texto' => $this->input->post('texto'),
            'link' => $this->input->post('link'),
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_noticias',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editNoticias($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
            'titulo' => $this->input->post('titulo'),
            'texto' => $this->input->post('texto'),
            'link' => $this->input->post('link'),
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_noticias',$data);
    }
    
    function deleteNoticias($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_noticias');
    }
    
    
}

?>
