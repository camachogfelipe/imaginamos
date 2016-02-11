<?php
/**
 * Description of cms_itinerario_model
 *
 * @author Andres Felipe Lopez
 */
class cms_itinerario_model extends CI_Model{
    /***
     * Get the itinerario
     */
    function getAll(){
        $q = $this->db->get('cms_itinerario');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    /**
     * obtiene itinerario
     * @param type $id
     * @return boolean 
     */
    function getItinerario($id){
        $this->db->where('id',$id);
        $q = $this->db->get('cms_itinerario');
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->row();
        }
    }
    
    function getByOrigenDestino($origen, $destino){
        $this->db->where('port_of_loading',$origen);
        $this->db->where('port_of_discharge',$destino);
        $q = $this->db->get('cms_itinerario');
  //      echo $this->db->last_query();    
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }

    function getOrigen($origen){
        $this->db->select('port_of_loading');
        $q = $this->db->get('cms_itinerario');
//        echo $this->db->last_query();    
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }


    function getDestino($destino){
        $this->db->select('port_of_discharge');
        $q = $this->db->get('cms_itinerario');
//        echo $this->db->last_query();    
        if($q->num_rows() == 0){
            return false;
        }else{
            return $q->result();
        }
    }
    
    function addItinerario($file = NULL){
        try{
            
          $type = 0; 
            if(is_numeric($this->input->post('type_import'))){
                 $type = 1;

            }else{
                 $type = 0;
            }    

        $data = array(  
            'carrier' => $this->input->post('carrier'),
            'vessel' => $this->input->post('vessel'),
            'voyage' => $this->input->post('voyage'),
            'port_of_loading' => $this->input->post('port_of_loading'),
            'port_of_discharge' => $this->input->post('port_of_discharge'),
            'cut_off' => $this->input->post('cut_off'),
			'hora' => $this->input->post('hora'),
            'etd' => $this->input->post('etd'),
            'eta' => $this->input->post('eta'),
            'tt' => $this->input->post('tt'),
            'requeriments' => $this->input->post('requeriments'),
            'type_import' => $type,
        );
        
        if($file != NULL){
            $data['imagen'] = $file;
        }
        $this->db->insert('cms_itinerario',$data);
        }  catch (Exception $e){
            show_error($e->getMessage());
            return false;
        }
        
        return true;
    }
    
    function editItinerario($id,$file = NULL){
         $type = 0; 
            if(is_numeric($this->input->post('type_import'))){
                 $type = 1;
            }else{
                 $type = 0;
            }   
        $this->db->where('id',$id);
        $data = array(
            'carrier' => $this->input->post('carrier'),
            'vessel' => $this->input->post('vessel'),
            'voyage' => $this->input->post('voyage'),
            'port_of_loading' => $this->input->post('port_of_loading'),
            'port_of_discharge' => $this->input->post('port_of_discharge'),
            'cut_off' => $this->input->post('cut_off'),
			'hora' => $this->input->post('hora'),
            'etd' => $this->input->post('etd'),
            'eta' => $this->input->post('eta'),
            'tt' => $this->input->post('tt'),
            'requeriments' => $this->input->post('requeriments'),
            'type_import' => $type,
        );
        if($file != NULL){
            $data['imagen'] = $file;
        }
        
        $this->db->update('cms_itinerario',$data);
    }
    
    function deleteItinerario($id){
        $this->db->where('id',$id);
        $this->db->delete('cms_itinerario');
    }
    
    
}

?>
