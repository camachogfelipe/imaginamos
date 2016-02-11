<?php include("head.php"); ?>

<?php include("header.php");
$cQuienes = new Dbquienes_des();
$mData = array("where"=>"idquienes_des=1");
$quienes = $cQuienes->getListOne($mData);
$cValores = new Dbvalores();
$valores = $cValores->getList();
$cant = count($valores);
?>

<div class="con-content">
    <div class="mg-content">
        <div class="info-content">
            <h1>Quiénes somos</h1>
            <div class="con-info-gral">
                <p class="intro-empresa"><?php echo utf8_encode($quienes["descripcion"]) ?></p>
                <div class="empresa-info">
                   <?php echo utf8_encode($quienes["texto"]); ?>
                </div>
                <div class="empresa-img"><img src="assets/img/quienes/412_155_<?php echo $quienes["imagen"] ?>" width="412" height="155" alt=""></div>
            </div>
            <div class="con-info-gral">
                <div class="con-valores">
                    <h1>Valores corporativos</h1>
                    <?php for($i = 0 ; $i < $cant ; $i++){ 
                        if($i < 2){?>
                    <div class="valores-t1">
                    <?php }else{ ?>
                        <div class="valores-t2">
                    <?php } ?>
                            <h1><?php echo utf8_encode($valores[$i]["titulo"]) ?></h1>
                            <p><?php echo utf8_encode(nl2br($valores[$i]["texto"])) ?></p>
                    </div>
                    <?php } ?>                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>