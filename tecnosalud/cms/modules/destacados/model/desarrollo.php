<?php

class Forms {

    var $db;

    function __construct($db) {
        $this->db = $db;
    }

    public function desarrollo() {
        $query = "SELECT * FROM cms_bannernosotros ORDER BY bannernosotros_id DESC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        $html ='
        <script type="text/javascript" src="../js/desactivar.js"></script>
	<script type="text/javascript" src="../js/upload.min.js"></script>
        <script type="text/javascript" src="../js/myuploadC.js"></script>
        <script type="text/javascript" src="../js/myuploadP.js"></script>
        <script type="text/javascript" src="../js/swfobject.js"></script>
	<script type="text/javascript" src="../js/myupload.js"></script>
        <link type="text/css" rel="stylesheet" href="../css/style.css" />
        <a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
        <h1>Destacados</h1>
				<div class="tableName toolbar">
                                <p>&nbsp;</p>				
                                <table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Imagen Fondo</div></th>	
						<th><div class="th_wrapp">Título</div></th>	
						<th><div class="th_wrapp">Editar</div></th>
					</tr>
				</thead>
				<tbody>
        ';
        return $html;
    }

}

?>
