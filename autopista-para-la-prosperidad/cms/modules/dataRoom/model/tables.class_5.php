<?php

////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
class Tables5 {
    
    var $db;
    var $id;
    var $nivel;

    function __construct($db, $id, $nivel) {
        $this->db = $db;
        $this->id = $id;
        $this->nivel = $nivel;
    }
    
   

//IMPRIME FORMULARIO PARA LOS ADMINISTRADORES
    
    function printTableUsers() {
        
         if($this->nivel == "nivel_1"){
            $tabla="nivel1";
            $query = "SELECT * FROM documentos where $tabla = '$this->id' and nivel2 = 0 and nivel3 = 0  ORDER BY id ASC";
         }
         if ($this->nivel == "nivel_2") {
             $tabla="nivel2";
            $query = "SELECT * FROM documentos where $tabla = '$this->id' and nivel1 > 0 and nivel3 = 0  ORDER BY id ASC";
        }
        
         if ($this->nivel == "nivel_3") {
             $tabla="nivel3";
            $query = "SELECT * FROM documentos where $tabla = '$this->id' and nivel1 > 0 and nivel2 > 0  ORDER BY id ASC";
        }
        
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        $numOfResults = $this->db->getNumResults();

        $html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<legend><h1>Documentos Primer Nivel</h1></legend>
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Enlace</div></th>
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
					
					<td class="center" width="300px">' . $result[documento] . '</td> 
                                            
					<td class="center" width="100px">
                                        
                                        <a id="' . $result[id] . '" class="Delete uibutton special" tableToDelete="documentos" nameField="id">Eliminar</a>
				
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





















