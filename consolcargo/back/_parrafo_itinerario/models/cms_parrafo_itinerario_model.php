<?php
/**
 * Description of cms_parrafo_itinerario_model
 *
 * @author Andres Felipe Lopez
 */
class cms_parrafo_itinerario_model extends CI_Model{
    /***
     * Get the parrafo_itinerario
     */
    function getAll(){
        $q = $this->db->get('cms_parrafo_itinerario');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene parrafo_itinerario
     * @param type $id
     * @return boolean 
     */
    function getParrafo_itinerario($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_parrafo_itinerario');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addParrafo_itinerario($file = NULL, $file1 = NULL){
        try{
            
        $data = array(  
            'texto' => $this->input->post('texto'),
        );
        
        if($file != NULL){
            $data['archivo'] = $file;
        }
				if($file1 != NULL){
            $data['archivo1'] = $file1;
        }
        $this->db->insert('cms_parrafo_itinerario',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editParrafo_itinerario($id,$file = NULL,$file1 = NULL){
        $this->db->where('id',$id);
        
        if($file != NULL){
			$data = array(
            'texto' => $this->input->post('texto'),
						'archivo' => $file,
						'archivo1' => $file1
        );
            
        }
        $this->db->update('cms_parrafo_itinerario',$data);
    }
    
    function deleteParrafo_itinerario($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_parrafo_itinerario');
    }
    
    
}

?>
