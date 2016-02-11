<section>
  	<div class="con-slider">
    	<div class="mg-slider cfx">
        <div id="slider-home" class="royalSlider rsMinW">
        	<!--Slide-->
                
                
          <?php foreach ($barner as $obj) : ?>
             
               <!--Slide-->
          <div class="rsContent <?php echo isset($obj['l'])?$obj['l']->color:""; ?>" data-rsDelay="5000">
            <div class="bContainer">
              <span class="rsABlock rsNoDrag" data-move-effect="left">
              	<div class="slide-t1">
                    <div class="slide-ta-img"><img src="<?php echo  isset($obj['b1'])?base_url().$obj['b1']->imagen_path:"";  ?>" width="620" height="444" alt=""></div>
                  <div class="slide-tb-info">
                      
                      <h1><?php echo isset($obj["b1"])?$obj["b1"]->titulo:""; ?></h1>
                    <h2><?php echo isset($obj["l"])?$obj['l']->titulo:""; ?></h2>
                    <h3><?php echo isset($obj["b1"])?strtoupper($obj["b1"]->text_color1)." ":""; ?><span><?php echo isset($obj["b1"])?strtoupper($obj["b1"]->text_color2):""; ?></span></h3>
                    <a href="<?php echo isset($obj["b1"])?strtoupper($obj["b1"]->url):""; ?>"><span class="slide-bt"></span></a>
                  </div>
                </div>
              </span>
               <?php if((isset($obj["b2"][0]) and isset($obj["b2"]))):  ?>    
              <span class="rsABlock rsNoDrag" data-move-effect="right">
              	<div class="slide-t2">
                	<div class="slide-ta-img"><img src="<?php echo (isset($obj["b2"][0]) and isset($obj["b2"]))?base_url().$obj["b2"][0]->imagen_path:""; ?>" width="160" height="222" alt=""></div>
                  <a href="<?php echo (isset($obj["b2"][0]) and isset($obj["b2"]))?$obj["b2"][0]->url:""; ?>">
                  	<div class="slide-ta-info">
                    	<h1><?php echo (isset($obj["b2"][0]) and isset($obj["b2"]))?$obj["b2"][0]->titulo:""; ?></h1>
                      <p><?php echo (isset($obj["b2"][0]) and isset($obj["b2"])) ?$obj["b2"][0]->subtitulo:""; ?></p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>
                <?php endif; ?>  
               <?php if((isset($obj["b2"][1]) and isset($obj["b2"]))):  ?>    
              <span class="rsABlock rsNoDrag" data-move-effect="right">
              	<div class="slide-t3">
                	<div class="slide-ta-img"><img src="<?php echo (isset($obj["b2"][1]) and isset($obj["b2"]))?base_url().$obj["b2"][1]->imagen_path:""; ?>" width="160" height="222" alt=""></div>
                  <a href="<?php echo (isset($obj["b2"][1]) and isset($obj["b2"]))?$obj["b2"][1]->url:""; ?>">
                  	<div class="slide-ta-info">
                    	<h1><?php echo (isset($obj["b2"][1]) and isset($obj["b2"]))?$obj["b2"][1]->titulo:""; ?></h1>
                      <p><?php echo (isset($obj["b2"][1]) and isset($obj["b2"])) ?$obj["b2"][1]->subtitulo:""; ?></p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>
                <?php endif; ?>  
              <span class="rsABlock rsNoDrag" data-move-effect="right">
              	<div class="slide-t4">
                	<div class="slide-ta-img"><img src="<?php echo isset($obj["b3"])?base_url().$obj["b3"]->imagen_path:""; ?>" width="320" height="222" alt=""></div>
                  <a href="<?php echo isset($obj["b3"])?$obj["b3"]->url:""; ?>">
                  	<div class="slide-ta-info">
                    	<h1><?php echo isset($obj["b3"])?$obj["b3"]->titulo:""; ?></h1>
                      <p><?php echo isset($obj["b3"])?$obj["b3"]->subtitulo:""; ?></p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>   
               </div>
          </div>
          <!--Slide-->
        <!--             
              <?php endforeach;?>
         
          <div class="rsContent slide-color-3" data-rsDelay="5000">
            <div class="bContainer">
              <span class="rsABlock rsNoDrag" data-move-effect="left">
              	<div class="slide-t1">
                	<div class="slide-ta-img"><img src="" width="620" height="444" alt=""></div>
                  <div class="slide-tb-info">
                  	<h1>2 HYTERA</h1>
                    <h2>LÍNEA DE COMUNICACIÓN</h2>
                    <h3>LUCTUS ET <span>ULTRICES</span></h3>
                    <a href="#"><span class="slide-bt"></span></a>
                  </div>
                </div>
              </span>
              <span class="rsABlock rsNoDrag" data-move-effect="left">
              	<div class="slide-t2">
                	<div class="slide-ta-img"><img src=""></div>
                  <a href="#">
                  	<div class="slide-ta-info">
                    	<h1>ADIPISCING</h1>
                      <p>Select design work for</p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>
              <span class="rsABlock rsNoDrag" data-move-effect="right">
              	<div class="slide-t3">
                	<div class="slide-ta-img"><img src="" width="160" height="222" alt=""></div>
                  <a href="#">
                  	<div class="slide-ta-info">
                    	<h1>COMMODO</h1>
                      <p>Select design work for</p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>
              <span class="rsABlock rsNoDrag" data-move-effect="right">
              	<div class="slide-t4">
                	<div class="slide-ta-img"><img src="" width="320" height="222" alt=""></div>
                  <a href="#">
                  	<div class="slide-ta-info">
                    	<h1>CONTROLES DE ACCESO</h1>
                      <p>Select design work for delivery in a iful, to clients</p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>
            </div>
          </div>
       
          <div class="rsContent slide-color-4" data-rsDelay="5000">
            <div class="bContainer">
              <span class="rsABlock rsNoDrag" data-move-effect="left">
              	<div class="slide-t1">
                	<div class="slide-ta-img"><img src="" width="620" height="444" alt=""></div>
                  <div class="slide-tb-info">
                  	<h1>2 HYTERA</h1>
                    <h2>LÍNEA DE COMUNICACIÓN</h2>
                    <h3>LUCTUS ET <span>ULTRICES</span></h3>
                    <a href="#"><span class="slide-bt"></span></a>
                  </div>
                </div>
              </span>
              <span class="rsABlock rsNoDrag" data-move-effect="left">
              	<div class="slide-t2">
                	<div class="slide-ta-img"><img src="" width="160" height="222" alt=""></div>
                  <a href="#">
                  	<div class="slide-ta-info">
                    	<h1>ADIPISCING</h1>
                      <p>Select design work for</p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>
              <span class="rsABlock rsNoDrag" data-move-effect="right">
              	<div class="slide-t3">
                	<div class="slide-ta-img"><img src="" width="160" height="222" alt=""></div>
                  <a href="#">
                  	<div class="slide-ta-info">
                    	<h1>COMMODO</h1>
                      <p>Select design work for</p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>
              <span class="rsABlock rsNoDrag" data-move-effect="right">
              	<div class="slide-t4">
                	<div class="slide-ta-img"><img src="" width="320" height="222" alt=""></div>
                  <a href="#">
                  	<div class="slide-ta-info">
                    	<h1>CONTROLES DE ACCESO</h1>
                      <p>Select design work for delivery in a iful, to clients</p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>
            </div>
          </div>
      
          <div class="rsContent slide-color-5" data-rsDelay="5000">
            <div class="bContainer">
              <span class="rsABlock rsNoDrag" data-move-effect="left">
              	<div class="slide-t1">
                	<div class="slide-ta-img"><img src="" width="620" height="444" alt=""></div>
                  <div class="slide-tb-info">
                  	<h1>5 HYTERA</h1>
                    <h2>LÍNEA DE COMUNICACIÓN</h2>
                    <h3>LUCTUS ET <span>ULTRICES</span></h3>
                    <a href="#"><span class="slide-bt"></span></a>
                  </div>
                </div>
              </span>
              <span class="rsABlock rsNoDrag" data-move-effect="left">
              	<div class="slide-t2">
                	<div class="slide-ta-img"><img src="" width="160" height="222" alt=""></div>
                  <a href="#">
                  	<div class="slide-ta-info">
                    	<h1>ADIPISCING</h1>
                      <p>Select design work for</p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>
              <span class="rsABlock rsNoDrag" data-move-effect="right">
              	<div class="slide-t3">
                	<div class="slide-ta-img"><img src="" width="160" height="222" alt=""></div>
                  <a href="#">
                  	<div class="slide-ta-info">
                    	<h1>COMMODO</h1>
                      <p>Select design work for</p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>
              <span class="rsABlock rsNoDrag" data-move-effect="right">
              	<div class="slide-t4">
                	<div class="slide-ta-img"><img src="" width="320" height="222" alt=""></div>
                  <a href="#">
                  	<div class="slide-ta-info">
                    	<h1>CONTROLES DE ACCESO</h1>
                      <p>Select design work for delivery in a iful, to clients</p>
                      <span>+</span>
                    </div>
                  </a>
                </div>
              </span>
            </div>
          </div>
          
        -->
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <div class="desta-head">
        	<h1>NUESTRAS <strong>NOVEDADES</strong></h1>
        </div>
        <div class="con-desta">
            
            
            
            
          <?php 
            if(!empty($novedades)) :
              foreach ($novedades as $obj) :
              ?>  
             <div class="item-desta">
                 <div class="item-desta-img"><img src="<?php echo base_url().$obj->imagen_path; ?>" width="280" height="116" alt=""></div>
                <div class="item-desta-info">
            	   <h1><?php echo $obj->titulo; ?></h1>
                   <h2><?php echo str_replace("-","/",$obj->fecha) ?></h2>
                   <p><?php echo $obj->texto; ?></p>
                </div>
                 <a href="<?php echo $obj->link; ?>"><div class="item-desta-bt desta-bt-t1"></div></a>
              </div>
         <?php endforeach;   endif; ?>     
                     
          <!--  
          <div class="item-desta">
          	<div class="item-desta-img"><img src="<?php echo global_asset('img/destacado-img-2.jpg') ?>" width="280" height="116" alt=""></div>
            <div class="item-desta-info">
            	<h1>PRODUCTO NOVEDADES SIT</h1>
              <h2>27/03/13</h2>
              <p>Pellentesque a nisl eros. Aliquam et justo ac diam condimentum tristique ac eget lorem.</p>
            </div>
            <a href="#"><div class="item-desta-bt desta-bt-t2"></div></a>
          </div>
          <div class="item-desta">
          	<div class="item-desta-img"><img src="<?php echo global_asset('img/destacado-img-3.jpg') ?>" width="280" height="116" alt=""></div>
            <div class="item-desta-info">
            	<h1>PRODUCTO NOVEDADES SIT</h1>
              <h2>27/03/13</h2>
              <p>Pellentesque a nisl eros. Aliquam et justo ac diam condimentum tristique ac eget lorem.</p>
            </div>
            <a href="#"><div class="item-desta-bt desta-bt-t3"></div></a>
          </div>
        </div> -->
          
      </div>
       </div>
       <div class="con-foo-car">
      	<div class="mg-foo-car">
       	  <ul class="slider-footer">
             <?php 
               if(!empty($logos)):
               foreach ($logos as $obj) : ?>
              <li><img src="<?php echo base_url().$obj->path; ?>" width="215" height="66" alt=""></li>
               <?php endforeach; endif; ?>
          </ul>
        </div>
      </div> 
          
       <!--   
          
      <div class="con-foo-car">
      	<div class="mg-foo-car">
       	  <ul class="slider-footer">
             <?php 
               if(!empty($logos)):
               foreach ($logos as $obj) : ?>
              <li><img src="<?php echo base_url().$obj->path; ?>" width="215" height="66" alt=""></li>
               <?php endforeach; endif; ?>
          </ul>
        </div>
      </div>
       -->
          
          
    </div>
  </section>