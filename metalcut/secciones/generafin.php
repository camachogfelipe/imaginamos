<script type="text/javascript" src="assets/js/actions2.js"></script>
<?php
include "../cms/core/class/db.class.php";
ini_set('display_errors','On');
$idtipo_inserto  = $_REQUEST["idtornado"];
$idmaterial = $_REQUEST["idmetarial"];
$idgeometria = $_REQUEST["idgeometria"];
$idangulo = $_REQUEST["idangulo"];
$idlongitud= $_REQUEST["idlongitud"];
$idespesor= $_REQUEST["idespesor"];
$idradio= $_REQUEST["idradio"];
$idtipo_corte= $_REQUEST["idtipo_corte"];

//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
// Validamos si hizo post y desea subir una imagen

    $db->doQuery("SELECT *
				FROM  `producto_torneado` AS p
				WHERE p.`idtipo_inserto` =  '".$idtipo_inserto."'
				AND p.`idmateriales` =  '".$idmaterial."'
				AND p.`idgeometria` =  '".$idgeometria."'
				AND p.`idangulo` =  '".$idangulo."'
				AND p.`idlongitud` =  '".$idlongitud."'
				AND p.`idespesor` =  '".$idespesor."'
				AND p.`idradio` =  '".$idradio."'
				AND p.`idtipo_corte` =  '".$idtipo_corte."' ", 1);
				
				/*echo "SELECT *
				FROM  `producto_torneado` AS p
				WHERE p.`idtipo_inserto` =  '".$idtipo_inserto."'
				AND p.`idmateriales` =  '".$idmaterial."'
				AND p.`idgeometria` =  '".$idgeometria."'
				AND p.`idangulo` =  '".$idangulo."'
				AND p.`idlongitud` =  '".$idlongitud."'
				AND p.`idespesor` =  '".$idespesor."'
				AND p.`idradio` =  '".$idradio."'
				AND p.`idtipo_corte` =  '".$idtipo_corte."' ";
					*/
    
    $datos = $db->results;
    
    $igT=count($datos);
    $arr='';
	if ($igT>=1){
    ?>
        <input type="hidden" id="idtipo_inserto" name="idtipo_inserto" value="<?php echo $idtipo_inserto ?>" />
		<input type="hidden" id="idmaterial" name="idmaterial" value="<?php echo $idmaterial ?>" />
		<input type="hidden" id="idgeometria" name="idgeometria" value="<?php echo $idgeometria ?>" />
		<input type="hidden" id="idangulo" name="idangulo" value="<?php echo $idangulo ?>" />
		<input type="hidden" id="idlongitud" name="idlongitud" value="<?php echo $idlongitud ?>" />
		<input type="hidden" id="idespesor" name="idespesor" value="<?php echo $idespesor ?>" />
		<input type="hidden" id="idradio" name="idradio" value="<?php echo $idradio ?>" />
		<input type="hidden" id="idtipo_corte" name="idtipo_corte" value="<?php echo $idtipo_corte ?>" />
                <input type="hidden" id="idproducto" name="idproducto" value="<?php 
                $idProducto = '';
                for($i = 0;$i < $igT;$i ++) {
                    $idProducto .= $datos[$i]['idproducto_torneado'] . ',';
                }
                $idProducto = substr($idProducto, 0, strlen($idProducto)-1);
                
                echo $idProducto ?>" />
		
		
	<?php
	}else{
		echo "No hay producto Relacionado";
	}
	?>