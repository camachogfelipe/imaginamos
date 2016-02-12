<?php
session_start();
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
        $_SESSION["categoria"]=  $this->id;
        $categoria=$_SESSION["categoria"];
        if($this->id != ""){
        $query = "SELECT * FROM nivel_1 where caetgoria_id = '$categoria' ORDER BY id ASC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        $numOfResults = $this->db->getNumResults();
        
        }  else {
        $query = "SELECT * FROM nivel_1 ORDER BY id ASC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        $numOfResults = $this->db->getNumResults();
        }

        $html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<legend><h1>Documentos</h1></legend>
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
                                        <a id="' . $result[id] . '" class="uibutton"   href="EditNivel_1.php?id=' . base64_encode($result[id]) . '&ant='.base64_encode($this->id).'">Editar</a>
					<a id="' . $result[id] . '" class="Delete uibutton special" tableToDelete="nivel_1" nameField="id">Eliminar</a>
                                       <a id="' . $result[id] . '" class="uibutton icon normal add"   href="documentos.php?id=' . base64_encode($result[id]) . '&ant='.base64_encode($this->id).'&n=nivel_1">Documentos</a>
                                        <a id="' . $result[id] . '" class="uibutton icon confirm next"   href="nivel_2.php?id=' . base64_encode($result[id]) .'&ant='.base64_encode($this->id).'">Subniveles</a>
                                            
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





















