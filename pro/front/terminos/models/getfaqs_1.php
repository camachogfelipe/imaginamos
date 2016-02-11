<?php
class GetFaqs extends CI_Model{
    
    public function GetFaqsTotal(){
        //$this->db->where('ko_activo', 'si');        
        $this->db->order_by('id', 'ASC');
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
