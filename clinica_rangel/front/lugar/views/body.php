<style type="text/css">.con-section-main {padding:56px;}</style>
  <div class="con-main-sub-nav clearfix">
  	<div class="mg-main-sub-nav">
      <ul>
        <li id="sub-act"><a href="lugar">El Lugar</a></li>
        <li><a href="adelgazar">Adelgazamiento</a></li>
        <li><a href="desintoxicar">Desintoxicación</a></li>
        <li><a href="renacer">Más Servicios</a></li>
        <!--<li><a href="planes.php?seccion=5">Planes Empresas</a></li>-->
      </ul>
    </div>
  </div>
  <section>
    <div class="info">
      <div class="mg-info clearfix">
        <div class="con-section-main clearfix">
          <div class="con-site-video">
            <div class="item-site-video">
              <a href="<?php echo $video->link; ?>" class="modal-media">
                <div class="site-video">
                  <div class="con-icon-site-v">
                      <div class="img-des-t"><img src="<?php echo base_url().$video->imagen_path; ?>" width="500" height="300" alt=""></div><div class="vn-des-t"></div><div class="icon-site-v"></div>
                  </div>
                  <div class="site-info"><h1><?php echo $video->titulo; ?></h1></div>
                </div>
              </a>
            </div>
          </div>
          <div class="con-site-aco">
          	
              
               <?php $i = 1; foreach ($acordeon as $val) : ?>
              <div class="con-item-aco">
            	<div class="item-aco-head item-aco-act-<?php echo $i; $i++; ?>">
                    <h1><?php echo $val->titulo; ?></h1></div>
              <div class="item-aco-info">
                  <div class="item-aco-img"><img src="<?php echo base_url().$val->imagen_path; ?>" width="120" height="163" alt=""></div>
                <div class="item-aco-tx">
                	<p><?php echo $val->texto; ?></p>
                  <p class="acor-vn"><a href="<?php echo $val->link; ?>">+ Ver más</a></p>
                </div>
              </div>
            </div>
              <?php endforeach; ?>
              
              
<!--            <div class="con-item-aco">
            	<div class="item-aco-head item-aco-act-2"><h1>Desintoxicación</h1></div>
              <div class="item-aco-info">
              	<div class="item-aco-img"><img src="assets/img/acorde-img-2.jpg" width="120" height="163" alt=""></div>
                <div class="item-aco-tx">
                	<p>Purifica tu cuerpo y limpia hígado y colon con expulsión de cálculos biliares, sin cirugía.</p>
                  <p class="acor-vn"><a href="desintoxicar.php?seccion=5">+ Ver más</a></p>
                </div>
              </div>
            </div>
            <div class="con-item-aco">
            	<div class="item-aco-head item-aco-act-3"><h1>Renacimiento</h1></div>
              <div class="item-aco-info">
              	<div class="item-aco-img"><img src="assets/img/acorde-img-3.jpg" width="120" height="163" alt=""></div>
                <div class="item-aco-tx">
                	<p>Libérate de las cadenas del sufrimiento y renace a la armonía, la felicidad y la prosperidad.</p>
                  <p class="acor-vn"><a href="renacer.php?seccion=5">+ Ver más</a></p>
                </div>
              </div>
            </div>-->
          </div>
        </div>
        <div class="con-section-head">
        	<h1><?php echo $text_page->titulo; ?></h1>
        </div><div class="con-section-info con-section-info-f clearfix"></div>
       
        
        
<!--        
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/lugar-img-1.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>¿Qué es Naturaleza Real?</h1>
                <p>Naturaleza Real es la sede campestre de la Clínica Rangel Pereira, ubicada frente al embalse del Neusa a solo una hora de Bogotá, un lugar único rodeado de vegetación silvestre, cascadas, puentes colgantes y con más de un kilómetro de senderos ecológicos privados y con un montón de cosas que ya te iremos contando por el camino mientras terminamos los textos del site.</p>
              </div>
            </div>
          </div>
        </div>-->
        
        
       <?php $i = 1; foreach ($contenedor as $val) : ?>     
        <div class="con-section-info clearfix" <?php echo ($i < 5)?"id=\"sc-info-".$i."\"":""; ?> >
        	<div class="section-var-img">
          	<img src="<?php echo base_url().$val->imagen_path;  ?>" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1><?php echo $val->titulo;  ?></h1>
                <p><?php echo $val->texto;  ?></p>
              </div>
            </div>
          </div>
        </div>
         <?php endforeach; ?>  
        
        
<!--        
        
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/lugar-img-2.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Purificación y desintoxicación</h1>
                <p>Naturaleza Real es la sede campestre de la Clínica Rangel Pereira, ubicada frente al embalse del Neusa a solo una hora de Bogotá, un lugar único rodeado de vegetación silvestre, cascadas, puentes colgantes y con más de un kilómetro de senderos ecológicos privados y con un montón de cosas que ya te iremos contando por el camino mientras terminamos los textos del site.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="assets/img/lugar-img-1.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Programas para todos</h1>
                <p>Naturaleza Real es la sede campestre de la Clínica Rangel Pereira, ubicada frente al embalse del Neusa a solo una hora de Bogotá, un lugar único rodeado de vegetación silvestre, cascadas, puentes colgantes y con más de un kilómetro de senderos ecológicos privados y con un montón de cosas que ya te iremos contando por el camino mientras terminamos los textos del site.</p>
              </div>
            </div>
          </div>
          <a href="#"><div class="con-tratamiento-bt"><div class="tratamiento-bt">Contáctanos</div></div></a>
        </div>
-->


        <div class="con-section-destacados clearfix">
        	<div class="pasos-tratamiento">
           
                    
<!--              <div class="item-tratamiento">
            	<a href="fit.php?seccion=3">
                <div class="con-icon-des-t">
                  <div class="img-des-t"><img src="assets/img/tratamiento-img-des-1.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2>FIT CAMP</h2>
                <p>Adelgaza, mejora tu salud o simplemente cuida tu ﬁgura comiendo lo que tanto te gusta, a domicilio.</p>
              </a>
            </div>-->
                    
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
                  <div class="img-des-t"><img src="assets/img/tratamiento-img-des-2.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2>GALERÍA DE IMÁGENES</h2>
              	<p>Reduce tu capacidad de comer hasta un 50%, sin cirugías, ni medicamentos, con hipnosis clínica.</p>
              </a>
            </div>
            <div class="item-tratamiento">
            	<a href="expertos.php">
                <div class="con-icon-des-t">
                  <div class="img-des-t"><img src="assets/img/tratamiento-img-des-3.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2>NUESTROS EXPERTOS</h2>
              	<p>Escápte una semana y dale unas vacaciones a tu cuerpo mientras adelgazas aceleradamente.</p>
              </a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </section>