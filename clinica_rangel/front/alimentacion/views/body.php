	<style type="text/css">.section-var-info {height:270px; margin:0;} .paso-bt {margin:0 auto 30px;}</style>
  <div class="con-main-sub-nav clearfix">
  	<div class="mg-main-sub-nav">
      <ul>
      	<li><a href="tratamiento">El Tratamiento</a></li>
        <li id="sub-act"><a href="alimentacion">Tu Alimentación</a></li>
        <li><a href="banda">Chip Anti Obesidad</a></li>
        <li><a href="testimonios">Testimonios</a></li>
      </ul>
    </div>
  </div>
  <section>
    <div class="info">
      <div class="mg-info clearfix">
      	<div class="con-section-main clearfix">
          
             <!-- imagenes --> 
            <div class="main-head-bg"><img src="<?php echo base_url().$barner->imagen_path; ?>"></div>
            <div class="main-head-img"><img src="<?php echo base_url().$barner->imagen1_path; ?>" height="345" width="700" alt=""></div>        
          
          <div class="con-gal-v">
            <div class="scroll-wrap">
             <?php $i=1; foreach ($recetas as $receta): ?>
                <a class="modals-act" href="#modal-gal<?php echo $i; ?>">
                    <!--Item gal.-->
                    <div class="con-icon-gal-v">
                        <div class="img-gal-v"><img src="<?php echo base_url().$receta->imagen_path;  ?>" width="188" height="125" alt=""></div><div class="vn-gal-v"></div><div class="icon-gal-v"></div>
                    </div>
                </a>
                <div class="con-modals">
                    <div id="modal-gal<?php echo $i; $i++; ?>">
                        <div class="modal-img"><img src="<?php echo base_url().$receta->imagen_path;  ?>" width="450" height="300" alt=""></div>
                        <div class="modal-info">
                            <h1><?php echo $receta->titulo;  ?></h1>
                            <p><?php echo $receta->texto;  ?></p>
                            <a href="contactos"><div class="con-tratamiento-bt"><div class="tratamiento-bt">Comienza ahora</div></div></a>
                        </div>
                    </div>
                </div> 
           <?php endforeach; ?>   
                
                
<!--              <a class="modals-act" href="#modal-gal">
              	Item gal.
              	<div class="con-icon-gal-v">
                	<div class="img-gal-v"><img src="assets/img/img-gal-v.jpg" width="188" height="125" alt=""></div><div class="vn-gal-v"></div><div class="icon-gal-v"></div>
                </div>
              </a>
              <a class="modals-act" href="#modal-gal">
              	Item gal.
              	<div class="con-icon-gal-v">
                	<div class="img-gal-v"><img src="assets/img/img-gal-v.jpg" width="188" height="125" alt=""></div><div class="vn-gal-v"></div><div class="icon-gal-v"></div>
                </div>
              </a>
              <a class="modals-act" href="#modal-gal">
              	Item gal.
              	<div class="con-icon-gal-v">
                	<div class="img-gal-v"><img src="assets/img/img-gal-v.jpg" width="188" height="125" alt=""></div><div class="vn-gal-v"></div><div class="icon-gal-v"></div>
                </div>
              </a>-->
            </div>
          </div>
        </div>
        <div class="con-section-head-2">
        	<h1><?php echo $text_page->titulo; ?></h1>
          <p><?php echo $text_page->texto; ?></p>
        </div>
        
           <?php $i=1; foreach ($contenedor as $val): ?> 
          <div class="con-section-info clearfix">
        	<div class="section-var-img">
                    <img src="<?php echo base_url().$val->imagen_path;  ?>" width="380" height="310" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<h2><?php echo $val->titulo;  ?></h2>
              <h1 class="al-t<?php echo $i; ($i == 3)?$i=0:$i++; ?>"><?php echo $val->subtiulo;  ?></h1>
              <p><?php echo $val->texto;  ?></p>
            </div>
            <a href="contactos"><div class="section-var-vn">Inscríbete</div></a>
          </div>
        </div>
          <?php endforeach; ?>
          
          
          
<!--        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/section-al-img-2.jpg" width="380" height="310" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<h2>ALIMENTACIÓN INTELIGENTE</h2>
              <h1 class="al-t2">TERAPÉUTICA</h1>
              <p>Actúa como una verdadera medicina nutricional, indispensable para mejorar condiciones especícas de salud, prevenir el riesgo cardiovascular, manejo de diabetes e hipertensión e incluso tratamientos de enfermedades crónicas y en post quirúrgicos. También es ideal en pre y post parto para prevenir eclampsia, sobrepeso y alteraciones estéticas. Puede combinarse con la línea adelgazante. Disfrútala también en versión vegetariana.</p>
            </div>
            <a href="#"><div class="section-var-vn">Inscríbete</div></a>
          </div>
        </div>
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/section-al-img-1.jpg" width="380" height="310" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<h2>ALIMENTACIÓN INTELIGENTE</h2>
              <h1 class="al-t3">BALANCEADA</h1>
              <p>Cuida tu gura y previene enfermedades comiendo sanamente. Si eres una persona ocupada o simplemente quieres alimentarte bien, esta es tu mejor opción. No te preocupes por encontrar un lugar que te ofrezca la comida Gourmet que necesitas. Solo llámanos y telefónicamente acordaremos las condiciones de entrega y preferencias.</p>
            </div>
            <a href="#"><div class="section-var-vn">Inscríbete</div></a>
          </div>
        </div>-->
        <div class="con-section-main clearfix">
        	<br><br>
        	<h1>Es así de fácil</h1>
          <div class="con-pasos">
          	<div class="pasos">
                 <?php $i=1; foreach ($pasos as $val): ?>     
            	<div class="paso">
                    <div class="paso-icon"><img src="<?php echo base_url().$val->imagen_path ?>" width="136" height="75" alt=""></div>
                <div class="paso-tx"><h1>><?php echo $val->titulo ?></h1></div>
              </div>
                    <?php if ($i !== $pasos->result_count()): ?>
                    <div class="paso-spc"></div>
                    <?php endif; $i++;  ?>       
                <?php endforeach; ?>  
<!--              <div class="paso">
              	<div class="paso-icon"><img src="assets/img/icon-paso-2.png" width="136" height="75" alt=""></div>
                <div class="paso-tx"><h1>ELIGES EL LUGAR DE ENTREGA</h1></div>
              </div><div class="paso-spc"></div>
              
              
              <div class="paso">
              	<div class="paso-icon"><img src="assets/img/icon-paso-3.png" width="136" height="75" alt=""></div>
                <div class="paso-tx"><h1>RECIBES TU COMIDA DIARIAMENTE</h1></div>
              </div><div class="paso-spc"></div>
              
              <div class="paso">
              	<div class="paso-icon"><img src="assets/img/icon-paso-4.png" width="136" height="75" alt=""></div>
                <div class="paso-tx"><h1>SOLO CALIENTAS Y DISFRUTAS</h1></div>
              </div>-->
            </div>
          </div>
          <a href="<?php echo base_url('contactos') ?>"><div class="paso-bt">Comienza ahora</div></a>
        </div>
      </div>
    </div>
  </section>
        
        
        
     