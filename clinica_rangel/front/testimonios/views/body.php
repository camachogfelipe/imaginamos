<style type="text/css">.con-section-main {padding:20px 56px 0;}</style>
  <div class="con-main-sub-nav clearfix">
  	<div class="mg-main-sub-nav">
      <ul>
      	<li><a href="tratamiento">El Tratamiento</a></li>
        <li><a href="alimentacion">Tu Alimentación</a></li>
        <li><a href="banda">Chip Anti Obesidad</a></li>
        <li id="sub-act"><a href="testimonios">Testimonios</a></li>
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
          <!--<div class="con-test-video">
            <div class="item-test-video">
              <a href="http://www.youtube.com/watch?v=TM_Nm6ei3wo" class="modal-media">
                <div class="test-video">
                  <div class="con-icon-test-v">
                    <div class="img-des-t"><img src="assets/img/testimonio-video-img.jpg" width="350" height="240" alt=""></div><div class="vn-des-t"></div><div class="icon-test-v"></div>
                  </div>
                  <div class="test-info"><h1>VER VIDEO DE TESTIMONIOS</h1></div>
                </div>
              </a>
            </div>
          </div>-->
          <!--<div class="con-info-test-head">
          	<h1>TESTIMONIOS DE ÉXITO</h1>
            <h2>"Nunca pensé que una semana pudiera cambiar mi vida para siempre"</h2>
            <div class="con-main-test">
            	<div class="main-test-img"><img src="assets/img/testimonio-main-img.jpg" width="114" height="114" alt=""></div>
              <div class="main-test-info">
              	<div class="main-test-tx">
                	<div class="scroll-wrap">
              			<p>¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos adelgazar.</p>
                  </div>
             		</div>
                <p class="acor-vn"><a href="#">+ Ver más</a></p>
              </div>
            </div>
          </div>-->
        </div>
       
          
        <?php $i = 1; foreach ($contenedor as $val) : ?>     
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
                    <div class="section-var-img-person">
                        <img src="<?php echo base_url().$val->imagen_path;  ?>" height="340" width="380" alt="">
                    </div>
                </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1><?php echo $val->titulo;  ?></h1>
                <p><?php echo $val->texto;  ?></p>
                <h3>- <?php echo $val->nombre;  ?></h3>
              </div>
            </div>
          </div>
        </div>
         <?php endforeach; ?>  
          
          
<!--        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<div class="section-var-img-person"><img src="assets/img/testimonio-img-2.png" height="340" width="380" alt=""></div>
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Perdí 14 Kg.</h1>
                <p>En la BGV no usamos cirugías, ni medicamentos. En una sesión, en donde te encuentras perfectamente consciente de tus facultades físicas y mentales, realizamos la programación mental, grupal o individual para que inicie el efecto terapéutico. Requiere evaluación previa para determinar si este tratamiento es para tí.</p>
                <h3>- Yolanda</h3>
              </div>
            </div>
          </div>
        </div>-->
        <!--<div class="pager-info clearfix">
          <ul class="con-pager clearfix">
            <li>
              <div class="con-section-info con-section-info-s clearfix">
                <div class="section-var-img section-test-img-s"><img src="assets/img/lugar-img-1.png" width="380" height="270" alt=""></div>
                <div class="section-var-info section-var-info-s">
                  <div class="con-test-person">
                    <div class="test-person-c1"><h1>Juliana</h1></div>
                    <div class="test-person-c2">
                      <h2>Peso antes de Fit Camp: 89 Kg.</h2>
                      <h2>Peso después de Fit Camp: 89 Kg.</h2>
                      <h3>Diabetes, Hipertensión, Colesterol elevado</h3>
                    </div>
                  </div>
                  <div class="scroll-wrap">
                    <p>Since coming to PFC Ive experienced great results. So far on my journey, I’ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now! The entire staff is great, as are the clients. The people are just good people. I recommend PFC to everyone. Thank you to the entire staff for everything!</p>
                  </div>
                </div>
              </div>
        		</li>
        		<li>
              <div class="con-section-info con-section-info-s clearfix">
                <div class="section-var-img section-test-img-s"><img src="assets/img/lugar-img-1.png" width="380" height="270" alt=""></div>
                <div class="section-var-info section-var-info-s">
                  <div class="con-test-person">
                    <div class="test-person-c1"><h1>Hernán</h1></div>
                    <div class="test-person-c2">
                      <h2>Peso antes de Fit Camp: 89 Kg.</h2>
                      <h2>Peso después de Fit Camp: 89 Kg.</h2>
                      <h3>Diabetes, Hipertensión, Colesterol elevado</h3>
                    </div>
                  </div>
                  <div class="scroll-wrap">
                    <p>Since coming to PFC Ive experienced great results. So far on my journey, I’ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now! The entire staff is great, as are the clients. The people are just good people. I recommend PFC to everyone. Thank you to the entire staff for everything!</p>
                  </div>
                </div>
              </div>
        		</li>
        		<li>
              <div class="con-section-info con-section-info-s clearfix">
                <div class="section-var-img section-test-img-s"><img src="assets/img/lugar-img-1.png" width="380" height="270" alt=""></div>
                <div class="section-var-info section-var-info-s">
                  <div class="con-test-person">
                    <div class="test-person-c1"><h1>Adriana</h1></div>
                    <div class="test-person-c2">
                      <h2>Peso antes de Fit Camp: 89 Kg.</h2>
                      <h2>Peso después de Fit Camp: 89 Kg.</h2>
                      <h3>Diabetes, Hipertensión, Colesterol elevado</h3>
                    </div>
                  </div>
                  <div class="scroll-wrap">
                    <p>Since coming to PFC Ive experienced great results. So far on my journey, I’ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now! The entire staff is great, as are the clients. The people are just good people. I recommend PFC to everyone. Thank you to the entire staff for everything!</p>
                  </div>
                </div>
              </div>
        		</li>
        		<li>
              <div class="con-section-info con-section-info-s clearfix">
                <div class="section-var-img section-test-img-s"><img src="assets/img/lugar-img-1.png" width="380" height="270" alt=""></div>
                <div class="section-var-info section-var-info-s">
                  <div class="con-test-person">
                    <div class="test-person-c1"><h1>Andres</h1></div>
                    <div class="test-person-c2">
                      <h2>Peso antes de Fit Camp: 89 Kg.</h2>
                      <h2>Peso después de Fit Camp: 89 Kg.</h2>
                      <h3>Diabetes, Hipertensión, Colesterol elevado</h3>
                    </div>
                  </div>
                  <div class="scroll-wrap">
                    <p>Since coming to PFC Ive experienced great results. So far on my journey, I’ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now! The entire staff is great, as are the clients. The people are just good people. I recommend PFC to everyone. Thank you to the entire staff for everything!</p>
                  </div>
                </div>
              </div>
        		</li>
        	</ul>
        	<div class="pager-nav"></div>
          <a href="contacto.php?seccion=7"><div class="con-tratamiento-bt con-testimonios-bt"><div class="tratamiento-bt">Contáctanos</div></div></a>
        </div>-->
        <div class="con-section-destacados clearfix">
        	<div class="pasos-tratamiento">

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
                    
          </div>
        </div>
      </div>
    </div>
  </section>