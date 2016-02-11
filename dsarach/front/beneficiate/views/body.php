<section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>Beneficiate con nosotros</h1>
        <div class="con-ben-slider">
        	<ul class="slider-ben">
          	<?php
                foreach ($info as $value) {
                    echo
                    '
                        <li>
                            <div class="ben-info">
                            <h1>'.$value->titulo.'</h1>
                            <div class="ben-img"><img src="'.base_url().'uploads/thumbnail/'.$value->imagen.'" width="266" height="300" alt=""></div>
                            <p>'.nl2br($value->descripcion).'</p>
                          </div>
                        </li>
                        
                    ';
                }
                ?>
            
          </ul>
        </div>
      </div>
    </div>
  </section>