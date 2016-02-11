<style type="text/css">#nav-bt2 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1>Catálogos</h1>
        <ul class="con-items-cat-b">
        <?php
            $i = 1; 
            foreach ($categorias as $cat): ?>	
            <li>
             <a href="<?php echo base_url(); ?>catalogos/info/<?php echo $cat->id ?>" >
              <span class="cat-icon-<?php echo $i; $i++; ?>"></span>
              <div class="info-item-cat">
              	<h1><?php
                    $zona = substr($cat->titulo, 0, 1);
                    echo 'Zona - '.$zona; 
                    ?></h1>
       		<h2><?php echo $cat->titulo ?></h2>
              </div>
            </a>
           </li>
        <?php endforeach; ?>   
           
       <!--   <li>
          	<a href="<?php echo base_url(); ?>catalogos/info/2">
            	<span class="cat-icon-2"></span>
              <div class="info-item-cat">
              	<h1>Zona - T</h1>
       				 	<h2>Tiendas Café</h2>
              </div>
            </a>
          </li>
          <li>
          	<a href="<?php echo base_url(); ?>catalogos/info/3">
            	<span class="cat-icon-3"></span>
              <div class="info-item-cat">
              	<h1>Zona - C</h1>
        				<h2>Cool</h2>
              </div>
            </a>
          </li>
          <li>
          	<a href="<?php echo base_url(); ?>catalogos/info/4">
            	<span class="cat-icon-4"></span>
              <div class="info-item-cat">
              	<h1>Zona - G</h1>
        				<h2>Gourmet</h2>
              </div>
            </a>
          </li>
          <li>
          	<a href="<?php echo base_url(); ?>catalogos/info/5">
            	<span class="cat-icon-5"></span>
              <div class="info-item-cat">
              	<h1>Zona - A</h1>
        				<h2>Automatización</h2>
              </div>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
  </section>