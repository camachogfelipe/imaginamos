<?php
/**
 * Description of cms_destacadohome_model
 *
 * @author Andres Felipe Lopez
 */
class cms_destacadohome_model extends CI_Model{
    /***
     * Get the destacadohome
     */
    function getAll(){
        $q = $this->db->get('cms_destacadohome');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene destacadohome
     * @param type $id
     * @return boolean 
     */
    function getDestacadohome($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_destacadohome');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function addDestacadohome($file = NULL){
        try{
            
        $data = array(  
            'texto' => $this->input->post('texto'),
            'web_tracking' => $this->input->post('web_tracking'),
            'pago_factura' => $this->input->post('pago_factura'),
            'itinerarios' => $this->input->post('itinerarios'),
            'web_tracking_interno' => $this->input->post('web_tracking_interno'),
            'pago_factura_interno' => $this->input->post('pago_factura_interno'),
            'itinerarios_interno' => $this->input->post('itinerarios_interno'),
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_destacadohome',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editDestacadohome($id,$file = NULL){
        $this->db->where('id',$id);
        $data = array(
            'texto' => $this->input->post('texto'),
            'web_tracking' => $this->input->post('web_tracking'),
            'pago_factura' => $this->input->post('pago_factura'),
            'itinerarios' => $this->input->post('itinerarios'),
            'web_tracking_interno' => $this->input->post('web_tracking_interno'),
            'pago_factura_interno' => $this->input->post('pago_factura_interno'),
            'itinerarios_interno' => $this->input->post('itinerarios_interno'),
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_destacadohome',$data);
    }
    
    function deleteDestacadohome($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_destacadohome');
    }
    
    
}

?>
