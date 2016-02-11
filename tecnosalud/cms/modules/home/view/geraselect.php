<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<script type="text/javascript" src="../js/desactivar.js"></script>
<script type="text/javascript" src="../js/upload.min.js"></script>
<script type="text/javascript" src="../js/swfobject.js"></script>
<script type="text/javascript" src="../js/myupload.js"></script>
<script type="text/javascript" src="../js/myuploadC.js"></script>
<script type="text/javascript" src="../js/myuploadP.js"></script>
<link type="text/css" rel="stylesheet" href="../css/style.css" /> 
<link type="text/css" rel="stylesheet" href="../css/style.css" />


<script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>

<?php

include("../../../core/class/db.class.php");
////Creamos el nuevo objeto "Database"
$db = new Database();
////Conectamos
//
$db->connect();
//
//
//
$query = "SELECT * FROM cms_categoria WHERE id_padre = 0 ORDER BY categoria_id DESC";

$db->doQuery($query, SELECT_QUERY);
$data = $db->results;

$id = $_REQUEST['id'];

if ($id == 'Url') { 
    

    ?>
<label>Ingrese Url</label><br><br>
<div>
<input id="url_required" class="validate[required,custom[url]] medium" type="text" value="http://" name="opciones">
</div>

<?php
}else if ($id == "seccion") {
    
        
    ?>
<label>Escoja una seccion</label><br><br>    
<select name="opciones" id ="url" class="medium">
    
    <?php 
    
        for($i=0;$i < sizeof($data);$i++ ){
            //productos-info.php?id=
            
            
        ?>
    
    <option value="productos-info.php?id=<?php echo $data[$i]["categoria_id"]?>&<? echo $data[$i]["categoria_title"] ?>"><?php echo $data[$i]["categoria_title"]; ?></option> 
    
        <?php
            
        }
        ?>
</select>
<?php
       
}
?>
