<?php include("head.php"); ?>

<?php include("header.php");
$cDescargables = new Dbdescargables();
$descargables = $cDescargables->getList();
$cant = count($descargables);
?>

<div class="con-content">
    <div class="mg-content">
        <div class="info-content">
            <h1>Descargables</h1>
            <div class="con-info-gral">
                <div class="con-descargas">
                    <div class="paging_desc">
                        <ul class="content_desc">
                            <?php 
                            $tot2 =$cant/4;
                        for ($j = 0; $j < ceil($tot2); $j++) {
                                $e = $j*4;
                            $detalle = DbHandler::GetAll("SELECT * FROM descargables ORDER BY iddescargables ASC LIMIT " .$e.",4"); ?>
                             <li> 
                       <?php     for ($i = 0, $tot = count($detalle); $i < $tot; $i++) { ?>

                            <div class="descarga">
                                <h1><?php echo utf8_encode($detalle[$i]["titulo"]) ?></h1>
                                <img src="assets/img/descargables/170_100_<?php echo $detalle[$i]["imagen"] ?>" width="164" height="100" alt="">
                                <div class="tx-descarga">
                                    <p><?php echo utf8_encode(nl2br($detalle[$i]["texto"])) ?></p>
                                </div>
                                <a href="assets/img/descargables/archivos/<?php echo utf8_encode($detalle[$i]["archivo"]) ?>" target="_blank"><div class="modal-bt">Descargar</div></a>
                            </div>                          

                         <?php   }       ?>
                                </li>           
                        <?php    }   ?>
                        </ul>
                        <div class="page_navigation"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>