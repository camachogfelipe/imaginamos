<script type="text/javascript" src="assets/js/actions2.js"></script>
<?php
include "../cms/core/class/db.class.php";
ini_set('display_errors','On');
$idtipo_inserto  = $_REQUEST["idtornado"];
$idmaterial = $_REQUEST["idmetarial"];
$idgeometria = $_REQUEST["idgeometria"];
$idangulo = $_REQUEST["idangulo"];
$idlongitud= $_REQUEST["idlongitud"];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
// Validamos si hizo post y desea subir una imagen

    $db->doQuery("SELECT p.`idproducto_torneado` , p.`idtipo_inserto` , p.`idespesor` , m.imagen
					FROM  `producto_torneado` AS p
					INNER JOIN espesor AS m ON ( p.`idespesor` = m.idespesor and p.idgeometria=m.idgeometria ) 
					WHERE p.`idtipo_inserto` =  '".$idtipo_inserto."'
					AND p.`idmateriales` =  '".$idmaterial."'
					AND p.`idgeometria` =  '".$idgeometria."'
					AND p.`idangulo` =  '".$idangulo."'
					AND p.`idlongitud` =  '".$idlongitud."'
					GROUP BY p.idespesor", 1);
					
    
    $datos = $db->results;
    $igT=count($datos);
    $arr='';
    ?>
    		<h1>Espesor</h1>
            <div class="paso">
              <ul class="slider-tree">
    <?php
    for($j = 0 ; $j < $igT ; $j++){ 
         ?>
                 <li>
                   <div class="paso-item">
                    <h1><?php echo strtoupper ($datos[$j]['idespesor']) ?></h1>
                    <div class="paso-img"><img src="assets/img/espesor/<?php echo $datos[$j]['imagen']?>" width="191" height="98" alt=""></div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                        <p><?php echo $datos[$j]['descripcion']?></p>
                      </div>
                    </div>
                    <a href="#va-paso-7" class="vn-nav paso-item-p6" onclick="displayRadio('<?php echo $idtipo_inserto ?>', '<?php echo $idmaterial ?>','<?php echo $idgeometria ?>','<?php echo $idangulo ?>','<?php echo $idlongitud ?>','<?php echo $datos[$j]['idespesor'] ?>')"   data-id="con-paso-1-1-1-1-1-1-1"><div class="paso-bt"></div></a>
					</div>
                </li>
         <?php
    }
    ?>
     </ul>
     </div>