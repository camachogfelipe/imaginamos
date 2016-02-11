<?php include("head.php"); ?>
<?php include("header.php"); ?>

<?php
$buscar = $_POST["buscar"];

$todo = DbHandler::GetAll("select * from productos WHERE titulo LIKE '%" . $buscar . "%'");
$todo2 = DbHandler::GetAll("select * from promociones WHERE titulo LIKE  '%" . $buscar . "%' OR texto LIKE '%" . $buscar . "%'");
$todo3 = DbHandler::GetAll("select * from recetas WHERE titulo LIKE  '%" . $buscar . "%' OR texto_ingredientes LIKE '%" . $buscar . "%'");
?>
<section>		
    <div class="con-section">
        <div class="mg-section clearfix">
            <h2 id="sec-com-2">Resultados de su busqueda " <?php echo utf8_encode($buscar) ?> "</h2>
            <div class="resultados-tx">
                <div class="scroll-wrap">
                    <?php for ($a = 0, $b = count($todo2); $a < $b; $a++) { ?>
                        <div class="con-resultado-vn">
                            <h1><?php echo utf8_encode($todo2[$a]["titulo"]) ?></h1>
                            <p><?php echo utf8_encode(nl2br($todo2[$a]["texto"])) ?></p>
                            <a href="index.php?seccion=promociones"><div class="resultado-vn"><div class="resultado-bt"></div><span></span></div></a>
                        </div>    
                    <?php } ?>
                    <?php for ($a = 0, $b = count($todo); $a < $b; $a++) { ?>
                        <div class="con-resultado-vn">
                            <h1><?php echo utf8_encode($todo[$a]["titulo"]) ?></h1> 
                            <?php if ($todo[$a]["posicion"] == 1) { ?>
                                <a href="index.php?seccion=productos-california"><div class="resultado-vn"><div class="resultado-bt"></div><span></span></div></a> 
                                <?php
                            }
                            if ($todo[$a]["posicion"] == 2) {
                                ?>
                                <a href="index.php?seccion=productos-lechesan"><div class="resultado-vn"><div class="resultado-bt"></div><span></span></div></a>
                                <?php
                            }
                            if ($todo[$a]["posicion"] == 3) {
                                ?>
                                <a href="index.php?seccion=importadas"><div class="resultado-vn"><div class="resultado-bt"></div><span></span></div></a>
                            <?php }
                            ?>
                            <?php for ($a = 0, $b = count($todo3); $a < $b; $a++) { ?>
                                <div class="con-resultado-vn">
                                    <h1><?php echo utf8_encode($todo3[$a]["titulo"]) ?></h1>
                                    <p><?php echo utf8_encode(nl2br($todo3[$a]["texto_ingredientes"])) ?></p>
                                    <a href="index.php?seccion=recetas-california"><div class="resultado-vn"><div class="resultado-bt"></div><span></span></div></a>
                                </div>    
                            <?php } ?>
                        </div>    
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>