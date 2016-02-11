<script type="text/javascript" src="assets/js/actions2.js"></script>
<?php
include "../cms/core/class/db.class.php";
ini_set('display_errors','On');
$idtipo_inserto  = $_REQUEST["idtornado"];
//$idmaterial = $_REQUEST["idmetarial"];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
// Validamos si hizo post y desea subir una imagen

//    $db->doQuery("SELECT p.`idproducto_torneado`,p.`idtipo_inserto`,p.`idgeometria`, m.imagen
//                    FROM `producto_torneado` as p
//                    INNER JOIN geometria as m on (p.`idgeometria`=m.idgeometria)
//                    WHERE p.`idtipo_inserto`='".$idtipo_inserto."' and p.`idmateriales`='".$idmaterial."'
//                    group by idgeometria", 1);
/*$db->doQuery("SELECT p.`idproducto_torneado`,p.`idtipo_inserto`,p.`idgeometria`, m.imagen
                    FROM `producto_torneado` as p
                    INNER JOIN geometria as m on (p.`idgeometria`=m.idgeometria)
                    WHERE p.`idtipo_inserto`='".$idtipo_inserto."'
                    group by idgeometria", 1);*/
$tabla = "";
if(mb_strtolower($idtipo_inserto) == mb_strtolower("A")) $tabla = "porta_alesado";
if(mb_strtolower($idtipo_inserto) == mb_strtolower("C")) $tabla = "porta_cilindrado";
if(empty($tabla)) exit("Error de geometría");
$db->doQuery("SELECT DISTINCT(p.`idgeometria`), m.imagen
                    FROM `$tabla` as p
                    INNER JOIN geometria as m on (p.`idgeometria`=m.idgeometria) 
                    group by idgeometria", 1);
    
    $datos = $db->results;
    $igT=count($datos);
    $arr='';
    ?>
         <h1>Geometr&#237;a</h1>
            <div class="paso">
              <ul class="slider-tree">
    <?php
    for($j = 0 ; $j < $igT ; $j++){ 
         ?>
                 <li>
                   <div class="paso-item">
                    <h1><?php echo strtoupper ($datos[$j]['idgeometria']) ?></h1>
                    <div class="paso-img"><img src="assets/img/geometria/<?php echo $datos[$j]['imagen']?>" width="191" height="98" alt=""></div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                        <p><?php if(!empty($datos[$j]['descripcion'])) echo $datos[$j]['descripcion']?></p>
                      </div>
                    </div>
                    <!--<a href="#va-paso-4" class="vn-nav paso-item-p3" onclick="displayAngulo('<?php echo $idtipo_inserto ?>', '<?php echo $idmaterial ?>','<?php echo $datos[$j]['idgeometria'] ?>')"  data-id="con-paso-1-1-1-1"><div class="paso-bt"></div></a>-->
                    <a href="index.php?base&seccion=cilindrado-alesado&opciones=<?php echo $idtipo_inserto ?>&geometria=<?php echo $datos[$j]['idgeometria'] ?>"><div class="paso-bt"></div></a>
                    <!--<a href="#va-paso-3" class="vn-nav paso-item-p2" onclick="displayMateriales('<?php echo $idtipo_inserto ?>','<?php echo $datos[$j]['idgeometria'] ?>')"  data-id="con-paso-1-1-1"><div class="paso-bt"></div></a>-->
                  </div>
                </li>
         <?php
    }
    ?>
     </ul>
     </div>