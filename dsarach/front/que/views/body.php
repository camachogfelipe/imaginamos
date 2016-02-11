 <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <div class="con-info-dn">
          <div class="nav-block">
          	<h1>¿Qué hacemos?</h1>
            <ul class="nav-bar">
              <?php foreach ($info as $i) {

                    echo '<li><a href="'.base_url().'que/info/'.$i->id.'">'.$i->seccion.'</a></li>';
                }?>
                
            </ul>
          </div>
          <div class="con-info-b"></div>
        </div>
      </div>
    </div>
  </section>