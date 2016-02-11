	<style type="text/css">#nav-bt-4 {background-color:#6a6a6a;} #foo-bt-2 {color:#ce1728;}</style>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <div class="con-miga">
          <ul class="miga-site">
            <li><a href="home">Inicio</a></li>
            <li><a href="integracion">Integración</a></li>
            <li><a href="integracion/integracion-info">Caso</a></li>
          </ul>
        </div>
        
           <?php foreach ($caso as $obj) : ?>
         <div class="con-logo-section">
          <img src="img/logo-t5.png" height="74" width="204" alt="">
        </div>
        <div class="integra-col integra-col-c1">
          <h1><?php echo $obj->titulo; ?></h1>
          <div class="con-info-col">
            <div class="scroll-wrap">
              <p><?php echo $obj->texto; ?></P>
            </div>
          </div>
        </div>
        <div class="integra-col integra-col-c1">
          <div class="con-integra-img">
              <img src="<?php echo base_url().$obj->imagen_path; ?>" height="200" width="280" alt="">
          </div>
          <p class="vn-ext"><a href="#" target="_blank">http://www.lipsum.com/</a></p>
        </div>
          <?php endforeach; ?>
          
          
          
        <div class="integra-col integra-col-c2">
          <h2>Nuestros clientes</h2>
          <div class="scroll-wrap">
            <ul class="items-x3-vt cfx">
                
                <?php foreach ($cliente as $obj) : ?>
                <li>
                <div class="con-item-x3-vt">
                    <a href="<?php echo isset($cliente->url)?$cliente->url:"#"; ?>" class="over-items">
                        <div class="item-over-img item-x3-vt-img"><img src="<?php echo isset($cliente->imagen_path)?base_url().$cliente->imagen_path:""; ?>" height="120" width="120"></div>
                    <h1><?php echo isset($cliente->nombre)?$cliente->nombre:""; ?></h1>
                  </a>
                </div>
              </li>
              <?php endforeach; ?>
            <!--    
              <li>
                <div class="con-item-x3-vt">
                  <a href="#" target="_blank" class="over-items">
                    <div class="item-over-img item-x3-vt-img"><img src="assets/img/integracion-img-1.jpg" height="120" width="120"></div>
                    <h1>Cliente</h1>
                  </a>
                </div>
              </li>
              <li>
                <div class="con-item-x3-vt">
                  <a href="#" target="_blank" class="over-items">
                    <div class="item-over-img item-x3-vt-img"><img src="assets/img/integracion-img-1.jpg" height="120" width="120"></div>
                    <h1>Cliente</h1>
                  </a>
                </div>
              </li>
              <li>
                <div class="con-item-x3-vt">
                  <a href="#" target="_blank" class="over-items">
                    <div class="item-over-img item-x3-vt-img"><img src="assets/img/integracion-img-1.jpg" height="120" width="120"></div>
                    <h1>Cliente</h1>
                  </a>
                </div>
              </li>
              <li>
                <div class="con-item-x3-vt">
                  <a href="#" target="_blank" class="over-items">
                    <div class="item-over-img item-x3-vt-img"><img src="assets/img/integracion-img-1.jpg" height="120" width="120"></div>
                    <h1>Cliente</h1>
                  </a>
                </div>
              </li>
            -->
            </ul>
          </div>
        </div>
          
       <?php foreach ($noticia_relacionada as $obj) : ?>
        <div class="con-news cfx">
          <h1><?php echo $noticia_relacionada->parrafo_titulo ?></h1>
          <div class="news-img"><img src="<?php echo base_url().$noticia_relacionada->imagen_path; ?>" height="160" width="304" alt=""></div>
          <div class="news-info">
            <div class="scroll-wrap">
              <p><?php echo $noticia_relacionada->parrafo_texto ?></p>
            </div>
          </div>
        <?php endforeach; ?>
          
        <!--  
        <div class="con-news cfx">
          <h1>Noticia relacionada</h1>
          <div class="news-img"><img src="assets/img/noticia-img.jpg" height="160" width="304" alt=""></div>
          <div class="news-info">
            <div class="scroll-wrap">
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>
          </div>
        </div>
          -->
          
          
      </div>
    </div>
  </section>
