<section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>Quiénes somos</h1>
        <div class="con-info-gral">
        	<iframe src="<?php echo $info->video?>" width="940" height="393" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        <div class="con-info-gral">
          <div class="con-top-emp clearfix">
          	<div class="info-emp-big">
            	<h1><?php echo $info->titulo?></h1>
              <p><?php echo nl2br($info->descripcion)?></p>
            </div>
            <div class="top-emp-info"></div><div class="bottom-emp-info"></div>
            <div class="emp-logo"><img src="<?php echo base_url()?>uploads/thumbnail/<?php echo $info->imagen?>" width="228" height="128" alt=""></div>
            <div class="emp-slider">
            	<ul class="slider-emp">
                    <?php
                    foreach ($imagenes as $value) {
                        echo '<li><img src="'.base_url().'uploads/thumbnail/'.$value->imagen.'" width="248" height="223" alt=""></li>';
                    }
                    ?>
              	
              </ul>
            </div>
          </div>
          <div class="con-bottom-emp clearfix">
          	<div class="col-valor-info-1">
            	<h1>Misión</h1>
                <?php echo $info->mision?>
            </div>
            <div class="col-valor-info-2">
            	<h1>Visión</h1>
                <?php echo $info->vision?>
            </div>
            <div class="top-valores"></div><div class="bottom-valores"></div>
          </div>
        </div>
      </div>
    </div>
  </section>