<?php

////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
class Tables2 {

    var $db;
    var $id;
    
    function __construct($db,$id) {
        $this->db = $db;
        $this->id = $id;
    }

//IMPRIME FORMULARIO PARA LOS ADMINISTRADORES
    function printTableUsers() {
        
        if($this->id != ""){
        $query = "SELECT * FROM actividad where cronograma_id = '$this->id' ORDER BY id ASC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        $numOfResults = $this->db->getNumResults();
        
        }  else {
        $query = "SELECT * FROM actividad where ORDER BY id ASC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        $numOfResults = $this->db->getNumResults();
        }

        $html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<legend><h1>Actividades</h1></legend>
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Actividad</div></th>
                                <th><div class="th_wrapp">fecha</div></th>
                                <th><div class="th_wrapp">Acción</div></th>
			</tr>
		</thead>
		<tbody>
		';

        if ($numOfResults > 0) {
            $Consultas = new Consultas;
            foreach ($results as $result) {
                $html .= '
					<tr class="odd gradeX">
					
                                        <td class="center" width="300px">' . $result[actividad] . '</td> 
                                        <td class="center" width="300px">' . $result[fecha] . '</td> 
                 
					<td class="center" width="100px">
                                        <a id="' . $result[id] . '" class="uibutton"   href="EditActividad.php?id=' . base64_encode($result[id]) . '">Editar</a>
					<a id="' . $result[id] . '" class="Delete uibutton special" tableToDelete="actividad" nameField="id">Eliminar</a>
                                            </td>
					</tr>';
            }
        }

        return $html;
    }

    function icons() {
        $html = '			

';
    }

}
?>





















