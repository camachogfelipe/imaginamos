	<style type="text/css">.con-section-main {padding:0 56px;}</style>
  <div class="con-main-sub-nav clearfix">
  	<div class="mg-main-sub-nav">
      <ul>
      	<li><a href="tratamiento">El Tratamiento</a></li>
        <li><a href="alimentacion">Tu Alimentación</a></li>
        <li id="sub-act"><a href="banda">Chip Anti Obesidad</a></li>
        <li><a href="testimonios">Testimonios</a></li>
      </ul>
    </div>
  </div>
  <section>
    <div class="info">
      <div class="mg-info clearfix">
        <div class="con-section-main clearfix">
            

        	<div class="main-head-bg"><img src="<?php echo base_url().$barner->imagen_path; ?>"></div>
          <div class="banda-main-img">
          	<div class="banda-main-img-img"><img src="<?php echo base_url().$barner->imagen1_path; ?>" height="392" width="940" alt=""></div>
          </div>
          <!--<div class="main-head-img"><img src="assets/img/alimentacion-main-img-2.png" height="345" width="700" alt=""></div>-->
          <!--<div class="con-info-bgv">
              <div class="scroll-wrap">
                <h1>BANDA GÁSTRICA VIRTUAL (BGV)</h1>
                <h2>REDUCE TU CAPACIDAD DE COMER SIN CIRUGÍAS, NI MEDICAMENTOS</h2>
                <p>¿Cómo sería tu gura si tu cuerpo no requiriera tanta comida para sentirse lleno? La Banda Gástrica Virtual funciona porque es un método que se ha probado en diferentes países y que se basa en sugestiones hipnóticas, programaciones mentales y técnicas que puedes usar en cualquier lugar. Partiendo de un cambio a nivel mental consciente y subconsciente, tu organismo se acostumbra cada día a sentir mayor saciedad con menos comida y esto es un factor fundamental para perder peso, aún si eres una persona de gran apetito.</p>
            </div>
          </div>-->
          <!--<div class="con-bgv-video">
            <div class="item-site-video">
              <a href="http://www.youtube.com/watch?v=TM_Nm6ei3wo" class="modal-media">
                <div class="site-video">
                  <div class="con-icon-site-v">
                    <div class="img-des-t"><img src="assets/img/bgv-video-img.jpg" width="500" height="300" alt=""></div><div class="vn-des-t"></div><div class="icon-site-v"></div>
                  </div>
                  <div class="site-info"><h1>¿CÓMO ACTÚA LA BANDA GÁSTRICA VIRTUAL?</h1></div>
                </div>
              </a>
            </div>
          </div>-->
        </div>
<!--        <div class="con-section-head-2">
        	<h1>¿Cómo actúa?</h1>
          <p>La Banda Gástrica Virtual (BGV) funciona porque es un método que se ha probado en diferentes países y que se basa en sugestiones hipnóticas, programaciones mentales y técnicas que puedes usar en cualquier lugar. Partiendo de un cambio a nivel mental consciente y subconsciente, tu organismo se acostumbra cada día a sentir mayor saciedad con menos comida y esto es un factor fundamental para perder peso, especialmente si eres una persona de gran apetito.</p>
        </div>-->
         <div class="con-section-head-2">
        	<h1><?php echo $text_page->titulo; ?></h1>
          <p><?php echo $text_page->texto; ?></p>
        </div>
          
          <div class="con-section-info con-section-info-f clearfix"></div>

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
               <a href="<?php echo base_url('contactos') ?>"><div class="con-tratamiento-bt"><div class="tratamiento-bt">Comienza ahora</div></div></a>
           <?php endif; $i++; ?>
        </div>
         <?php endforeach; ?>  
          
          
          
<!--          
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/section-banda-img-2.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Las herramientas</h1>
                <p>Te enseñamos diferentes técnicas , tan sencillas, que pueden usar adolescentes hasta adultos mayores, para manejar los alimentos. También recibes material escrito de registro y audio-ayuda para profundizar en las programaciones del implante. El manejo adecuado de estas herramientas es indispensable para obtener los resultados deseados.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/section-banda-img-3.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>La prueba</h1>
                <p>¿Cómo puedes saber si funcionó? Muy fácil; al nalizar el implante, compruebas su efectividad frente a un plato de comida. Más del 80% de nuestros pacientes no logran comer ni el 70% de lo servido. En caso de que el resultado de la prueba no sea el esperado, puedes realizar un nuevo implante sin ningún costo adicional.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/section-banda-img-4.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>El compromiso</h1>
                <p>La Banda Gástrica Virtual no es un tratamiento para disminuir la ansiedad, pero ayuda a reducir tu apetito, facilitando la pérdida de peso cuando se siguen las intrucciones con compromiso. Los resultados se potencializan al combinarla con un régimen de alimentación saludable y orientado a la pérdida de peso.</p>
              </div>
            </div>
          </div>
          <a href="contactos.php?seccion=7"><div class="con-tratamiento-bt"><div class="tratamiento-bt">Contáctanos</div></div></a>
        </div>-->


        <div class="con-section-destacados clearfix">
        	<div class="pasos-tratamiento">
            
                    
<!--           <div class="item-tratamiento">
            	<a href="fit.php?seccion=3">
                <div class="con-icon-des-t">
                  <div class="img-des-t"><img src="assets/img/tratamiento-img-des-1.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2>ALIMENTACIÓN INTELIGENTE</h2>
                <p>Adelgaza, mejora tu salud o simplemente cuida tu ﬁgura comiendo lo que tanto te gusta, a domicilio.</p>
              </a>
            </div>-->
                    
           <?php foreach ($destacado as $val) : ?>           
          <div class="item-tratamiento">
            	<a href="<?php echo (!empty($val->link))?$val->link:"#"; ?>">
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
                  <div class="img-des-t"><img src="assets/img/tratamiento-img-des-2.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2>¡CÁMBIATE EL CHIP!</h2>
              	<p>Reduce tu capacidad de comer hasta un 50%, sin cirugías, ni medicamentos, con hipnosis clínica.</p>
              </a>
            </div>
            <div class="item-tratamiento">
            	<a href="fit.php?seccion=3">
                <div class="con-icon-des-t">
                  <div class="img-des-t"><img src="assets/img/tratamiento-img-des-1.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2>FIT CAMP</h2>
                <p>Adelgaza, mejora tu salud o simplemente cuida tu ﬁgura comiendo lo que tanto te gusta, a domicilio.</p>
              </a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </section>
  