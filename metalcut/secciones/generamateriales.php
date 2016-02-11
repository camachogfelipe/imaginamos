<script type="text/javascript" src="assets/js/actions2.js"></script>
<?php
include "../cms/core/class/db.class.php";
ini_set('display_errors','On');

$idtipo_inserto  = $_REQUEST["idtornado"];
$porta = "";
if(isset($_REQUEST["porta"]))
    $porta  = $_REQUEST["porta"];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
// Validamos si hizo post y desea subir una imagen

//    $db->doQuery("SELECT p.`idproducto_torneado`,p.`idtipo_inserto`,p.`idmateriales`, m.color,  m.imagen, m.descripcion, m.imagen
//                    FROM `producto_torneado` as p
//                    INNER JOIN materiales as m on (p.idmateriales=m.idmateriales)
//                    WHERE p.`idtipo_inserto`='".$idtipo_inserto."'
//                    GROUP BY idmateriales ", 1);
$sql = "SELECT p.`idproducto_torneado`,p.`idtipo_inserto`,p.`idmateriales`, m.color,  m.imagen, m.descripcion, m.imagen
                    FROM `producto_torneado` as p
                    INNER JOIN materiales as m on (p.idmateriales=m.idmateriales)
                    WHERE p.`idtipo_inserto`='".$idtipo_inserto."' and p.`idgeometria`='".$porta."'
                    GROUP BY idmateriales ";
$db->doQuery($sql, 1);
//echo $sql;
    $datos = $db->results;
    $igT=count($datos);
    $arr='';
    ?>
         <h1>Material</h1>
            <div class="paso">
              <ul class="slider-tree">
    <?php
    for($j = 0 ; $j < $igT ; $j++){ 
         ?>
                  <li>
                   <div class="paso-item">
                    <h1><?php echo strtoupper ($datos[$j]['idmateriales']) ?></h1>
                    <div class="paso-img paso-mat">
                      <div class="mat-img"><img src="assets/img/materiales/<?php echo $datos[$j]['imagen']?>" width="143" height="98" alt=""></div>
                    	<div class="color-mat" style="background:#<?php echo $datos[$j]['color']?>;"></div>
                    </div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                        <p><?php echo $datos[$j]['descripcion']?></p>
                      </div>
                    </div>
                   <input type="hidden" id="idmateriales" name="idmateriales" value="<?php echo $datos[$j]['idmateriales']?>" >
                   <?php
                    if($porta != "1"):
                   ?>
                   <a href="#va-paso-4" class="vn-nav paso-item-p3" onclick="displayAngulo('<?php echo $idtipo_inserto ?>', '<?php echo $datos[$j]['idmateriales']?>', '<?php echo $porta?>')"  data-id="con-paso-1-1-1-1">
						<div class="paso-bt"></div>
				    </a>
                   <?php
                     else:
                   ?>
                   <a href="#" class="" onclick="redirectPorta('<?php echo $datos[$j]['idmateriales']?>')">
                                <div class="paso-bt-vn"></div>
                   </a>
                   <?php
                     endif;
                   ?>
                  </div>
                </li>
         <?php
    }
    ?>
     </ul>
     </div>