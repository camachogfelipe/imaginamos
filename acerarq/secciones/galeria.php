<?php  
include("head.php"); ?>

<style type="text/css">.bx-wrapper .bx-controls-direction a {opacity:0; filter:alpha(opacity=0);} .bx-wrapper:hover .bx-controls-direction a {opacity:0.75; filter:alpha(opacity=75);} .bx-wrapper .bx-controls-direction a {width:40px; height:476px; bottom:2px;} .bx-wrapper .bx-prev {left:0; width:40px; top:2px !important; background:url(assets/img/galeria-controls.png) 0 0 no-repeat; opacity:0.75; filter:alpha(opacity=75);} .bx-wrapper .bx-next {right:0; width:40px; top:2px !important; background:url(assets/img/galeria-controls.png) -40px 0 no-repeat; opacity:0.75; filter:alpha(opacity=75);} .bx-wrapper .bx-prev:hover {opacity:1 !important; filter:alpha(opacity=100) !important; background-position:0 0;} .bx-wrapper .bx-next:hover {opacity:1 !important; filter:alpha(opacity=100) !important; background-position:-40px 0;}</style>

<?php include("header.php");
$cProyectos = new Dbproyectos();
$proyectos = $cProyectos->getList();
$cant1 = count($proyectos);
$cMes = new Dbmes();
$mes = $cMes->getList();
$num = count($mes);
$cAno = new Dbano();
$ano = $cAno->getList();
$total = count($ano);


?>

<div class="titulo-gal">
    <div class="mg-titulo-gal">
        <h1>Galería</h1>
    </div>
</div>
<!--Galería-->
<div class="con-collage">
    <div class="collage">
        <!--Collage op-->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=1");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
            <div class="c-collage">
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=1 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                        $imgA=$Img1["imagen"];
                    }
                    
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t1-1" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t1-1" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=1 and id_imagen=2");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-8 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-8.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2-1" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-8-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t2-1" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                 <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=1 and id_imagen=3");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-12 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-12.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t3-1" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-12-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t3-1" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                 <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=1 and id_imagen=4");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t4-1" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t4-1" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                   <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=1 and id_imagen=5");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t5-1" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t5-1" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                   <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=1 and id_imagen=6");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-15 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-15.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t6-1" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-15-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t6-1" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                    <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=1 and id_imagen=7");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-11 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-11.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t7-1" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-11-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t7-1" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=1 and id_imagen=8");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                        
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t8-1" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>" >
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t8-1" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                 <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=1 and id_imagen=9");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t9-1" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t9-1" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
        <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=2");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
            <div class="c-collage">
                 <?php
                    /*$can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=2 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ 
                        $id_gal=$collage1[0]["id_collage"];
                        $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; 
                    }
                    //echo $id_gal.'<br>';
                    
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                    //print_r($GImg1); 
                    $cant=count($GImg1);
                   // echo "<br>cant-->".$cant;*/
                 $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=2 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-9 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-9.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2_2-1" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-9-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                                
                      $cant=count($GImg1);          
                      for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                      <a class="box-thumbs" data-fancybox-group="thumb-t2_2-1" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                              <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=2 and id_imagen=2");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-12 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-12.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2-2" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-12-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t2-2" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                 <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=2 and id_imagen=3");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-12 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-12.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t3-2" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-12-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t3-2" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
          <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=2 and id_imagen=4");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-11 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-11.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t4-2" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-11-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t4-2" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
       <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=3");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
          <div class="c-collage">
              <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=3 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-10 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-10.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t1-3" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-10-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t1-3" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                             <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=3 and id_imagen=2");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2-3" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t2-3" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=3 and id_imagen=3");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t3-3" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t3-3" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=3 and id_imagen=4");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t4-3" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t4-3" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=3 and id_imagen=5");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t5-3" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t5-3" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=3 and id_imagen=6");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-12 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-12.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t6-3" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-12-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t6-3" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=3 and id_imagen=7");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-12 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-12.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t7-3" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-12-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t7-3" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=3 and id_imagen=8");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t8-3" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t8-3" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=3 and id_imagen=9");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t9-3" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t9-3" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
        <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=4");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
            <div class="c-collage">
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=4 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-1 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-1.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t1-4" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-1-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t1-4" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
        <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=5");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
            <div class="c-collage">
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=5 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-11 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-11.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t1-5" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-11-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t1-5" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=5 and id_imagen=2");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-11 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-11.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2-5" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-11-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t2-5" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=5 and id_imagen=3");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t3-5" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t3-5" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=5 and id_imagen=4");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t4-5" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t4-5" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=5 and id_imagen=5");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-12 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-12.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t5-5" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-12-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t5-5" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=5 and id_imagen=6");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t6-5" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t6-5" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=5 and id_imagen=7");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t7-5" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t7-5" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=5 and id_imagen=8");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-12 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-12.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t8-5" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-12-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t8-5" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
        <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=6");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
            <div class="c-collage">
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=6 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-11 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-11.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t1-6" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-11-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t1-6" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=6 and id_imagen=2");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-15 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-15.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2-6" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-15-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t2-6" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=6 and id_imagen=3");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-15 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-15.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t3-6" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-15-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t3-6" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=6 and id_imagen=4");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-3 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-3.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t4-6" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-3-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t4-6" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
        <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=7");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
            <div class="c-collage">
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=7 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-11 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-11.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t1-7" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-11-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t1-7" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=7 and id_imagen=2");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2-7" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t2-7" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=7 and id_imagen=3");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t3-7" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t3-7" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=7 and id_imagen=4");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t4-7" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t4-7" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=7 and id_imagen=5");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t5-7" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t5-7" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=7 and id_imagen=6");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-15 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-15.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t6-7" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-15-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t6-7" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=7 and id_imagen=7");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-7 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-7.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t7-7" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-7-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t7-7" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
       <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=8");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
            <div class="c-collage">
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=8 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-13 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-13.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t1-8" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-13-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t1-8" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=8 and id_imagen=2");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-11 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-11.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2-8" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-11-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t2-8" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=8 and id_imagen=3");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t3-8" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t3-8" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=8 and id_imagen=4");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t4-8" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t4-8" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=8 and id_imagen=5");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-15 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-15.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t5-8" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-15-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t5-8" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=8 and id_imagen=6");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-11 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-11.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t6-8" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-11-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t6-8" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
       <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=9");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
            <div class="c-collage">
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=9 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-2 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-2.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t1-9" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-2-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t1-9" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=9 and id_imagen=2");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-12 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-12.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2-9" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-12-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t2-9" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=9 and id_imagen=3");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t3-9" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t3-9" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=9 and id_imagen=4");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t4-9" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t4-9" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
        <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=10");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
            <div class="c-collage">
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=10 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-10 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-10.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t1-10" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-10-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t1-10" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=10 and id_imagen=2");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2-10" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t2-10" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=10 and id_imagen=3");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t3-10" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t3-10" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=10 and id_imagen=4");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-11 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-11.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t4-10" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-11-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t4-10" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=10 and id_imagen=5");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-4 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-4.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t5-10" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-4-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t5-10" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
        <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=11");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
            <div class="c-collage">
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=11 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-5 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-5.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t1-11" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-5-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t1-11" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=11 and id_imagen=2");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2-11" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t2-11" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=11 and id_imagen=3");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-14 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-14.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t3-11" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-14-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t3-11" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
        <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <?php
              $canT=0;
            $cGaleriaT = new Dbgaleria();
            $mData = array("where"=>"id_collage=12");
            $collT= $cGaleriaT->getList2($mData);
            $canT=count($collT);
            if ($canT>0){
        ?>
        <div class="slide">
            <div class="c-collage">
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=12 and id_imagen=1");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-6 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-6.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t1-12" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-6-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t1-12" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=12 and id_imagen=2");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-15 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-15.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t2-12" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-15-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t2-12" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=12 and id_imagen=3");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t3-12" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t3-12" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=12 and id_imagen=4");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-16 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-16.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t4-12" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-16-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t4-12" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
                <?php
                    $can_col=0; $can_Im1=0; $id_gal=''; $titulo=''; $descr=''; $cant=0;  $Img1='';$GImg1='';
                    $cGaleria = new Dbgaleria();
                    $mData = array("where"=>"id_collage=12 and id_imagen=5");
                    $collage1= $cGaleria->getList2($mData);
                    $can_col=count($collage1);
                    if ($can_col>0){ $id_gal=$collage1[0]["idgaleria"];
                    $titulo=$collage1[0]["titulo"]; $descr=$collage1[0]["descripcion"]; }
                    if (!empty($id_gal)){
                        $Img1='';$GImg1='';
                        $cGalImg = new Dbgaleria_imagenes();
                        $mData = array("where"=>"idgaleria='".$id_gal."' ");
                        $Img1 = $cGalImg->getListOne($mData);
                        if (!empty($Img1)) $can_Im1=count($Img1);
                        $GImg1= $cGalImg->getList2($mData);
                    }
                 ?>
                <div class="d-collage-8 m-collage" style="background-image:url(<?php echo ($can_col>0) ? 'assets/img/galeria_c/'.$collage1[0]["imagen"] : 'assets/img/galeria/img-gal-tipo-8.jpg'; ?>)">
                    <!--Modal imagen-->
                    <a class="box-thumbs" data-fancybox-group="thumb-t5-12" href="<?php echo ($can_Im1>0) ?  'assets/img/galeria_img/'.$Img1["imagen"] : "assets/img/galeria/img-bigs/img-gal-tipo-8-b.jpg"?>">
                        <span>
                            <div class="des-product">
                                 <h1 class="caption-t"><?php echo utf8_encode($titulo) ?></h1>
                                    <p class="caption-p"><?php echo utf8_encode($descr) ?></p>
                            </div>
                            <div class="galeria-bt"></div>
                        </span>
                    </a>
                   <div class="pan-galeria">
                      <?php
                                $cant=count($GImg1);
                                for($j = 1 ; $j < $cant ; $j++){  
                                    ?>
                                        <a class="box-thumbs" data-fancybox-group="thumb-t5-12" href="assets/img/galeria_img/<?php echo $GImg1[$j]["imagen"]?>"></a>

                                     <?php
                                }
                            ?>
                    </div>
                    <!--Fin modal imagen-->
                </div>
            </div>
        </div>
        <?php
           }//fin collage 1
        ?>
        <!--Fin collage op-->
        <!--Collage op -->
        <!--Fin collage op-->
    </div>
</div>
<!--Fin galería-->
<div class="con-content">
    <div class="mg-content">
        <div class="info-content">
            <h1>Fichas técnicas</h1>
            <div class="con-info-gral">
                <!--Con. proyecto-->
               <?php
               for($i = 0 ; $i < $cant1; $i++){ 
                  $titulo= !empty($proyectos[$i]["titulo"]) ? $proyectos[$i]["titulo"] : null;  
                  $proyecto= !empty($proyectos[$i]["proyecto"]) ? $proyectos[$i]["proyecto"] : null;  
                  $lugar=!empty($proyectos[$i]["lugar"]) ? $proyectos[$i]["lugar"] : null;  
                  $area=!empty($proyectos[$i]["area"]) ? $proyectos[$i]["area"] : null;  
                  $uso=!empty($proyectos[$i]["uso"]) ? $proyectos[$i]["uso"] : null;
                  $actividades=!empty($proyectos[$i]["actividades"]) ? $proyectos[$i]["actividades"] : null; 
                  $clientes=!empty($proyectos[$i]["cliente"]) ? $proyectos[$i]["cliente"] : null; 
                ?>
                <div class="con-project-bt">
                    <div class="project-bt"><?php echo utf8_encode($titulo) ?></div>
                    <div class="con-info-project">
                        <ul class="list-project">
                            <li>
                                <div class="t-table">Proyecto:</div>
                                <div class="info-table"><?php echo utf8_encode($proyecto) ?></div>
                            </li>
                            <li>
                                <div class="t-table">Lugar:</div>
                                <div class="info-table"><?php echo utf8_encode($lugar) ?></div>
                            </li>
                            <li>
                                <div class="t-table">Fecha:</div>
                                <div class="info-table">
                                <?php  for($j = 0 ; $j < $num ; $j++){
                                    if (!empty($proyectos[$i]["mes_ini"])){
                                        if($proyectos[$i]["mes_ini"] == $mes[$j]["idmes"]){
                                            echo $mes[$j]["nombre"];
                                        }                           
                                    }
                                } 
                                echo '  ';
                                for($j = 0 ; $j < $total ; $j++){ 
                                    if (!empty($proyectos[$i]["ano_ini"])){
                                        if($proyectos[$i]["ano_ini"] == $ano[$j]["idano"]){
                                            echo $ano[$j]["ano"];
                                        } 
                                    }
                                }
                                echo ' - ';
                                for($j = 0 ; $j < $num ; $j++){
                                    if (!empty($proyectos[$i]["mes_fin"])){
                                        if($proyectos[$i]["mes_fin"] == $mes[$j]["idmes"]){
                                            echo $mes[$j]["nombre"];
                                        }   
                                    }
                                } 
                                echo '  ';
                                for($j = 0 ; $j < $total ; $j++){ 
                                     if (!empty($proyectos[$i]["ano_fin"])){
                                            if($proyectos[$i]["ano_fin"] == $ano[$j]["idano"]){
                                                echo $ano[$j]["ano"];
                                            } 
                                     }
                                }
                                ?>
                                </div>
                            </li>
                            <li>
                                <div class="t-table">Uso / &#193;rea:</div>
                                <div class="info-table-d"><?php echo utf8_encode($uso) ?></div>
                                <div class="info-table-d"><?php echo $area ?> m2</div>
                            </li>
                            <li>
                                <div class="t-table">Actividades realizadas:</div>
                                <div class="info-table"><?php echo utf8_encode($actividades) ?></div>
                            </li>
                            <li>
                                <div class="t-table">Cliente:</div>
                                <div class="info-table"><?php echo utf8_encode($clientes) ?></div>
                            </li>
                        </ul>
                    </div>
                </div>
               <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>