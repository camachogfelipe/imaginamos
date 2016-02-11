 <div class="con-main-sub-nav clearfix">
  	<div class="mg-main-sub-nav">
      <ul>
        <li><a href="corporal.php?seccion=4">Diseño Corporal</a></li>
        <li id="sub-act"><a href="faciales.php?seccion=4">Tratamientos Faciales</a></li>
        <!--<li><a href="cirugia.php?seccion=4">Cirugía Estética</a></li>-->
      </ul>
    </div>
  </div>
  <section>
    <div class="info">
      <div class="mg-info clearfix">
        <div class="con-section-main con-section-main-s clearfix">
        	<div class="main-head-bg"><img src="<?php echo base_url().$barner->imagen_path; ?>"></div>
          <div class="banda-main-img">
          	<div class="banda-main-img-img">
            		<img src="<?php echo base_url().$barner->imagen1_path; ?>" height="392" width="940" alt="">
            	<a href="#sc-info-1" class="an-din-li"><div class="faciales-img-lk1"></div></a>
            	<a href="#sc-info-2" class="an-din-li"><div class="faciales-img-lk2"></div></a>
            	<a href="#sc-info-3" class="an-din-li"><div class="faciales-img-lk3"></div></a>
            	<a href="#sc-info-4" class="an-din-li"><div class="faciales-img-lk4"></div></a>
            </div>
          </div>
          <!--<div class="estetica-main-img">
          	<img src="assets/img/faciales-main-img.png" width="610" height="545" alt="">
            <a href="#sc-info-1" class="an-din-li"><div class="faciales-img-lk1"></div></a>
            <a href="#sc-info-2" class="an-din-li"><div class="faciales-img-lk2"></div></a>
            <a href="#sc-info-3" class="an-din-li"><div class="faciales-img-lk3"></div></a>
            <a href="#sc-info-4" class="an-din-li"><div class="faciales-img-lk4"></div></a>
          </div>
          <div class="form-fx">
          	<div class="form-fx-head">
            	<div class="form-fx-head-tx">
              	<h3>¿Botox? No, gracias</h3>
              	<h1>Plasma</h1>
                <h2>DE 4ta. GENERACIÓN</h2>
                <p>Rejuvenecimiento Natural</p>
              </div>
            	<div class="form-fx-head-img"><img src="assets/img/form-fx-img-2.png" width="100" alt=""></div>
            </div>
            <div class="form-fx-info">
            	<h1>Inscríbete para más información</h1>
              <form class="fx-form" action="#" method="get">
              	<fieldset>
                	<label>Nombre</label>
                  <div class="con-input-bg"><input value="" class="validate[required]"></div>
                </fieldset>
                <fieldset>
                	<label>Apellido</label>
                  <div class="con-input-bg"><input value="" class="validate[required]"></div>
                </fieldset>
                <fieldset>
                	<label>Teléfono</label>
                  <div class="con-input-bg"><input value="" class="validate[required, custom[phone]]"></div>
                </fieldset>
                <fieldset>
                	<label>Email</label>
                  <div class="con-input-bg"><input value="" class="validate[required, custom[email]]"></div>
                </fieldset>
                <fieldset>
                	<label>Mensaje</label>
                  <textarea></textarea>
                </fieldset>
                <p>Diligencia todos los campos y una consultora te contactará para ampliar la información</p>
                <input type="submit" class="fx-submit" value="Enviar">
              </form>
            </div>
          </div>-->
        </div>

        <div class="con-section-head">
        	<h1><?php echo $text_page->titulo; ?></h1>
        </div> 
          

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
          
<!--        <div class="con-section-info clearfix" id="sc-info-4">
        	<div class="section-var-img">
          	<img src="assets/img/estetica-item-img.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Lifting no quirúrgico</h1>
                <p>¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos que son las verdaderas causas que disparan el sobrepeso o impiden adelgazar. ¿Cuáles son los tuyos?</p>
              </div>
            </div>
          </div>
        </div>
        <div class="con-section-info clearfix" id="sc-info-1">
        	<div class="section-var-img">
          	<img src="assets/img/estetica-item-img.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Arrugas y líneas de expresión</h1>
                <p>¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos que son las verdaderas causas que disparan el sobrepeso o impiden adelgazar. ¿Cuáles son los tuyos?</p>
              </div>
            </div>
          </div>
        </div>
        <div class="con-section-info clearfix" id="sc-info-3">
        	<div class="section-var-img">
          	<img src="assets/img/estetica-item-img.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>Manchas y acné</h1>
                <p>¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos que son las verdaderas causas que disparan el sobrepeso o impiden adelgazar. ¿Cuáles son los tuyos?</p>
              </div>
            </div>
          </div>
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
                  <div class="img-des-t"><img src="assets/img/tratamiento-img-des-2.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2>CERO FLACIDEZ</h2>
              	<p>Reduce tu capacidad de comer hasta un 50%, sin cirugías, ni medicamentos, con hipnosis clínica.</p>
              </a>
            </div>
            <div class="item-tratamiento">
            	<a href="expertos.php">
                <div class="con-icon-des-t">
                  <div class="img-des-t"><img src="assets/img/tratamiento-img-des-3.jpg" width="280" height="152" alt=""></div><div class="vn-des-t"></div><div class="icon-des-t"></div>
                </div>
                <h2>PLASMA</h2>
              	<p>Escápte una semana y dale unas vacaciones a tu cuerpo mientras adelgazas aceleradamente.</p>
              </a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </section>
  