  <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1>Resultados de busqueda<a class="back-bt" href="javascript:history.back()">« Volver</a></h1>
        <ul class="resultado-list">
         
            
          
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
            <p>Lo sentimos no hemos encontrado lo que busca, por favor intentelo nuevamente.</p>
          </li>
          <?php } ?>
          
        <!--  <a href="#">
          	<li>
            	<h1><span></span>Resultado</h1>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </li>
          </a>
          <a href="#">
          	<li>
            	<h1><span></span>Resultado</h1>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </li>
          </a> -->
        </ul>
      </div>
    </div>
  </section>