<section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <div class="con-info-dn">
          <div class="nav-block">
          	<h1>¿Cómo lo hacemos?</h1>
            <ul class="nav-bar">
            	<div class="scroll-wrap">
                <?php foreach ($info as $i) {
                        
                        echo '<li><a href="'.base_url().'como/info/'.$i->id.'/'.$i->seccion.'">'.$i->seccion.'</a></li>';
                    }
                 ?>
              </div>
            </ul>
          </div>
          <div class="con-info-b"></div>
        </div>
      </div>
    </div>
  </section>