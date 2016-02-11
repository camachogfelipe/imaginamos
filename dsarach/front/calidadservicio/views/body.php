<section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>Calidad de nuestros servicios</h1>
        <div class="con-calidad-slider">
        	<ul class="slider-cal">
                    <?php foreach ($imagenes as $value) {

                        echo '<li><img src="'.base_url().'uploads/thumbnail/'.$value->imagen.'" width="450" height="400" alt=""></li>';
                        echo '<li><img src="'.base_url().'uploads/thumbnail/'.$value->imagen2.'" width="450" height="400" alt=""></li>';
                    }?>
          	
            </ul>
            <ul id="cal-pager">
              <?php
							$i = 0;
              foreach ($imagenes as $value) {

                        echo '<li><a data-slide-index="'.$i.'" href="" id="c'.$i.'"><div></div></a></li>';
												$i++;
              }?>
            <div class="track-pager-cal"></div>
          </ul>
        </div>
        <div class="calidad-info">
        	<p><?php echo $texto->descripcion?></p>
        </div>
        <div class="con-calidad-des clearfix">
            <?php
            foreach ($destacados as $value) {
                echo '
                    <div class="item-cal">
                            <div class="item-cal-info">
                          <div class="item-url"><a href="'.$value->link.'" target="_blank">'.$value->link.'</a></div>
                          <h1>'.$value->titulo.'</h1>
                          <p>'.$value->descripcion.'</p>
                            </div>
                        <div class="top-cal-info"></div><div class="bottom-cal-info"></div>
                      </div>
                ';
            }
            ?>
        
        </div>
      </div>
    </div>
  </section>