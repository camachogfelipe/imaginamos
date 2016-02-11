<script type="text/javascript" src="assets/js/actions2.js"></script>
<?php
include "../cms/core/class/db.class.php";
include("head.php"); 
ini_set('display_errors','On');

$tipo1  = $_REQUEST["tipo"];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
    $datos=""; $carimg=''; $tipo='';
// Validamos si hizo post y desea subir una imagen
    if ($tipo1=='conos'){
        $sql="SELECT * FROM  `productos_conos` ";
    }else{
        $sql="SELECT * FROM  `productos_sujecion` ";
    }
   // echo $sql;
    $db->doQuery($sql, 1);
    $datos = $db->results;
    $cant=count($datos);
    $arr=''; $titulo=''; $texto=''; $id=''; $imagen='';
    ?>
    <h1>Productos</h1>
            <div class="paso">
              <ul class="slider-tree">
                <?php
                for($i = 0 ; $i < $cant ; $i++){
                    $titulo=$datos[$i]['titulo'];                    
                    $texto=$datos[$i]['texto'];
                    if ($tipo1=='conos'){
                        $id=$datos[$i]['idconos'];
                        $imagen='productos_conos/'.$datos[$i]['imagen'];
                        $url='index.php?base&seccion=accesorios-conos&idproductos_conos='.$datos[$i]['idproductos_conos'];
                    }else{
                        $id=$datos[$i]['idsujecion'];
                        $imagen='productos_sujecion/'.$datos[$i]['imagen'];
                        $url='index.php?base&seccion=accesorios-t2&idproductos_sujecion='.$datos[$i]['idproductos_sujecion'];
                    }
                ?>    
                  <li>
                	<div class="paso-item">
                        <h1><?php echo $titulo; ?></h1>
                        <div class="paso-img"><img src="assets/img/<?php echo $imagen ?>" width="191" height="98" alt=""></div>
                        <div class="paso-info">
                          <div class="scroll-wrap">
                            <p><?php echo $texto ?></p>
                          </div>
                        </div>
                        <a href="<?php echo $url ?>" class="vn-nav paso-item-p1"><div class="paso-bt-vn"></div></a>
                      </div>
                </li>
                <?php    
                    }
                ?>
            </ul>
                </div>