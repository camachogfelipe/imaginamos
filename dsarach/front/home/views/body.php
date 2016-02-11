<!--<style type="text/css">#loader, #progress {display:none;}</style>-->
 <!--<div id="loader-home">
    <div id="progress-home">
      <div id="flashContent">
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1200" height="1200" id="intro" align="middle">
          <param name="movie" value="<?php /*?><?php echo base_url()?><?php */?>intro.swf" />
          <param name="quality" value="high" />
          <param name="bgcolor" value="#ffffff" />
          <param name="play" value="true" />
          <param name="loop" value="true" />
          <param name="wmode" value="transparent" />
          <param name="scale" value="showall" />
          <param name="menu" value="true" />
          <param name="devicefont" value="false" />
          <param name="salign" value="" />
          <param name="allowScriptAccess" value="sameDomain" />-->
          <!--[if !IE]>-->
          <!--<object type="application/x-shockwave-flash" data="intro.swf" width="1200" height="1200">
            <param name="movie" value="intro.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#ffffff" />
            <param name="play" value="true" />
            <param name="loop" value="true" />
            <param name="wmode" value="transparent" />
            <param name="scale" value="showall" />
            <param name="menu" value="true" />
            <param name="devicefont" value="false" />
            <param name="salign" value="" />
            <param name="allowScriptAccess" value="sameDomain" />-->
          <!--<![endif]-->
            <!--<a href="http://www.adobe.com/go/getflash">
              <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" />
            </a>-->
          <!--[if !IE]>-->
          <!--</object>-->
          <!--<![endif]-->
        <!--</object>
      </div>
    </div>
  </div>-->
  <section>
    <div class="con-section con-section-slider">
      <div class="mg-section clearfix">
        <div class="con-slider-home">
          <div id="slider-home">
          	<?php foreach ($banner as $i) {
                  echo '<img src="'.base_url().'uploads/thumbnail/'.$i->imagen.'" alt="">';
                } ?>
          </div>
          <div class="slide-sw-1"></div>
          <div class="slide-sw-2"></div>
          <div class="slide-sw-3"></div>
          <ul id="slider-descriptions">
            <?php foreach ($banner as $i) {
            echo '
            <li class="desc current">
              <a href="#">
                <h1>'.$i->titulo.'</h1>
                <h2>'.$i->subtitulo.'</h2>
                <p>'.nl2br($i->descripcion).'<span></span></p>
              </a>
            </li>';
            } ?>
            
          </ul>
        </div>
      </div>
      <div class="slider-sh"></div>
    </div>
  </section>
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <div class="con-dts-home">
        	<div class="dts-home clearfix">
          	<?php                     
                foreach ($destacado as $d) {
                    if ($d->seccion == "¿Qué hacemos?")
                        { 
                            $seccion = "que"; 
                        }
                    if ($d->seccion == "¿Cómo lo hacemos?")
                        { 
                            $seccion = "como"; 
                        }
                    if ($d->seccion == "Aplicaciones")
                        { 
                            $seccion = "aplicaciones"; 
                        }
                    if ($d->seccion == "Calidad")
                        { 
                            $seccion = "calidad"; 
                        }
                    if ($d->seccion == "Beneficiate")
                        { 
                            $seccion = "beneficios"; 
                        }    
                    echo 
                    '
                    <div class="item-dts-home">
                        <div class="item-dts-img"><img src="'.base_url().'uploads/thumbnail/'.$d->imagen.'" width="468" height="216" alt=""></div>
                        <div class="item-dts-tx"><h1>'.$d->titulo.'</h1></div>
                        <a href="'.  base_url().$seccion.'"><div class="item-dts-vn">Ver más información<span></span></div></a>
                    </div>
                    ';
                }?>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <div class="con-video-home">
        	<div class="icon-video"></div>
        	<h1>
          	<?php 
                echo $multimedia->titulo?><br><?php echo $multimedia->subtitulo?>
          	<a href="<?php echo base_url().$vermas?>"><div class="bt-video">MÁS INFORMACIÓN</div></a>
          </h1>
          <div class="info-video">
          	<h1><?php echo $multimedia->subtitulo2?></h1>
            <p><?php echo $multimedia->descripcion?></p>
          </div>
        	<iframe src="<?php echo $multimedia->video?>" width="940" height="393" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
      </div>
    </div>
  </section>