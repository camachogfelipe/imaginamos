<?php

/**
 * Description of cms_banner_model
 *
 * @author Andres Felipe Lopez
 */
class cms_banner_model extends CI_Model {
    /*     * *
     * Get the banner
     */

    function getAll() {
        $q = $this->db->get('cms_banner');
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->result();
        }
    }

    /**
     * obtiene banner
     * @param type $id
     * @return boolean 
     */
    function getBanner($id) {
        $this->db->where('id', $id);
        $q = $this->db->get('cms_banner');
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->row();
        }
    }

    function addBanner($file = NULL) {
        try {

            $data = array(
                'titulo' => $this->input->post('titulo'),
                'texto' => $this->input->post('texto'),
            );

            if ($file != NULL) {
                $data['imagen'] = $file;
            }
            $this->db->insert('cms_banner', $data);
        } catch (Exception $e) {
            show_error($e->getMessage());
            return false;
        }

        return true;
    }

    function editBanner($id, $file = NULL) {
        $this->db->where('id', $id);
        $data = array(
            'titulo' => $this->input->post('titulo'),
            'texto' => $this->input->post('texto'),
        );
        if ($file != NULL) {
            $data['imagen'] = $file;
        }

        $this->db->update('cms_banner', $data);
    }

    function deleteBanner($id) {
        $this->db->where('id', $id);
        $this->db->delete('cms_banner');
    }

}

?>
