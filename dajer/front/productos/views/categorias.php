<style type="text/css">#nav-bt1 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1>Productos</h1>
        <!--Products nav device-->
        	<div class="pro-nav cfx">
            <div id="dl-menu-pro" class="dl-menuwrapper">
              <button class="dl-trigger fl"></button>
              <h1>Ver productos</h1>
              <ul class="dl-menu">
              	 <?php foreach ($menu_cat as $m_cat) : ?>  
              <li>
                  <a class="<?php echo ($current_cat == $m_cat->id)?"cat-act":""; ?>" href=""><span></span><?php echo strtoupper($m_cat->titulo); ?></a>
              <?php if($current_cat == $m_cat->id): ?>
                  <ul class="dl-submenu">
                    <?php 
                          foreach ($m_cat->get_subcategorias() as $s_cat) : ?>  
              	       <li><a class="<?php echo ($current_s_cat == $s_cat->id )?"sub-cat-act":""; ?>" href="<?php echo base_url()."productos/list_productos/".$s_cat->id ?>"><?php echo $s_cat->titulo ?><span>(<?php echo $s_cat->count_productos()->result_count(); ?>)</span></a></li>
                    <?php endforeach; ?>  
                  </ul>
              <?php endif; ?>      
            </li>
            <?php endforeach; ?> 
              </ul>
            </div>
          </div>
        <!--Fin products nav device-->
        <!--Paginador-->
        <div class="con-pag-pro fl">
        	
        </div>
        <!--Fin paginador-->
        <div class="con-pro-nav-b fl">
        	<ul class="pro-nav-b">
          	<?php foreach ($menu_cat as $m_cat) : ?>  
              <li>
                  <a class="<?php echo ($current_cat == $m_cat->id)?"cat-act":""; ?>" href="<?php echo base_url()."productos/subcategorias/".$m_cat->id ?>"><span></span><?php echo strtoupper($m_cat->titulo); ?></a>
              <?php if($current_cat == $m_cat->id): ?>
                  <ul class="pro-subnav-b">
                    <?php 
                          foreach ($m_cat->get_subcategorias() as $s_cat) : ?>  
              	       <li><a class="<?php echo ($current_s_cat == $s_cat->id )?"sub-cat-act":""; ?>" href="<?php echo base_url()."productos/list_productos/".$s_cat->id ?>"><?php echo $s_cat->titulo ?><span>(<?php echo $s_cat->count_productos()->result_count(); ?>)</span></a></li>
                    <?php endforeach; ?>  
                  </ul>
              <?php endif; ?>      
            </li>
            <?php endforeach; ?>  
          </ul>
        </div>
        <div class="con-pro fr">
          <!--Producto-->
          <?php foreach ($menu_cat as $cat) : ?>  
          <div class="item-pro fl">
            
              <div class="front">
              <div class="pad">
                  <div class="pro-img" style="background:url(<?php echo base_url().$cat->imagen_path; ?>);"></div>
              </div>
            </div>
            <div class="back">
              <div class="pad">
                  <a href="<?php echo base_url()."productos/categorias/".$cat->id; ?>">
                	<h1><?php echo $cat->titulo; ?></h1>
              		<p><?php echo $cat->texto; ?></p>
              		<span>Ver más</span>
              	</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>  
          
          <!--
          <div class="item-pro fl">
            <div class="front">
              <div class="pad">
                <div class="pro-img" style="background:url(assets/img/producto-img-1.jpg);"></div>
              </div>
            </div>
            <div class="back">
              <div class="pad">
              	<a href="producto-categoria.php">
                	<h1>Lorem ipsum Lorem ipsum Lorem ipsum</h1>
              		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
              		<span>Ver más</span>
              	</a>
              </div>
            </div>
          </div>
      
          <div class="item-pro fl">
            <div class="front">
              <div class="pad">
                <div class="pro-img" style="background:url(assets/img/producto-img-2.jpg);"></div>
              </div>
            </div>
            <div class="back">
              <div class="pad">
              	<a href="producto-categoria.php">
                	<h1>Lorem ipsum</h1>
              		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
              		<span>Ver más</span>
              	</a>
              </div>
            </div>
          </div>

          <div class="item-pro fl">
            <div class="front">
              <div class="pad">
                <div class="pro-img" style="background:url(assets/img/producto-img-1.jpg);"></div>
              </div>
            </div>
            <div class="back">
              <div class="pad">
              	<a href="producto-categoria.php">
                	<h1>Lorem ipsum</h1>
              		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
              		<span>Ver más</span>
              	</a>
              </div>
            </div>
          </div>
        
          <div class="item-pro fl">
            <div class="front">
              <div class="pad">
                <div class="pro-img" style="background:url(assets/img/producto-img-2.jpg);"></div>
              </div>
            </div>
            <div class="back">
              <div class="pad">
              	<a href="producto-categoria.php">
                	<h1>Lorem ipsum</h1>
              		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
              		<span>Ver más</span>
              	</a>
              </div>
            </div>
          </div>
     
          <div class="item-pro fl">
            <div class="front">
              <div class="pad">
                <div class="pro-img" style="background:url(assets/img/producto-img-1.jpg);"></div>
              </div>
            </div>
            <div class="back">
              <div class="pad">
              	<a href="producto-categoria.php">
                	<h1>Lorem ipsum</h1>
              		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
              		<span>Ver más</span>
              	</a>
              </div>
            </div>
          </div>
   
          <div class="item-pro fl">
            <div class="front">
              <div class="pad">
                <div class="pro-img" style="background:url(assets/img/producto-img-2.jpg);"></div>
              </div>
            </div>
            <div class="back">
              <div class="pad">
              	<a href="producto-categoria.php">
                	<h1>Lorem ipsum</h1>
              		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
              		<span>Ver más</span>
              	</a>
              </div>
            </div>
          </div> -->
          <!--Paginador-->
          <div class="con-pag-pro fl">
         
          </div>
          <!--Fin paginador-->
      	</div>
      </div>
    </div>
  </section>