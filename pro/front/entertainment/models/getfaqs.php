<?php
class GetFaqs extends CI_Model{
  
   public function GetFaqsTotal(){
     
        $this->db->where('activo', '0');        
        $this->db->order_by('id', 'DESC');
       // $this->db->limit($limit, $start);
        $q = $this->db->get('cms_faqs');
        if($q->num_rows() == '0'){
            return false;
        }else{
            return $q->result();
        }
    }
    
 
}
?>
