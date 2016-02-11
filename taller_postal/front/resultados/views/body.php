<div class="content_int clearfix">
  <h1 class="bebas main-title"><span>Resultados de busqueda</span></h1>
  <!--div class="linea_home"></div-->
  <div class="clearfix">
  	<div class="con-grl-tx">
      
          <ul>
          <?php if(!empty($buscador)){
          foreach ($buscador as $result): ?>
          <hr class="sep-rom">
           <a href="<?php echo (!empty($result['url']))?$result['url']:"#"; ?>">
          	<li>
            	<h1><span></span><?php echo (!empty($result['titulo']))?$result['titulo']:"Resultado"; ?></h1>
              <p><?php echo (!empty($result['contents']))?$result['contents']:"Resultado"; ?></p>
            </li>
          </a>
          <?php endforeach;
          }else{
          ?>
          <li>
            <h1><span></span>Su búsqueda no arroja resultados</h1>
            <p>Lo sentimos no se encotraron resultados para su búsqueda, por favor inténtelo nuevamente.</p>
          </li>
          <?php } ?>       
          </ul>
      
    </div>
  </div>
</div>