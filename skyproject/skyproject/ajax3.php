<?php
require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$object = new Procesos();
    if($_POST['elegido'] == 3){
    echo '<label style="margin-left: 4px;margin-right: -55px;float: left;">Tienda</label>';    
    echo '<select name="tienda" class="validate[required]" id="tienda" >
    <option value="" style="float: left;">-- Seleccione --</option>';
   
    $result = $object->GetTiendas();
    for ($i = 0; $i < count($result); $i++) {
        
      echo  '<option value="'.$result[$i]["id_Tienda"].'">'.$result[$i]["nombre_Tienda"].'</option>';
        
    }
    
    echo '</select>';
    echo '<a style="margin-top:-12px;margin-left: 9px;" data-toggle="modal" href="#cont" class="btn btn-primary btn-small" >Crear tienda</a>';
    }
    
 
?>