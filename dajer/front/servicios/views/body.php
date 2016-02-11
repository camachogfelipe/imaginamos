<style type="text/css">#nav-bt4 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1>Servicios</h1>
        <div class="con-serv-ac">
          <div class="serv-ac">
            <ul>
              <?php 
              $i = 1; 
              foreach ($servicios as $servicio): ?>  
              <li>
                <h1><?php echo $i; $i++; ?></h1>
                <div style="background:url(<?php echo base_url().$servicio->imagen_path;  ?>);">
                  <span>
                      <h1><?php echo strtoupper($servicio->titulo);  ?></h1>
                    <p><?php echo $servicio->texto;  ?></p>
                  </span>
                </div>
              </li>
              <?php endforeach; ?>
             <!-- <li>
                <h1>2</h1>
                <div style="background:url(assets/img/servicio-img-2.jpg);">
                  <span>
                  	<h1>SERVICIO DE CAPACITACIÓN</h1>
                    <p>Phasellus eget libero elit, a sodales felis. Morbi ligula tellus, posuere nec interdum ac, blandit et ante. Morbi nibh orci, eleifend vitae venenatis non, molestie in magna. Cras scelerisque risus eget odio interdum consequat.</p>
                  </span>
                </div>
              </li>
              <li>
                <h1>3</h1>
                <div style="background:url(assets/img/servicio-img-3.jpg);">
                  <span>
                  	<h1>SERVICIO DE REPUESTOS</h1>
                    <p>Phasellus eget libero elit, a sodales felis. Morbi ligula tellus, posuere nec interdum ac, blandit et ante. Morbi nibh orci, eleifend vitae venenatis non, molestie in magna. Cras scelerisque risus eget odio interdum consequat.</p>
                  </span>
                </div>
              </li>
              <li>
                <h1>4</h1>
                <div style="background:url(assets/img/servicio-img-4.jpg);">
                  <span>
                  	<h1>SERVICIO AL CLIENTE</h1>
                    <p>Phasellus eget libero elit, a sodales felis. Morbi ligula tellus, posuere nec interdum ac, blandit et ante. Morbi nibh orci, eleifend vitae venenatis non, molestie in magna. Cras scelerisque risus eget odio interdum consequat.</p>
                  </span>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>