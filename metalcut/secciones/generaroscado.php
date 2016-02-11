<script type="text/javascript" src="assets/js/actions2.js"></script>
<?php
include "../cms/core/class/db.class.php";
include("head.php"); 
ini_set('display_errors','On');

//$idtipo_inserto  = $_REQUEST["idtornado"];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
    $datos=""; $carimg=''; $tipo='';
// Validamos si hizo post y desea subir una imagen
    $sql="SELECT * FROM  productos_roscado ";
    //echo $sql;
    $db->doQuery($sql, 1);
    $datos = $db->results;
    $igT=count($datos);
    $arr='';
   // echo $carimg.'-->carpeta';
    ?>
   <h1>Opciones</h1>
    <div class="paso">
      <ul class="slider-tree">
       <li>
         <div class="paso-item">
            <h1><?php echo $datos[0]['titulo'] ?></h1>
            <div class="paso-img"><img src="assets/img/productos_roscado/<?php echo $datos[0]['imagen']; ?>" width="191" height="98" alt=""></div>
            <div class="paso-info">
              <div class="scroll-wrap">
                <p><?php echo $datos[0]['texto'] ?></p>
              </div>
            </div>
            <a href="index.php?base&seccion=roscado-interno" class="vn-nav paso-item-p1" ><div class="paso-bt-vn"></div></a>
          </div>
        </li>
        <li>
          <div class="paso-item">
            <h1><?php echo $datos[1]['titulo'] ?></h1>
            <div class="paso-img"><img src="assets/img/productos_roscado/<?php echo $datos[1]['imagen']; ?>" width="191" height="98" alt=""></div>
            <div class="paso-info">
              <div class="scroll-wrap">
                <p><?php echo $datos[1]['texto'] ?></p>
              </div>
            </div>
            <a href="index.php?base&seccion=roscado-externo" class="vn-nav paso-item-p1" ><div class="paso-bt-vn"></div></a>
          </div>
        </li>
     </ul>
     </div>