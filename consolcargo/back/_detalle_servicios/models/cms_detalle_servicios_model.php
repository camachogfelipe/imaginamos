<?php

/**
 * Description of cms_detalle_servicios_model
 *
 * @author Andres Felipe Lopez
 */
class cms_detalle_servicios_model extends CI_Model {
    /*     * *
     * Get the detalle_servicios
     */

    function getAll() {
        $q = $this->db->get('cms_detalle_servicios');
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->result();
        }
    }

    function getPais() {
        $q = $this->db->get('cms_pais');
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->result();
        }
    }

    function getCiudadAll() {  
        $q = $this->db->query("SELECT `cms_ciudad`.`id`, `cms_ciudad`.`edi`, CONCAT_WS('::', `cms_ciudad`.`nombre`, `cms_pais`.`nombre`) AS nombre FROM (`cms_ciudad`) JOIN `cms_pais` ON `cms_pais`.`id`=`cms_ciudad`.`id_pais`");
        
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->result();
        }
    }

    function getCiudadOrigen() {
    //  $sh = $this->input->post('sh'); 
    //    if(!is_null($sh))
    //       $q = $this->db->query("SELECT `cms_ciudad`.`id`, `cms_ciudad`.`edi`, CONCAT_WS('::', `cms_ciudad`.`nombre`, `cms_pais`.`nombre`) AS nombre FROM (`cms_ciudad`) JOIN `cms_pais` ON `cms_pais`.`id`=`cms_ciudad`.`id_pais`");
    //    else    

        //$q = $this->db->query("SELECT DISTINCT `cms_ciudad`.`id`, `cms_ciudad`.`edi`, CONCAT_WS('::', `cms_ciudad`.`nombre`, `cms_pais`.`nombre`) AS nombre FROM (`cms_ciudad`) INNER JOIN `cms_itinerario` ON `cms_ciudad`.`nombre` = `cms_itinerario`.`port_of_loading` INNER JOIN `cms_pais` ON `cms_pais`.`id`=`cms_ciudad`.`id_pais`");
				
				$q = $this->db->query("SELECT	DISTINCT cms_itinerario.`port_of_loading`, cms_ciudad.`nombre`, 
	CONCAT_WS('::',(CASE WHEN cms_itinerario.`port_of_loading` <> '' THEN cms_itinerario.`port_of_loading` ELSE ' ' END) , (CASE WHEN cms_pais.`nombre` <> '' THEN cms_pais.`nombre` ELSE ' ' END)) AS nombre
FROM 	cms_itinerario
LEFT OUTER JOIN cms_ciudad ON cms_ciudad.`nombre` LIKE (cms_itinerario.`port_of_loading`) 
LEFT OUTER JOIN cms_pais ON cms_pais.`id`=cms_ciudad.`id_pais`");
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->result();
        }
    }

    function getCiudadDestino() {
    //  $sh = $this->input->post('sh'); 
    //    if(!is_null($sh))
    //       $q = $this->db->query("SELECT `cms_ciudad`.`id`, `cms_ciudad`.`edi`, CONCAT_WS('::', `cms_ciudad`.`nombre`, `cms_pais`.`nombre`) AS nombre FROM (`cms_ciudad`) JOIN `cms_pais` ON `cms_pais`.`id`=`cms_ciudad`.`id_pais`");
    //    else    

        //$q = $this->db->query("SELECT DISTINCT `cms_ciudad`.`id`, `cms_ciudad`.`edi`, CONCAT_WS('::', `cms_ciudad`.`nombre`, `cms_pais`.`nombre`) AS nombre FROM (`cms_ciudad`) INNER JOIN `cms_itinerario` ON `cms_ciudad`.`nombre` = `cms_itinerario`.`port_of_discharge` INNER JOIN `cms_pais` ON `cms_pais`.`id`=`cms_ciudad`.`id_pais`");
				
				$q = $this->db->query("SELECT	DISTINCT cms_itinerario.`port_of_discharge`, cms_ciudad.`nombre`, 
	CONCAT_WS('::',(CASE WHEN cms_itinerario.`port_of_discharge` <> '' THEN cms_itinerario.`port_of_discharge` ELSE ' ' END) , (CASE WHEN cms_pais.`nombre` <> '' THEN cms_pais.`nombre` ELSE ' ' END)) AS nombre
FROM 	cms_itinerario
LEFT OUTER JOIN cms_ciudad ON cms_ciudad.`nombre` LIKE (cms_itinerario.`port_of_discharge`) 
LEFT OUTER JOIN cms_pais ON cms_pais.`id`=cms_ciudad.`id_pais`");
				
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->result();
        }
    }

    function getCiudad($pais) {
        $this->db->where('id_pais', $pais);
        $q = $this->db->get('cms_ciudad');
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->result();
        }
    }

    function getPaisById($id) {
        $this->db->where('id', $id);
        $q = $this->db->get('cms_pais');
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->row();
        }
    }

    function getCiudadById($id) {
        $this->db->where('id', $id);
        $q = $this->db->get('cms_ciudad');
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->row();
        }
    }

    /**
     * obtiene detalle_servicios
     * @param type $id
     * @return boolean 
     */
    function getDetalle_serviciosById($id) {
        $this->db->where('id', $id);
        $q = $this->db->get('cms_detalle_servicios');
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->row();
        }
    }

    /**
     * obtiene detalle_servicios
     * @param type $id
     * @return boolean 
     */
    function getDetalle_servicios($id) {
        $query = $this->db->select("cms_detalle_servicios.*, cms_servicios.titulo servicio");
        $query = $this->db->join("cms_servicios", "cms_servicios.id = cms_detalle_servicios.id_servicio");
        $this->db->where('id_servicio', $id);
        $q = $this->db->get('cms_detalle_servicios');
        if ($q->num_rows() == 0) {
            return false;
        } else {
            return $q->row();
        }
    }

    function addDetalle_servicios($file = NULL, $idServicio) {
        try {

            $data = array(
                'titulo' => $this->input->post('titulo'),
                'id_servicio' => $idServicio,
                'texto' => $this->input->post('texto'),
                'texto_contactenos' => $this->input->post('texto_contactenos'),
            );

            if ($file != NULL) {
                $data['imagen'] = $file;
            }
            $this->db->insert('cms_detalle_servicios', $data);
        } catch (Exception $e) {
            show_error($e->getMessage());
            return false;
        }

        return true;
    }

    function editDetalle_servicios($id, $idServicio, $file = NULL) {
        $this->db->where('id', $id);
        $data = array(
            'titulo' => $this->input->post('titulo'),
            'id_servicio' => $idServicio,
            'texto' => $this->input->post('texto'),
            'texto_contactenos' => $this->input->post('texto_contactenos'),
        );
        if ($file != NULL) {
            $data['imagen'] = $file;
        }

        $this->db->update('cms_detalle_servicios', $data);
    }

    function deleteDetalle_servicios($id) {
        $this->db->where('id', $id);
        $this->db->delete('cms_detalle_servicios');
    }

}

?>
