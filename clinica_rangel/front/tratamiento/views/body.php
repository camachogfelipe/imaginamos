  <div class="con-main-sub-nav clearfix">
  	<div class="mg-main-sub-nav">
      <ul>
        <li id="sub-act"><a href="tratamiento">El Tratamiento</a></li>
        <li><a href="alimentacion">Tu Alimentación</a></li>
        <li><a href="banda">Banda Gástrica Virtual</a></li>
        <li><a href="testimonios">Testimonios</a></li>
        <!--<li><a href="analisis.php?seccion=3">Análisis Gratuito</a></li>
        <li><a href="fit.php?seccion=3">Fit Camp</a></li>-->
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
            
            
           <!-- video --> 
          <div class="con-gal-video">
          	<div class="item-home-video">
              <a href="<?php echo $video->link; ?>" class="modal-media">
                <div class="destacado-video">
                  <div class="con-icon-des-v">
                    <div class="img-des-t"><img src="<?php echo base_url().$video->imagen_path; ?>" width="288" height="162" alt=""></div><div class="vn-des-t"></div><div class="icon-des-v"></div>
                  </div>
                </div>
              </a>
            </div>
              
             <!-- video -->   
            <div class="info-video">
            	<h1><?php echo $video->titulo; ?></h1>
              <p><?php echo $video->texto; ?></p>
            </div>
              
              
          </div>          
        </div>
        <div class="con-section-head">
        	<h1><?php echo $text_page->titulo; ?></h1>
        </div>
          
              <?php $i = 1; foreach ($contenedor as $val) : ?>     
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="<?php echo base_url().$val->imagen_path;  ?>" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <!--<span class="num-razon">1</span>-->
                <h1><?php echo $val->titulo;  ?></h1>
                <p><?php echo $val->texto;  ?></p>
              </div>
            </div>
          </div>
           <?php if( $i ==  $contenedor->result_count()) : ?>
               <a href="<?php echo base_url("contactos") ?>"><div class="con-tratamiento-bt"><div class="tratamiento-bt">Comienza ahora</div></div></a>
           <?php endif; $i++; ?>
        </div>
         <?php endforeach; ?>  
          
          
<!--        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/section-var-img-2.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Activa tu metabolismo</h1>
                <p>Gracias a las más avanzadas técnicas de medicina funcional, desintoxicamos tu organismo y activamos tus funciones metabólicas para una pérdida de peso constante, mejorarndo niveles de colesterol, triglicéridos, ácido úrico y glicemia, de forma totalmente natural.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/section-var-img-3.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Controla el deseo de comer</h1>
                <p>Controlar el hambre no necesariamente requiere fuerza de voluntad. ¿Te sorprende? Tu ya tienes el deseo; nosotros implantamos las técnicas y te damos el entrenamiento correcto para que en cada situación que vivas, tengas mayor control sobre el hambre y la compulsión por alimentos como el pan y el dulce.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/section-var-img-4.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Adelgaza comiendo <strong>a domicilio</strong></h1>
                <p>Pan, pizza, wraps, paella, e incluso postres, son solo algunos de los platos que disfrutarás en los menús que recibes diariamente, totalmente preparados, según tus preferencias y objetivos, con los cuales, no solo adelgazas, sino que mejoras tu salud. Y lo mejor, sin cocinar, ni seguir dietas o contar calorías.</p>
                <p><a href="alimentacion.php?seccion=3">+ Conoce más acerca de la Alimentación Inteligente.</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/section-var-img-5.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Banda Gástrica <strong>Virtual</strong></h1>
                <p>Sin cirugías, ni medicamentos y gracias a este increíble programa, logras reducir hasta un 50% tu capacidad de comer, facilitando la pérdida de peso, ya que tu organismo requiere cada vez menos comida para sentirse totalmente satisfecho.</p>
                <p><a href="banda.php?seccion=3">+ Conoce más acerca de la Banda Gástrica Virtual.</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/section-var-img-6.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Reprograma tus hábitos</h1>
                <p>Cambias tus viejos hábitos por unos nuevos, saludables, aprendes a planear y manejar tus comidas de forma inteligente y a disfrutar antojos y tu vida social sin subir de peso, aún en vacaciones. Incluso, si disfrutas cocinar, te enseñamos a hacerlo bien.</p>
              </div>
            </div>
          </div>
          <a href="#"><div class="con-tratamiento-bt"><div class="tratamiento-bt">Comienza ahora</div></div></a>
        </div>-->
      
        
        <div class="con-section-destacados clearfix">
        	<div class="pasos-tratamiento">
           
          <?php foreach ($destacado as $val) : ?>           
          <div class="item-tratamiento">
            	<a href="<?php echo $val->link; ?>">
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
                  <div class="img-des-t"><img src="assets/img/tratamiento-img-des-3.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2>GRASA LOCALIZADA</h2>
              	<p>Escápte una semana, dale unas vacaciones a tu cuerpo y adelgaza aceleradamente.</p>
              </a>
            </div>
            
            <div class="item-tratamiento">
            	<a class="modal-media" href="http://www.youtube.com/watch?v=TM_Nm6ei3wo">
                <div class="con-icon-des-t">
                  <div class="img-des-t"><img src="assets/img/tratamiento-img-des-2.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t icon-des-v"></div>
                </div>
                <h2>FIT CAMP</h2>
              	<p>Escápate una semana a nuestra sede campestre y adelgaza aceleradamente.</p>
              </a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </section>