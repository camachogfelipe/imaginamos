  <a class="back-bt tr" href="<?php echo base_url(); ?>javascript:history.back()">« Volver</a>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <h1 class="pro-title">Resultados de busqueda</h1>
        <div class="con-grl-tx">
        	<ul>
                <?php if(!empty($buscador)){
          foreach ($buscador as $result): ?>
            <a href="<?php echo (!empty($result['url']))?$result['url']:"#"; ?>">
          	<li>
            	<h1><span></span><?php echo (!empty($result['title']))?$result['title']:"Resultado"; ?></h1>
              <p><?php echo (!empty($result['contents']))?$result['contents']:"Resultado"; ?></p>
            </li>
          </a>
          <?php endforeach;
          }else{
          ?>
          <li>
            <h1><span></span>Su busqueda no arroja resultados</h1>
            <p>Lo sentimos no se encotraron resultados para su busqueda, por favor intentelo nuevamente.</p>
          </li>
          <?php } ?>       
          </ul>
        </div>
      </div>
    </div>
  </section>