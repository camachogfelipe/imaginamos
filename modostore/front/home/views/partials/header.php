    <header>
      <div class="con-header">
        <div class="con-head-src">
        	<div class="mg-head-src">
                    <form action="<?php echo base_url()."search" ?>" class="head-src fl" method="post">
            	<input class="fl" name="q" placeholder="Buscador" type="text">
              <input class="head-src-submit fl tr" type="submit" value="">
            </form>
            <div class="head-como"><a href="<?php echo base_url(); ?>info/index/6">¿Cómo comprar?</a><span class="tr"></span></div>
          	<a class="carro-bt fr tr" href="<?php echo base_url(); ?>carrito">
            	<span id="items-carro" class=" total-carro fl"> 
                <?php 
                   echo $this->cart->total_items();  
                ?>
                </span>Carrito<span class="icon-carro fr"></span>
            </a>
          </div>
        </div>
        <div class="mg-header cfx">
        	<div class="header-logo fl"><a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets/img/header-logo.png" height="100" width="220" alt=""></a></div>
          <nav>
          	<ul class="con-nav fr">
              <li class="tr"><a class="tr" href="<?php echo base_url(); ?>contactenos" id="nav-act-5"><span class="nav-br op tr"></span><div class="con-nav-bt"><div class="nav-bt">Contáctenos</div></div></a></li>
              <li class="tr"><a class="modals-act tr" href="#modal-news" id="nav-act-4"><span class="nav-br op tr"></span><div class="con-nav-bt"><div class="nav-bt">Newsletter</div></div></a></li>
              <li class="nav-sub-bt tr">
              	<a class="tr" href="<?php echo base_url(); ?>productos" id="nav-act-3"><span class="nav-br op tr"></span><div class="con-nav-bt"><div class="nav-bt">Nuestros<br>productos</div></div></a>
                <div class="con-sub-nav">
                  <ul class="mg-sub-nav">
                  	<!--Sub-nav col-->
                  	<?php $i = 1; foreach ($categorias as $categoria): ?>
                        <li>
                    	<div class="sub-nav-col">
                      	<h1><span class="sub-icon-<?php echo $i++; ?>"></span><?php echo $categoria->titulo; ?></h1>
                        <div class="con-sub-nav-info">
                        	<div class="scroll-wrap">
                          	<ul>
                            <?php 
                             foreach ($categoria->get_subcategorias() as $subcategoria): ?>
                                    <li><a class="tr" href="<?php echo base_url()."productos/productos_catgoria/".$subcategoria->id; ?>"><span></span><?php echo $subcategoria->titulo; ?></a></li>
                            <?php endforeach; ?>
                            <!--  <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>  -->
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                    <!--Sub-nav col-->
                 <!-- 	<li>
                    	<div class="sub-nav-col">
                      	<h1><span class="sub-icon-2"></span>Cajas y transmisión</h1>
                        <div class="con-sub-nav-info">
                        	<div class="scroll-wrap">
                          	<ul>
                          		<li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
              
                  	<li>
                    	<div class="sub-nav-col">
                      	<h1><span class="sub-icon-3"></span>Suspensión y frenos</h1>
                        <div class="con-sub-nav-info">
                        	<div class="scroll-wrap">
                          	<ul>
                          		<li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
            
                  	<li>
                    	<div class="sub-nav-col">
                      	<h1><span class="sub-icon-4"></span>Carrocería y accesorios</h1>
                        <div class="con-sub-nav-info">
                        	<div class="scroll-wrap">
                          	<ul>
                          		<li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
          
                  	<li>
                    	<div class="sub-nav-col">
                      	<h1><span class="sub-icon-5"></span>Eléctricos e inyección</h1>
                        <div class="con-sub-nav-info">
                        	<div class="scroll-wrap">
                          	<ul>
                          		<li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                              <li><a class="tr" href="#"><span></span>Lorem adpricing</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li> -->
                  </ul>
                </div>
              </li>
              <li class="tr"><a class="tr" href="<?php echo base_url(); ?>recomendados" id="nav-act-2"><span class="nav-br op tr"></span><div class="con-nav-bt"><div class="nav-bt">Productos<br>recomendados</div></div></a></li>
              <li class="tr"><a class="tr" href="<?php echo base_url(); ?>empresas" id="nav-act-1"><span class="nav-br op tr"></span><div class="con-nav-bt"><div class="nav-bt">Nuestra<br>compañia</div></div></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>