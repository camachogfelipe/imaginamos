<style type="text/css">.con-info-fit {overflow:visible;} .con-fit-test {background:url(<?php echo base_url().$barner->imagen_path; ?>) left center repeat-x;} .fit-info-head h1 {font:65px 'HelveticaNeue-L';} .fit-info-head h1 strong {font:normal 65px 'HelveticaNeue-C';} .fit-info-head h1, .fit-info-head p {color:#fff;} .fit-info-head h2 {color:#bee2e6;} .fit-test-img {background:#2d4f5f;} .paso-bt {margin:0 auto 30px;}</style>

  
  <div class="con-main-sub-nav clearfix">
  	<div class="mg-main-sub-nav">
      <ul>
        <li><a href="lugar">El Lugar</a></li>
        <li id="sub-act"><a href="adelgazar">Adelgazamiento</a></li>
        <li><a href="desintoxicar">Desintoxicación</a></li>
        <li><a href="renacer">Más Servicios</a></li>
        <!--<li><a href="planes.php?seccion=5">Planes Empresas</a></li>-->
      </ul>
    </div>
  </div>
  <section>
    <div class="info">
      <div class="mg-info clearfix">
      	<div class="con-section-esp clearfix">
          
<!--                     <div class="main-head-bg"><img src=""></div>
            <div class="main-head-img"><img src="" height="345" width="700" alt=""></div>        
          -->
         
       		<div class="con-slider-grl-tx"><img src="<?php echo base_url().$barner->imagen2_path; ?>" height="300" width="550" alt=""></div>
             
         <div class="con-img-fit"><img src="<?php echo base_url().$barner->imagen1_path; ?>" width="350" height="434" alt=""></div>
          <div class="con-info-fit">
         	<!--div class="fit-info-head">
              <div class="scroll-wrap">
                <h1>Fit<strong>Camp</strong></h1>
                <h2>ESCÁPATE UNA SEMANA Y ADELGAZA ACELERADAMENTE POR INMERSIÓN</h2>
                <p>Aléjate de todo lo que te impide adelgazar y prepárate para una pérdida de peso acelerada, segura y natural, mientras desintoxicas tu cuerpo y tu mente.</p>
              </div>
            </div-->
    
           <div class="con-fit-test con-fit-test-2">
            	<h1>Testimonios</h1>
                
            	<div class="con-fit-test-imgs">
                    <?php $i=1; foreach ($testimonios as $val): ?>
                    <div class="fit-test-img"><a class="modals-act" href="#modal-testimonio<?php echo $i; ?>"><img src="<?php echo base_url().$val->imagen_path; ?>" width="75" height="52" alt=""></a></div>
                         <div class="con-modals">
                            <div id="modal-testimonio<?php echo $i; $i++;?>">
                                <div class="section-var-info section-var-info-s">
                                <div class="con-test-person">
                                  <div class="test-person-c1"><h1><?php echo $val->nombre; ?></h1></div>
                                  <div class="test-person-c2">
                                    <h2>Peso antes de Fit Camp: <?php echo $val->peso_antes; ?>.</h2>
                                    <h2>Peso después de Fit Camp: <?php echo $val->peso_despues; ?>.</h2>
                                    <h3><?php echo $val->descripcion_persona; ?></h3>
                                  </div>
                                </div>
                                <div class="scroll-wrap">
                                  <p><?php echo $val->texto; ?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    <?php endforeach; ?>
<!--                <div class="fit-test-img"><a class="modals-act" href="#modal-testimonio"><img src="assets/img/testimonio-img-s.jpg" width="75" height="52" alt=""></a></div>
                <div class="fit-test-img"><a class="modals-act" href="#modal-testimonio"><img src="assets/img/testimonio-img-s.jpg" width="75" height="52" alt=""></a></div>
                <div class="fit-test-img"><a class="modals-act" href="#modal-testimonio"><img src="assets/img/testimonio-img-s.jpg" width="75" height="52" alt=""></a></div>-->
              </div>
            </div>
          </div>
          <div class="st-esp-t1 st-esp-1-t1"></div><div class="st-esp-t2 st-esp-1-t2"></div><div class="st-esp-t3 st-esp-1-t3"></div>
          <div class="st-esp-img-bg"><img src="img/sec-esp-1-t4.jpg" height="434" width="274" alt=""></div>
        </div>
          
          
          <div class="con-section-info con-section-info-f clearfix"></div>
        
         <?php $i = 1; foreach ($contenedor as $val) : ?>    
        <div class="con-section-info clearfix">
        	<div class="section-var-img section-var-img-s">
                    <img src="<?php echo base_url().$val->imagen_path; ?>" width="380" height="270" alt=""></div>
          <div class="section-var-info section-var-info-s section-var-info-s-esp">
          	<div class="scroll-wrap">
            	<h2 class="t-esp"><?php echo $val->titulo; ?></h2>
                <p><?php echo $val->texto; ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        
<!--        <div class="con-section-info clearfix">
        	<div class="section-var-img section-var-img-s"><img src="assets/img/adelgaza-img-2.jpg" width="380" height="270" alt=""></div>
          <div class="section-var-info section-var-info-s section-var-info-s-esp">
          	<div class="scroll-wrap">
            	<h2 class="t-esp">Todo incluido... <strong>especialmente amigos</strong></h2>
              <p>Con FitCamp recibes todo lo que necesitas para adelgazar rápidamente, ya sea como impulso para continuar perdiendo peso, para una fecha especial o para bajar esos kilos finales y llegar a tu meta. Por esto, tu programa incluye un modelo nutricional especial, acompañamiento médico 24 horas, sesiones terapéuticas, masajes y muchas otras actividades, en donde compartes con personas que te entienden y apoyan en todo momento.</p>
            </div>
          </div>
        </div>-->

        <div class="con-section-main clearfix">
        	<h1>Beneficios</h1>
          <ul class="con-beneficios">
                <?php $i = 1; foreach ($beneficio as $val) : ?>    
            <li>
            	<span><?php echo $i; $i++; ?></span>
              <p><?php echo $val->texto;  ?> </p>
            </li>
            <?php endforeach; ?>
<!--            <li>
            	<span>2</span>
              <p>Aumentas tu energía y disminuyes niveles de colesterol, insulina y glicemia.</p>
            </li>
            <li>
            	<span>3</span>
              <p>Previenes enfermedades cardiovasculares y el síndrome metabólico.</p>
            </li>
            <li>
            	<span>4</span>
              <p>Recibes herramientas para mantener la motivación y llegar hasta tu meta.</p>
            </li>-->
          </ul>
          <a class="modal-media" href="<?php echo $video->link; ?>"><div class="adelgaza-bt"><?php echo $video->titulo; ?></div></a>
          <a href="contactos"><div class="paso-bt">Contáctanos</div></a>
        </div>
        <div class="con-section-destacados clearfix">
        	<div class="pasos-tratamiento">
          	
                    
<!--             <div class="item-tratamiento">
            	<a class="modal-media" href="http://www.youtube.com/watch?v=TM_Nm6ei3wo">
                <div class="con-icon-des-t">
                  <div class="img-des-t"><img src="assets/img/adelgaza-des-1.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t icon-des-v"></div>
                </div>
                <h2>VIDEO DE<br>NATURALEZA REAL</h2>
              </a>
            </div>-->
                    
          <?php foreach ($destacado as $val) : ?>           
          <div class="item-tratamiento">
            	<a href="<?php echo $val->link;  ?>">
                <div class="con-icon-des-t">
                  <div class="img-des-t"><img src="<?php echo base_url().$val->imagen_path;  ?>" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2><?php echo $val->titulo;  ?></h2>
                <p><?php echo $val->texto;  ?></p>
              </a>
            </div>
          <?php endforeach; ?>        
                    
                    
                    
<!--            <div class="item-tratamiento">
            	<a href="#">
                <div class="con-icon-des-t">
                  <div class="img-des-t"><img src="assets/img/adelgaza-des-2.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2>GALERÍA</h2>
                <p>Recorre Naturaleza Real en imágenes.</p>
              </a>
            </div>
            <div class="item-tratamiento">
            	<a href="renacer.php?seccion=5">
                <div class="con-icon-des-t">
                  <div class="img-des-t"><img src="assets/img/adelgaza-des-3.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2>RENACIMIENTO</h2>
              	<p>Si volvieras a nacer, ¿qué cambiarías?</p>
              </a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </section>