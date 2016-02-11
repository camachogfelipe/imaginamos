<script type="text/javascript" src="assets/js/actions2.js"></script>
<?php
include "../cms/core/class/db.class.php";
include("head.php"); 
ini_set('display_errors','On');

$idtipo_inserto  = $_REQUEST["idtornado"];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
    $datos=""; $carimg=''; $tipo='';
// Validamos si hizo post y desea subir una imagen
    if ($idtipo_inserto=='C'){
        $sql="SELECT * FROM  `opciones_cilindrado` ";
    }else{
        $sql="SELECT * FROM  `opciones_alesado` ";
    }
    //echo $sql;
    $db->doQuery($sql, 1);
    $datos = $db->results;
    $igT=count($datos);
    $arr='';
    if ($idtipo_inserto=='C'){
        $carimg="opciones_cilindrado";
		$url="index.php?base&seccion=torneado-t1&idcilindrado=1";
        $tipo='C';
    }else{
         $carimg="opciones_alesado";
         $tipo='A';
		 $url="index.php?base&seccion=torneado-t2&idalesado=1";
    }
   // echo $carimg.'-->carpeta';
    ?>
   <h1>Opciones</h1>
    <div class="paso">
      <ul class="slider-tree">
       <li>
         <div class="paso-item">
            <h1><?php echo $datos[0]['titulo'] ?></h1>
            <div class="paso-img"><img src="assets/img/<?php echo $carimg.'/'.$datos[0]['imagen']; ?>" width="191" height="98" alt=""></div>
            <div class="paso-info">
              <div class="scroll-wrap">
                <p><?php echo $datos[0]['texto'] ?></p>
              </div>
            </div>
            <a href="#va-paso-2"  url="<?php echo $url ?>" data-id="con-paso-1-1" class="vn-nav paso-item-p1 portaH" onclick="displayMaterialesInserto('<?php echo $tipo  ?>')"><div class="paso-bt"></div></a>
            
          </div>
        </li>
        <li>
          <div class="paso-item">
            <h1><?php echo $datos[1]['titulo'] ?></h1>
            <div class="paso-img"><img src="assets/img/<?php echo $carimg.'/'.$datos[1]['imagen']; ?>" width="191" height="98" alt=""></div>
            <div class="paso-info">
              <div class="scroll-wrap">
                <p><?php echo $datos[1]['texto'] ?></p>
              </div>
            </div>
            <a href="#va-paso-2" class="vn-nav paso-item-p1" data-id="con-paso-1-1" onclick="displayGeometria('<?php echo $tipo  ?>')"><div class="paso-bt-vn"></div></a>
          </div>
        </li>
     </ul>
     </div>