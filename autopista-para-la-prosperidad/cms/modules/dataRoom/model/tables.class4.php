<?php

////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
class Tables4 {

    var $db;
    var $id;
    
    function __construct($db,$id) {
        $this->db = $db;
        $this->id = $id;
    }

//IMPRIME FORMULARIO PARA LOS ADMINISTRADORES
    function printTableUsers() {
        
        if($this->id != ""){
        $query = "SELECT * FROM nivel_3 where nivel_2_id = '$this->id' ORDER BY id ASC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        $numOfResults = $this->db->getNumResults();
        
        }  else {
        $query = "SELECT * FROM nivel_3 ORDER BY id ASC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        $numOfResults = $this->db->getNumResults();
        }

        $html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<legend><h1>SUBNIVEL 3</h1></legend>
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Nombre</div></th>
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
					
                                        <td class="center" width="300px">' . $result[nombre] . '</td>
                 
					<td class="center" width="100px">
                                        <a id="' . $result[id] . '" class="uibutton"   href="EditNivel_3.php?id=' . base64_encode($result[id]).'&ant='.$_GET["ant"].'&idt='.$_GET["id"].'&idtt='.$_GET["idt"].'&anttt='.$_GET["antt"].'">Editar</a>
                                       <a id="' . $result[id] . '" class="uibutton icon normal add"   href="documentos.php?id=' . base64_encode($result[id]) . '&ant='.base64_encode($this->id).'&n=nivel_3">Documentos</a>					
                                       <a id="' . $result[id] . '" class="Delete uibutton special" tableToDelete="nivel_3" nameField="id">Eliminar</a>
                                        
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




















