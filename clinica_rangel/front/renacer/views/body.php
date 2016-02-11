<style type="text/css">.con-img-fit {margin-left:-56px; width:406px;} .con-info-fit {overflow:visible;} .con-fit-test {background:url(<?php echo base_url().$barner->imagen_path; ?>) left center repeat-x;} .fit-info-head h1 {font:65px 'HelveticaNeue-L';} .fit-info-head h1 strong {font:normal 65px 'HelveticaNeue-C';} .fit-info-head h1, .fit-info-head p {color:#fff;} .fit-info-head h2 {color:#fff; font-size:30px; line-height:32px;} .fit-test-img {background:#2d4f5f;}</style>
<div class="con-main-sub-nav clearfix">
    <div class="mg-main-sub-nav">
        <ul>
            <li><a href="lugar">El Lugar</a></li>
            <li><a href="adelgazar">Adelgazamiento</a></li>
            <li><a href="desintoxicar">Desintoxicación</a></li>
            <li id="sub-act"><a href="renacer">Renacimiento</a></li>
            <!--<li><a href="planes.php?seccion=5">Planes Empresas</a></li>-->
        </ul>
    </div>
</div>
<section>
    <div class="info">
        <div class="mg-info clearfix">
            
            <!-- barner -->
            <div class="con-section-esp clearfix">
            
            		<div class="con-slider-grl-tx"><img src="<?php echo base_url().$barner->imagen2_path; ?>" height="300" width="550" alt=""></div>
            
                <div class="con-img-fit"><img src="<?php echo base_url().$barner->imagen1_path; ?>" width="406" height="434" alt=""></div>
                <div class="con-info-fit">
                    <!--div class="fit-info-head">
                        <div class="scroll-wrap">
                            <h1>Renacimiento</h1>
                            <h2>Si volvieras a nacer,<br><strong>¿qué le cambiarías a tu vida?</strong></h2>
                        </div>
                    </div-->
                    <div class="con-head-esp-nav">
                        <a href="contactos"><div class="esp-bt-1">Contáctanos</div></a>
                        <a class="esp-bt-2" href="#">¿Cuándo es el próximo?</a>
                    </div>
                </div>
                <div class="st-esp-t1 st-esp-3-t1"></div><div class="st-esp-t2 st-esp-3-t2"></div><div class="st-esp-t3 st-esp-3-t3"></div>
                <div class="st-esp-img-bg"><img src="assets/img/sec-esp-1-t4.jpg" height="434" width="274" alt=""></div>
            </div>
             <!-- end barner -->
            
            <div class="con-section-info con-section-info-f clearfix"></div>
            
           <?php foreach ($contenedor as $val) : ?> 
                <div class="con-section-info clearfix">
                    <div class="section-var-img section-ren-img-main">
                        <img src="<?php echo base_url() . $val->imagen_path; ?>" width="380" height="540" alt="">
                    </div>
                    <div class="section-var-info section-var-info-s section-var-info-s-esp">
                        <div class="scroll-wrap">
                            <h2 class="t-esp"><strong><?php echo $val->titulo_parrafo1; ?></strong></h2>
                            <p><?php echo $val->parrafo1; ?></p>
                        </div>
                    </div>
                    <div class="renace-sep"></div>
                    <div class="section-var-info section-var-info-s section-var-info-s-esp">
                        <div class="scroll-wrap">
                            <h2 class="t-esp"><strong><?php echo $val->titulo_parrafo2; ?></strong></h2>
                            <p><?php echo $val->parrafo2; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>  
            <div class="con-section-info clearfix">
                <div class="section-var-img section-var-img-s"><img src="<?php echo  base_url().$imagen_beneficio->imagen_path; ?>" width="380" height="270" alt=""></div>
                <div class="section-var-info section-var-info-s section-var-info-s-esp">
                    <div class="scroll-wrap">
                        <h2 class="t-esp"><strong>Beneficios</strong></h2>
                        <ul class="ren-bene">
                            <?php foreach ($beneficio as $val) : ?>    
                                <li><p><?php echo $val->texto ?></p></li>
                            <?php endforeach; ?>  
          <!--                <li><p>Puedes mejorar todas tus relaciones, porque cuando tú cambias, todo tu mundo también lo hace.</p></li>
                          <li><p>Puedes contribuir a sanar tus enfermedades al liberarte de la emoción negativa que las origina.</p></li>-->
                        </ul>
                    </div>
                </div>
                <a href="contactos"><div class="con-tratamiento-bt"><div class="tratamiento-bt">Contáctanos</div></div></a>
            </div>
            <div class="con-section-destacados clearfix">
                <div class="pasos-tratamiento">


                    <?php foreach ($destacado as $val) : ?>           
                        <div class="item-tratamiento">
                            <a href="<?php echo $val->link; ?>">
                                <div class="con-icon-des-t">
                                    <div class="img-des-t"><img src="<?php echo base_url() . $val->imagen_path; ?>" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                                </div>
                                <h2><?php echo $val->titulo; ?></h2>
                                <p><?php echo $val->texto; ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <!--                    
                                        <div class="item-tratamiento">
                                    <a href="fit.php?seccion=3">
                                    <div class="con-icon-des-t">
                                      <div class="img-des-t"><img src="assets/img/desintoxica-des-1.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                                    </div>
                                    <h2>FIT CAMP</h2>
                                    <p>Adelgaza aceleradamente por inmersión.</p>
                                  </a>
                                </div>
                    
                                        
                               <div class="item-tratamiento">
                                    <a href="#">
                                    <div class="con-icon-des-t">
                                      <div class="img-des-t"><img src="assets/img/adelgaza-des-2.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                                    </div>
                                    <h2>GALERÍA</h2>
                                    <p>Recorre Naturaleza Real en imágenes.</p>
                                  </a>
                                </div>-->

                    <?php if ($video->result_count() > 0): ?>        
                        <div class="item-tratamiento">
                            <a class="modal-media" href="<?php echo $video->link; ?>">
                                <div class="con-icon-des-t">
                                    <div class="img-des-t"><img src="<?php echo base_url() . $video->imagen_path; ?>" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t icon-des-v"></div>
                                </div>
                                <h2><?php echo $video->titulo; ?></h2>
                            </a>
                        </div>
                    <?php endif; ?>         
                </div>
            </div>
        </div>
    </div>
</section>
