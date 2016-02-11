<?php
/**
 * Description of cms_enlaces_model
 *
 * @author Andres Felipe Lopez
 */
class cms_enlaces_model extends CI_Model{
    /***
     * Get the enlaces
     */
    function getAll(){
        $q = $this->db->get('cms_enlaces');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    function getAllByTipo($tipo){
        $this->db->where('tipo',$tipo);
        $this->db->order_by('titulo', 'asc');
        $q = $this->db->get('cms_enlaces');
        
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    /**
     * obtiene enlaces
     * @param type $id
     * @return boolean 
     */
    function getEnlaces($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_enlaces');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addEnlaces($file = NULL,$file_path=NULL){
        try{
            
        $data = array(  
            'tipo' => $this->input->post('tipo'),
            'titulo' => $this->input->post('titulo'),
            'link' => $this->input->post('link'),
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
 
        if($file_path != NULL){
            $data['path_pdf'] = $file_path;
        }
 

        $this->db->insert('cms_enlaces',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editEnlaces($id,$file = NULL,$file_path=NULL){
        $this->db->where('id',$id);
        $data = array(
            'tipo' => $this->input->post('tipo'),
            'titulo' => $this->input->post('titulo'),
            'link' => $this->input->post('link'),
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        if($file_path != NULL){
            $data['path_pdf'] = $file_path;
        }
        
        $this->db->update('cms_enlaces',$data);
    }
    
    function deleteEnlaces($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_enlaces');
    }
    
    
}

?>
