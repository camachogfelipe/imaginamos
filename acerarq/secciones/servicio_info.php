<?php include("head.php"); ?>

<?php include("header.php");
if(isset($_GET["cat"])){
    $cat = $_GET["cat"];
}else{
header('Location:../acerarq/index.php?seccion=index');
exit;
}
$cCategoria = new Dbcategoria_obras();
$mData = array("where"=>"idcategoria_obras=".$cat);
$categoria = $cCategoria->getListOne($mData);
$cObras = new Dbobras();
$obras = $cObras->getListOne($mData);
$cSubcategoria = new Dbsubcategoria_obras();
$mData = array("where"=>"idcategoria=".$cat);
$subcategoria = $cSubcategoria->getList2($mData);
$cant = count($subcategoria);
$cServicios = new Dbservicios_obras();
?>

<div class="con-content">
    <div class="mg-content">
        <div class="info-content">
            <h1><?php echo utf8_encode($categoria["titulo"]); ?></h1>
            <a href="javascript:history.back()"><div class="bt-back"></div></a>
            <div class="con-info-gral">
                <h2>Servicios ofrecidos</h2>
                <div class="paging_servs">
                    <ul class="content_serv">
                        <?php for($i = 0 ; $i < $cant ; $i++){ 
                            $mData = array("where"=>"idsubcategoria_obras=".$subcategoria[$i]["idsubcategoria_obras"]);
                            $servicio = $cServicios->getList2($mData);
                            $num = count($servicio);
                            ?>
                        <li>
                            <div class="info-serv">
                                <h1><?php echo utf8_encode($subcategoria[$i]["titulo"]) ?></h1>
                                <p><?php echo utf8_encode(nl2br($subcategoria[$i]["texto"])) ?></p>
                            </div>
                            <?php if($num == 1){ ?> 
                            <a class="box-info" href="#more-serv<?php echo $servicio[0]["idservicios_obras"] ?>"><div class="modal-bt">Ver más</div></a>
                        <?php } ?>
                        </li>
                        <?php }?>                        
                    </ul>
                    <div class="page_navigation"></div>
                </div>
                <div class="destacado-serv">
                    <h1><?php echo utf8_encode($obras["titulo"]) ?></h1>
                     <?php echo utf8_encode($obras["texto"]) ?>
                    
<!--                    <ul class="list-destacado">
                        <li>lista 1</li>
                        <li>lista 2
                            <ul class="sublist-destacado">
                                <li>lista 2.1</li>
                            </ul>
                        </li>
                        <li>lista 3</li>
                    </ul>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php for($j = 0 ; $j < $cant ; $j++){ 
    $mData = array("where"=>"idsubcategoria_obras=".$subcategoria[$j]["idsubcategoria_obras"]);
    $detalle = $cServicios->getList2($mData);
    $num = count($detalle);
    if($num == 1){ ?>
    <div class="con-modals">
    <div id="more-serv<?php echo $detalle[0]["idservicios_obras"] ?>">
        <h1><?php echo utf8_encode($detalle[0]["titulo"]) ?></h1>
        <p><?php echo utf8_encode($detalle[0]["texto"]) ?></p>
    </div>
</div>
<?php }} ?>

<?php include("footer.php"); ?>
