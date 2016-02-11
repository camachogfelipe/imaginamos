  <section>
    <div class="info">
      <div class="mg-info clearfix">
        <div class="con-section-main con-section-clr clearfix">
          <h1>CONTÁCTENOS</h1>
          <p><?php echo $contactenos->texto; ?></p>
        	<form action="#" class="grl-form" method="post">
        		<div class="con-col-info">
            	<div class="col-info">
              	<fieldset>
                  <div class="con-labels-form">
                  	<label>Nombre:</label>
                  	<div class="con-input-bg"><input value="" class="validate[required]"></div>
                  </div>
                  <div class="con-labels-form">
                  	<label>Teléfono:</label>
                  	<div class="con-input-bg"><input value="" class="validate[required, custom[phone]]"></div>
                  </div>
                  <div class="con-labels-form">
                  	<label>Correo electrónico:</label>
                  	<div class="con-input-bg"><input value="" class="validate[required, custom[email]]"></div>
                  </div>
                  <div class="con-labels-form">
                  	<label>Comentarios:</label>
                  	<textarea class="validate[required]"></textarea>
                  </div>
                </fieldset>
                <div class="con-con-bt"><input class="tratamiento-bt" value="Enviar" type="submit"></div>
              </div>
            </div>
            <div class="con-col-info">
            	<div class="col-con-info">
                    <img src="<?php echo base_url().$contactenos->imagen_path; ?>" height="332" width="418" alt="">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>