 
  <section>
    <div class="info">
      <div class="mg-info clearfix">
        <div class="con-section-main con-section-main-s clearfix">
          <div class="doctora-main-img"><img src="<?php echo base_url().$barner->imagen_path;  ?>" width="400" height="600" alt=""></div>
          <div class="con-info-doctora">
          	<div class="doctora-info">
            	<h1><?php echo $barner->titulo;  ?></h1>
              <div class="doctora-info-main">
              	<p><?php echo $barner->descripcion;  ?></p>
              </div>
            </div>
            <div class="scroll-wrap">
              <h2><?php echo $barner->titulo_texto;  ?></h2>
              <p><?php echo $barner->texto;  ?></p>
            </div>
          </div>
        </div>
        <div class="con-section-head">
        	<h1 class="t-small"><?php echo $barner->titulo_link;  ?></h1>
          <a href="<?php echo $barner->link;  ?>" target="_blank"><h1 class="t-small">¡Haz clic aqui para ir al canal!</h1></a>
        </div><div class="con-section-info con-section-info-f clearfix"></div>
        
        
<!--        <div class="con-section-info clearfix">
        	<div class="section-var-img">
          	<img src="img/doctora-img-1.jpg" width="380" height="220" alt="">
          </div>
          <div class="section-var-info">
          	<div class="scroll-wrap">
            	<div class="info-paso no-numb">
                <h1>La Clínica</h1>
                <p>¿Sientes que hay algo profundo que te impide llegar al peso que quieres, pero no sabes qué es?. Nosotros identificamos que en todo paciente con sobrepeso existen por lo menos 7 bloqueos neuro endocrinos que son las verdaderas causas que disparan el sobrepeso o impiden adelgazar.</p>
              </div>
            </div>
          </div>
        </div>-->
        
          <?php $i = 1; foreach ($contenedor as $val) : ?>    
        <div class="con-section-info clearfix">
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
      </div>
    </div>
  </section>