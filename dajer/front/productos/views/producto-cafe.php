	<style type="text/css">#nav-bt1 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
	<!--img src="assets/img/body-bg.jpg" id="b-bg" alt=""-->
        <div id="b-bg" style="background:url(<?php echo base_url().$fondo_cafe->imagen_path; ?>);"></div><div id="b-pt"></div>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1>TIENDAS CAFÉ
            <a class="back-bt" href="<?php echo base_url()."productos/categorias"?>">« Ir a todos los productos</a>
          <a class="an-din bt-mas-pro" href="#an-pro">Ver más<br>cafeteras</a>
        </h1>
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
               <!--   
                <li><a href="">Tiendas café</a>
                	<ul class="dl-submenu">
                    <li><a href="productos/categorias/1">Ver todo</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                  </ul>
                </li>
                <li><a href="">Panadería</a>
                	<ul class="dl-submenu">
                    <li><a href="productos/categorias/2">Ver todo</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                  </ul>
                </li>
                <li><a href="">Cool</a>
                	<ul class="dl-submenu">
                    <li><a href="productos/categorias/2">Ver todo</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                  </ul>
                </li>
                <li><a href="">Gourmet</a>
                	<ul class="dl-submenu">
                    <li><a href="productos/categorias/3">Ver todo</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                  </ul>
                </li>
                <li><a href="">Automatización</a>
                	<ul class="dl-submenu">
                    <li><a href="productos/categorias/4">Ver todo</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                    <li><a href="producto-info.php">Producto</a></li>
                  </ul>
                </li> -->
              </ul>
            </div>
          </div>
        <!--Fin products nav device-->
        <!--Nav products desktop-->
        <div class="con-pro-nav-b con-pro-mg fl">
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
           <!-- 
            <li><a href="producto-categoria.php"><span></span>PANADERÍA</a></li>
            <li><a href="producto-categoria.php"><span></span>COOL</a></li>
            <li><a href="producto-categoria.php"><span></span>GOURMET</a></li>
            <li><a href="producto-categoria.php"><span></span>AUTOMATIZACIÓN</a></li> -->
          </ul>
        </div>
        <!--Fin nav products desktop-->
        <div class="con-pro con-pro-mg fr">
					<!--Slideshow cafeteras-->
        	<div class="con-slider-cafe">
          	<!--Fotos cafeteras-->
          <?php 
          
           foreach ($barner_cafe as $barner): ?>
                <div class="slide-cafe-img slide-cafe-img-<?php echo $barner->id; ?>" style="background:url(<?php echo base_url().$barner->imagen_path; ?>);">
            	<div class="slide-cafe-cp">
                    <h1><?php echo strtoupper($barner->titulo); ?></h1>
                    <p><?php echo strip_tags($barner->texto); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
                
            <!--    
            <div class="slide-cafe-img slide-cafe-img-2" style="background:url(assets/img/cafeteras/cafe-img-2.jpg);">
            	<div class="slide-cafe-cp">
              	<h1>AZUL SAN SIRO</h1>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
            <div class="slide-cafe-img slide-cafe-img-3" style="background:url(assets/img/cafeteras/cafe-img-3.jpg);">
            	<div class="slide-cafe-cp">
              	<h1>NEGRO</h1>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
            <div class="slide-cafe-img slide-cafe-img-4" style="background:url(assets/img/cafeteras/cafe-img-4.jpg);">
            	<div class="slide-cafe-cp">
              	<h1>ROJO FERRARI</h1>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
            <div class="slide-cafe-img slide-cafe-img-5" style="background:url(assets/img/cafeteras/cafe-img-5.jpg);">
            	<div class="slide-cafe-cp">
              	<h1>ROJO TORINO</h1>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
            <div class="slide-cafe-img slide-cafe-img-6" style="background:url(assets/img/cafeteras/cafe-img-6.jpg);">
            	<div class="slide-cafe-cp">
              	<h1>ROJO VERONA</h1>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
            <div class="slide-cafe-img slide-cafe-img-7" style="background:url(assets/img/cafeteras/cafe-img-7.jpg);">
            	<div class="slide-cafe-cp">
              	<h1>VERDE TOSCANA</h1>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
            <div class="slide-cafe-img slide-cafe-img-8" style="background:url(assets/img/cafeteras/cafe-img-8.jpg);">
            	<div class="slide-cafe-cp">
              	<h1>ROJO DA VINCI</h1>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
            <div class="slide-cafe-img slide-cafe-img-9" style="background:url(assets/img/cafeteras/cafe-img-1.jpg);">
            	<div class="slide-cafe-cp">
              	<h1>Lorem Ipsum</h1>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
            <div class="slide-cafe-img slide-cafe-img-10" style="background:url(assets/img/cafeteras/cafe-img-2.jpg);">
            	<div class="slide-cafe-cp">
              	<h1>Lorem Ipsum</h1>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div> -->
            <!--Fin fotos cafeteras-->
            <!--Colores cafeteras--> 

            <ul class="slider-colors">
             <?php 
                   $i = 1;   
                   foreach ($barner_cafe as $barner): ?>
                     <li class="<?php echo ($i==1)?"color-act":""; $i++;  ?>" style="background-color:<?php echo $barner->color; ?>" data-id="slide-cafe-img-<?php echo $barner->id; ?>"></li>
             <?php endforeach; ?>
            </ul>
            <!--Fin colores cafeteras-->
          </div>
        	<!--Fin slideshow cafeteras-->
          <div class="an-sp" id="an-pro"></div>
          <!--Paginador-->
          <div class="con-pag-pro fl">
            <?php if($num_pages > 1){ ?>
           <a href="<?php echo $ultimo; ?>">Último</a>
          <?php if($sig != false){ ?>
           <a href="<?php echo $sig; ?>">Sig.</a>
          <?php } ?>
           <p>...</p>
         <?php 
           $n_p = ($num_pages < 3)?$num_pages:3;   
           $s= round(($cur-1)/$n_p);
           $ini=($s*$n_p)+1;
           if($cur<$num_pages)
           {
             $f=$ini+$n_p-1;
           }else{
             $f=$n_p;
             $ini = $ini-1;
           } 
         for ($i = $f; $i >= $ini ; $i--){ ?>
          <a class="<?php echo($i == $cur)?"pag-act":""; ?>" href="<?php echo $base_url.$i; ?>"><?php echo $i; ?></a>
         <?php } ?>  
          <p>...</p>
           <?php if($ant != false){ ?>
           <a href="<?php echo $ant; ?>">Ant.</a>
          <?php } ?>
          <a href="<?php echo $primero; ?>">Primero</a> 
       <?php } ?>
          </div>
          <!--Fin paginador-->
          <!--Producto-->
          <?php foreach ($productos as $sub_cat) : ?>  
          <div class="item-pro fl">
            
              <div class="front">
              <div class="pad">
                  <div class="pro-img" style="background:url(<?php echo base_url().$sub_cat->get_galeria()->imagen_path; ?>);"></div>
              </div>
            </div>
            <div class="back">
              <div class="pad">
                  <a href="<?php echo base_url()."productos/info/".$sub_cat->id; ?>">
                	<h1><?php echo $sub_cat->titulo; ?></h1>
              		<p><?php echo $sub_cat->texto; ?></p>
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
                <div class="pro-img" style="background:url(assets/img/producto-img-2.jpg);"></div>
              </div>
            </div>
            <div class="back">
              <div class="pad">
              	<a href="producto-info.php">
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
              	<a href="producto-info.php">
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
              	<a href="producto-info.php">
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
              	<a href="producto-info.php">
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
              	<a href="producto-info.php">
                	<h1>Lorem ipsum</h1>
              		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
              		<span>Ver más</span>
              	</a>
              </div>
            </div>
          </div> -->
          <!--Paginador-->
          <div class="con-pag-pro fl">
            <?php if($num_pages > 1){ ?>
           <a href="<?php echo $ultimo; ?>">Último</a>
          <?php if($sig != false){ ?>
           <a href="<?php echo $sig; ?>">Sig.</a>
          <?php } ?>
           <p>...</p>
         <?php 
           $n_p = ($num_pages < 3)?$num_pages:3;   
           $s= round(($cur-1)/$n_p);
           $ini=($s*$n_p)+1;
           if($cur<$num_pages)
           {
             $f=$ini+$n_p-1;
           }else{
             $f=$n_p;
             $ini = $ini-1;
           } 
         for ($i = $f; $i >= $ini ; $i--){ ?>
          <a class="<?php echo($i == $cur)?"pag-act":""; ?>" href="<?php echo $base_url.$i; ?>"><?php echo $i; ?></a>
         <?php } ?>  
          <p>...</p>
           <?php if($ant != false){ ?>
           <a href="<?php echo $ant; ?>">Ant.</a>
          <?php } ?>
          <a href="<?php echo $primero; ?>">Primero</a> 
       <?php } ?>
          </div>
          <!--Fin paginador-->
      	</div>
      </div>
    </div>
  </section>
