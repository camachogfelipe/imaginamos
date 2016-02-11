<!--<script type="text/javascript" src="assets/js/actions2.js"></script>-->
<?php
include "../cms/core/class/db.class.php";
include("head.php"); 
ini_set('display_errors','On');

//$idtipo_inserto  = $_REQUEST["idtornado"];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
    $datos=""; $carimg='';
		$nivel = (isset($_REQUEST['nivel']))?$_REQUEST['nivel']:1;
		$padre = (isset($_REQUEST['padre']))?$_REQUEST['padre']:1;
// Validamos si hizo post y desea subir una imagen
		$sql="SELECT * FROM nivel_ranurado WHERE nivel='".$nivel."'";
    //echo $sql;
    $db->doQuery($sql, 1);
    $datosNivel = $db->results[0];

    $sql="SELECT * FROM ranurado WHERE nivel='".$nivel."' AND idportafoliopadre='".$padre."'";
    //echo $sql;
    $db->doQuery($sql, 1);
    $datos = $db->results;
    $igT=count($datos);
    $arr='';
   // echo $carimg.'-->carpeta';
    ?>

<h1><?php echo $datosNivel['titulo'] ?></h1>
<div class="paso">
  <ul class="slider-tree">
  <?php foreach($datos as $dato) : ?>
    <li>
      <div class="paso-item">
        <h1><?php echo $dato['titulo'] ?></h1>
        <div class="paso-img"><img src="assets/img/ranurado/<?php echo $dato['imagen']; ?>" width="191" height="98" alt=""></div>
        <div class="paso-info">
          <div class="scroll-wrap">
            <p><?php echo $dato['texto'] ?></p>
          </div>
        </div>
        <?php if($dato['paso'] == "P") : ?>
        <a href="index.php?base&seccion=torneado-ranurado&idranurado=<?php echo $dato['idranurado'] ?>" class="vn-nav paso-item-p1">
        <div class="paso-bt-vn"></div>
        </a>
        <?php elseif($dato['paso'] == "S") : ?>
        <a href="#va-paso-<?php echo $nivel+1 ?>" class="vn-nav paso-item-p1" onclick="displayRanurado('<?php echo $dato['nivel']+1 ?>', '<?php echo $dato['idranurado'] ?>')" data-id="con-paso-<?php echo $nivel+1 ?>">
        <div class="paso-bt"></div>
        </a>
        <?php endif;?>
    </li>
  <?php endforeach; ?>
  </ul>
</div>
