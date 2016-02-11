<?php

class Administrators_model extends CI_Model {

   function getAll() {
      $this->db->where('id_user !=', 1);
      $q = $this->db->get('cms_user');
      if ($q->num_rows() > 0) {
         return $q->result();
      } else {
         return false;
      }
   }
   
   function insert($data){
      $this->db->insert('cms_user',$data);
   }
   
   function delete($id){
      $this->db->where('id_user',$id);
      if($this->db->delete('cms_user')){
         return 'ok';
      }else{
         return 'fail';
      }
   }
   
}
