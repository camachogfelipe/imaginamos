<div class="footer">
 <!-- <div class="news bebas">
    <img src="<?php echo base_url(); ?>assets/img/logo_footer.png" class="logo_footer" />
    <form class="content_940 content_news clearfix form_val" method="post" action="<?php echo base_url()."preguntas/newletter" ?>" >
      <input type="text"  name="nombre" placeholder="Nombre" class="left validate[required]" />
      <input type="text" name="email" placeholder="Correo electrónico" class="left validate[required, custom[email]]" />
      <input type="submit" value="Suscribirse al newsletter" />
    </form>
  </div> -->
  <div class="news bebas">
    <img class="logo_footer" src="<?php echo base_url(); ?>assets/img/logo_footer.png"></img>
    <form class="content_940 content_news clearfix form_val" method="POST" action="<?php echo base_url()."preguntas/newletter"; ?>">
        <input name="nombre" class="left validate[required]" type="text" placeholder="Nombre"></input>
        <input name="email"  class="left validate[required, custom[email]]" type="text" placeholder="Correo electrónico"></input>
        <input type="submit" value="Suscribirse al newsletter"></input>
    </form>
</div>  
    
  <div class="content_940 content_footer1">
    <div class="clearfix">
      <div class="left_footer1 left">
        <h3 class="bebas">Contacto</h3>
        <ul class="lista_cont">
          <li class="item_dir">
            <span><?php echo $contacto->direccion; ?> <?php echo $contacto->ciudad; ?></span>
          </li>
          <li class="item_tel">
            <span><?php echo $contacto->telefono; ?></span>
          </li>
          <li class="item_cel">
            <span><?php echo $contacto->celular; ?></span>
          </li>
          <li class="item_mail">
            <span><?php echo $contacto->email; ?></span>
          </li>
        </ul>
      </div>
      <div class="left_footer2 left">
        <h3 class="bebas">Mapa de sitio</h3>
        <div class="clearfix">
          <ul class="lista_cont left lista_map">
            <li>
                <a href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li>
              <a href="<?php echo base_url()."tienda"; ?>">Tienda</a>
            </li>
            <li>
              <a href="<?php echo base_url()."comunidades"; ?>">Comunidad</a>
            </li>
            <li>
              <a href="<?php echo base_url()."servicios"; ?>">Servicios</a>
            </li>
          </ul>
          <ul class="lista_cont left lista_map">
             <li>
              <a href="<?php echo base_url()."preguntas"; ?>">Preguntas</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="right">
        <h3 class="bebas">Síguenos</h3>
        <ul class="redes clearfix">
          <li class="left">
            <a target="_blank" href="<?php echo $facebook->link_red; ?>" class="fb"></a>
          </li>
          <li class="left">
            <a target="_blank" href="<?php echo $twitter->link_red; ?>" class="tw"></a>
          </li>
          <li class="left">
            <a target="_blank" href="<?php echo $instagram->link_red; ?>" class="ins"></a>
          </li>
          <li class="left">
            <a target="_blank" href="<?php echo $google_plus->link_red; ?>" class="pt"></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="rights_footer clearfix">
      <h6 class="left">&copy; 2014 TALLER POSTAL - Todos los derechos reservados - Prohibida su reproducción parcial o total</h6>
      <div class="footer_ahorranito right"></div>
    </div>
  </div>
</div>