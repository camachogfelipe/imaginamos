<?php

////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
class Tables {

    var $db;

    function __construct($db) {
        $this->db = $db;
    }

//IMPRIME FORMULARIO PARA LOS ADMINISTRADORES
    function printTableUsers() {
        $query = "SELECT * FROM cms_user ORDER BY id_user DESC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        $numOfResults = $this->db->getNumResults();

        $html = '
		
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		
                  <div>
				  
				  <form id="emailrecipient">
                    
                  <legend><h1>ADministradores</h1></legend>
                    
                  
				  <div class="section">
                      <label>Nombre</label>
                      <div><input type="text" name="nameuser" id="nameuser"  class="large"/></div>
				  </div>
				  <div class="section">
                      <label>Email del usuario
					  <span class="f_help">Con el que se iniciará sesión, la clave la asignará el sistema</span>
					  </label>
					  
                      <div><input type="text" name="emailuser" id="emailuser"  class="large"/></div>
				  </div>
				  <div class="section">
                      <label>Rol del usuario</label>
                      <div><input type="checkbox" id="roluser" name="roluser" class="preOrder" value="1"   /></div>
				  </div>
                  
	              <br /><br />
                  
				  <a class="uibutton" onclick="xajax_emailrecipient(xajax.getFormValues(\'emailrecipient\')); return false;">Guardar</a> 
            	  </form>
				  
				  </div>
					
					<p>&nbsp;</p>
		
	<div class="tableName toolbar">
	<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Nombre de usuario</div></th>
				<th><div class="th_wrapp">email</div></th>
				<th><div class="th_wrapp">Rol</div></th>
				<th><div class="th_wrapp">Acciones</div></th>
			</tr>
		</thead>
		<tbody>
	';

        if ($numOfResults == 1) {
            foreach ($results as $result) {
                $html .= '
			<tr class="odd gradeX">
			<td class="center" width="300px">' . $result['username_user'] . '</td>
			<td class="center" width="300px">' . $result['email_user'] . '</td>
			<td class="center" width="300px">' . $result['rol_user'] . '</td>
			<td class="center" width="100px"></td>
			</tr>';
            }
        } elseif ($numOfResults > 0) {

            foreach ($results as $result) {
                $html .= '
			<tr class="odd gradeX">
			<td class="center" width="300px">' . $result['username_user'] . '</td>
			<td class="center" width="300px">' . $result['email_user'] . '</td>
			<td class="center" width="300px">' . $result['rol_user'] . '</td>
			<td class="center" width="100px">
				<span class="tip"><a id="' . $result['id_user'] . '" class="Delete uibutton special" tableToDelete="cms_user" nameField="id_user">Eliminar</a></span>
			</td>
			</tr>';
            }
        }


        $html .= '
</tbody>
</table>
</div>';
        return $html;
    }

//IMPRIME FORMULARIO PARA LOS MENUS
    function printTableMenus() {
        $query = "SELECT * FROM cms_menu ORDER BY menu_id DESC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        $numOfResults = $this->db->getNumResults();

        $html = '
		
				<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>

                <div>
				  
				  <form id="menus">                  
                  <legend><h1>MENUS</h1></legend>                    
                  <div class="section">
                      <label>Nombre del menú</label>
                      <div><input type="text" name="namemenu" id="namemenu" class="large"/></div>
				  </div>
				  
				  <div class="section">
                      <label>Url del menú</label>
                       <div><input type="text" name="urlmenu" id="urlmenu" class="large"/></div>
				  </div>
				  
				  <div class="section">
                      <label>Icono del menú</label>				  
                       <div>
					   			 
								 <table width="80%" border="0">
  <tr>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/administrator.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/briefcase.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/calendar.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/camera.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/checkmark.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/clipboard.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/diary.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/group.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/headset.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/mail_open.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/music_folder.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/pictures_folder.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/satellite.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/zoom_in.png"></td>
    <td><img src="http://cms.imaginamos.com/images/icon/gray_18/usb.png"></td>
  </tr>
  <tr>
    <td><input type="radio" name="iconmenu" id="radio_1" value="administrator" /></td>
    <td><input type="radio" name="iconmenu" id="radio_2" value="briefcase" /></td>
    <td><input type="radio" name="iconmenu" id="radio_3" value="calendar" /></td>
    <td><input type="radio" name="iconmenu" id="radio_4" value="camera" /></td>
    <td><input type="radio" name="iconmenu" id="radio_5" value="checkmark" /></td>
    <td><input type="radio" name="iconmenu" id="radio_6" value="clipboard" /></td>
    <td><input type="radio" name="iconmenu" id="radio_7" value="diary" /></td>	
    <td><input type="radio" name="iconmenu" id="radio_8" value="group" /></td>
    <td><input type="radio" name="iconmenu" id="radio_9" value="headset" /></td>
    <td><input type="radio" name="iconmenu" id="radio_10" value="mail_open" /></td>
    <td><input type="radio" name="iconmenu" id="radio_11" value="music_folder" /></td>
    <td><input type="radio" name="iconmenu" id="radio_12" value="pictures_folder" /></td>
    <td><input type="radio" name="iconmenu" id="radio_13" value="satellite" /></td>
    <td><input type="radio" name="iconmenu" id="radio_14" value="zoom_in" /></td>
    <td><input type="radio" name="iconmenu" id="radio_15" value="usb" /></td>
  </tr>
</table>
								 
								 
					   </div>
				  </div>	
                  
	              <br /><br />
                  
				  <a class="uibutton" onclick="xajax_menus(xajax.getFormValues(\'menus\')); return false;">Agregar menú</a> 
            	  </form>
				  
				  </div>
					
				  <p>&nbsp;</p>
		
	<div class="tableName toolbar">
	<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Icono</div></th>
				<th><div class="th_wrapp">Título del menú</div></th>
				<th><div class="th_wrapp">URL del menú</div></th>
				<th><div class="th_wrapp">Acciones</div></th>
			</tr>
		</thead>
		<tbody>
	';

        if ($numOfResults > 0) {
            foreach ($results as $result) {

                $html .= '
			<tr class="odd gradeX">
			<td class="center" width="50px"><img src="http://cms.imaginamos.com/images/icon/gray_18/' . $result['menu_icon'] . '.png"></td>
			<td class="center" width="300px">' . $result['menu_title'] . '</td>
			<td class="center" width="300px">' . $result['menu_url'] . '</td>
			<td class="center" width="100px"><a id="' . $result['menu_id'] . '" class="Delete uibutton special" tableToDelete="cms_menu" nameField="menu_id">Eliminar</a>		
			</td>
			</tr>';
            }
        }

        $html .= '
</tbody>
</table>
</div>
';
        return $html;
    }

    function icons() {
        $html = '			

';
    }

}
?>
