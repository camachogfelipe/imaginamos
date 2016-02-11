<!-- Menú responsivo móviles -->
<div class="menu_responsivo">
  <a href="#sidr-left" class="ico_menuresponsivo" id="btmenu_responsivo"></a>

  <a href="#sidr-right" class="ico_menuresponsivoperfil" id="btmenu_responsivoperfil"></a>
  <div class="cont_buscadoresponsivo">
  	 <form method="post" action="<?php echo base_url() . "buscar"; ?>">
      <fieldset>          
        <input class="input_buscarresponsivo" name="palabra" id="" type="text">
        <button class="btn_buscarresponsivo" type="button"></button>
      </fieldset>
    </form>
  </div>
</div>
<!-- Menú lateral móviles -->
<div id="sidr-left" class="sidr left" >
  <!-- Your content -->
  <ul class="lista_menuresponsivo">
    <li id="sec_trabaja"><a href="<?php echo base_url()?>trabaja">trabaja con nosotros</a></li>
    <li id="sec_trabajoequipo"><a href="<?php echo base_url()?>equipo">equipo de trabajo</a></li>
    <li id="sec_lineas"><a href="<?php echo base_url()?>lineas">líneas</a></li>
    <li id="sec_servicioscorte"><a href="<?php echo base_url()?>corte">servicios de corte</a></li>
    <li id="sec_documentos"><a href="<?php echo base_url()?>documentos">documentos</a></li>
    <li id="sec_enterate"><a href="<?php echo base_url()?>enterate">entérate</a></li>
  </ul>
</div>
<!-- Barra Footer -->
<div id="sidr-right" class="sidr right">
  <div class="menuperfil_derecha">
    <div class="espacio_en_blanco"></div>
    <div class="cont_derinfo">
      <img src="img/iconos/iconos_secciones/mensaje.png" alt="">
      <p> <span><a href="mailto:hola@lacampana.co"><?php if(!empty($datos['footer']->email)) echo $datos['footer']->email; ?></a></span></p>
    </div>
    <div class="division_lineagris"></div>
    <div class="cont_derinfo">
      <img src="img/iconos/iconos_secciones/home_footer.png" alt="">
      <p><?php if(!empty($datos['footer']->direccion)) echo $datos['footer']->direccion; ?></p>
    </div>
    <div class="division_lineagris"></div>
    <div class="cont_derinfo">
      <img src="img/iconos/iconos_secciones/celular.png" alt="">
      <p> <span><?php if(!empty($datos['footer']->telefono)) echo $datos['footer']->telefono; ?></span></p>
    </div>
    <div class="division_lineagris"></div>
    <div class="cont_derinfo cont_derinforedes">
      <a href="https://twitter.com/lacampana_acero"><img src="img/iconos/redes_footer/twiter.png" alt=""></a>
      <a href="http://www.facebook.com/pages/la-campana/151565408220649"><img src="img/iconos/redes_footer/face.png" alt=""></a>
      <a href="http://pinterest.com/lacampanaaceros/"><img src="img/iconos/redes_footer/p.png" alt=""></a>
      <a href="https://plus.google.com/u/0/112856535283529764048/posts"><img src="img/iconos/redes_footer/google+.png" alt=""></a>
      <a href="http://www.youtube.com/user/lacampanaaceros"><img src="img/iconos/redes_footer/youtube.png" alt=""></a>
      <a href="http://www.linkedin.com/company/la-campana-servicios-de-acero-s-a-?trk=hb_tab_compy_id_2327778"><img src="img/iconos/redes_footer/linkedin.png" alt=""></a>
    </div>
  </div>
</div>
<!-- Formulario de contacto -->
<div class="seccion_contacto">
  <div class="cont_mapa">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps/ms?msa=0&amp;msid=205077999587652225497.0004e24def1b7f94d304e&amp;ie=UTF8&amp;t=m&amp;iwloc=0004e24e213e740022bf8&amp;ll=4.612374,-78.0853&amp;spn=0.000246,0.000525&amp;output=embed"></iframe>
  </div>
  <div class="sombra_video"></div>
  <div class="espacio_en_blanco"></div>
  <div class="cont_940 cont_formulario">
  	<div class="logo_internas"><img src="img/logos/la_campana_basico.png" alt=""></div>
    <h1>contáctanos</h1>
    <p>Utiliza el siguiente formulario para enviarnos un mensaje y/o solicitar alguno de <span>nuestros productos o servicios,</span>  en breve <br> uno de nuestros representantes se comunicará con usted.  </p>
    <form action="<?= base_url() ?>home/contactanos" class="formulario_contacto" method="post" id="formulario">
      <fieldset>
        <div class="cont50big">
          <div class="cont50small">
            <input name="nombre" class="validate[required]" type="text" placeholder="nombre..">
          </div>
          <div class="cont50small margin_left">
            <input name="email" class="validate[required]" type="text" placeholder="email..">
          </div>
          <div class="cont50small">
            <input name="telefono" class="validate[required, custom[onlyNumberSp]]" type="text" placeholder="teléfono..">
          </div>
          <div class="cont50small margin_left">
            <select id="ciudad" name="ciudad" class="sel-item validate[required]">
                <option value="">ciudad..</option>
                <option value="Armenia">Armenia</option>
                <option value="Barrancabermeja">Barrancabermeja</option>
                <option value="Barranquilla">Barranquilla</option>
                <option value="Bello">Bello</option>
                <option value="Bogota">Bogot&aacute;</option>
                <option value="Bucaramanga">Bucaramanga</option>
                <option value="Buenaventura">Buenaventura</option>
                <option value="Buga">Buga</option>
                <option value="Cali">Cali</option>
                <option value="Cartagena">Cartagena</option>
                <option value="Cartago">Cartago</option>
                <option value="Cucuta">Cúcuta</option>
                <option value="Dos_quebradas">Dos Quebradas</option>
                <option value="Envigado">Envigado</option>
                <option value="Florencia">Florencia</option>
                <option value="Floridablanca">Floridablanca</option>
                <option value="Girardot">Girardot</option>
                <option value="Giron">Giron</option>
                <option value="Ibague">Ibagué</option>
                <option value="Itagui">Itagüí</option>
                <option value="Maicao">Maicao</option>
                <option value="Manizales">Manizales</option>
                <option value="Medellin">Medellín</option>
                <option value="Monteria">Montería</option>
                <option value="Neiva">Neiva</option>
                <option value="Palmira">Palmira</option>
                <option value="Pasto">Pasto</option>
                <option value="Pereira">Pereira</option>
                <option value="Popayan">Popayán</option>
                <option value="Santa_martha">Santa Marta</option>
                <option value="Sincelejo">Sincelejo</option>
                <option value="Soacha">Soacha</option>
                <option value="Sogamoso">Sogamoso</option>
                <option value="Soledad">Soledad</option>
                <option value="Tulua">Tuluá</option>
                <option value="Tunja">Tunja</option>
                <option value="Valledupar">Valledupar</option>
                <option value="Villavicencio">Villavicencio</option>
</select>
          </div>
        </div>
        <div class="cont50big text_areaboton">
          <div class="texarea_contacto">
            <textarea class="validate[required]" name="comentario" rows="3" placeholder="comentario..."></textarea>
          </div>
          <button class="btn_formcontacto" type="submit"></button>
        </div>
      </fieldset>
    </form>
    <a href="#" id="cerrar_contacto"></a>
  </div>
</div>
<div class="opacidad_negro"></div>
<div class="cont_940">
  <div class="header clearfix">
    <a href="<?php echo base_url()?>" class="logo_prin">
      <img src="img/logo.png" alt="">
    </a>
    <a href="#" class="bt_contactoheader ">
      <img src="img/iconos/ico_contacto.png" alt="">
      <p class="inline">contáctanos</p>
    </a>
  </div>
</div>

<?php if($datos['is_home'] == false) : ?>

<div class="cont_navprincipal clearfix cont_940" style="overflow: hidden; height: 0px;">

  <ul class="clearfix nav_principal2 menuala_izquierda" style="opacity: 1; left: -25px; top: 50px; position: fixed; z-index: 100; overflow: visible; height: 460px; width: 80px;">
    <li class="grillatres copy_homenav1 copy_homenav1peque">
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_printrabaja bt_principalpeque<?php
			if($datos['section'] == "trabaja") : ?> bt_navizquierda_activo_trabaja<?php endif; ?>" id="sec_trabaja" style="top: 0px;">
      <a href="<?php echo base_url()?>trabaja">
        <div class="iconobt inline">
          <img src="img/iconos/trabaja_connosotros.png" alt="">
        </div> 
      </a>
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_prinequipo bt_principalpeque<?php
			if($datos['section'] == "equipo") : ?> bt_navizquierda_activo_equipo<?php endif; ?>" id="sec_trabajoequipo" style="top: -12px;">
      <a href="<?php echo base_url()?>equipo">
        <div class="iconobt inline">
          <img src="img/iconos/equipo.png" alt="">
        </div> 
      </a>
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_prinlineas bt_principalpeque<?php
			if($datos['section'] == "lineas") : ?> bt_navizquierda_activo_lineas<?php endif; ?>" id="sec_lineas" style="top: -24px;">
      <a href="<?php echo base_url()?>lineas">
        <div class="iconobt inline">
          <img src="img/iconos/lineas.png" alt="">
        </div> 
      </a>
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_prinservicios bt_principalpeque<?php
			if($datos['section'] == "corte") : ?> bt_navizquierda_activo_servicios<?php endif; ?>" id="sec_servicioscorte" style="top: -36px;">
      <a href="<?php echo base_url()?>corte">
        <div class="iconobt inline">
          <img src="img/iconos/corte.png" alt="">
        </div> 
      </a>
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_prindocumentos bt_principalpeque<?php
			if($datos['section'] == "documentos") : ?> bt_navizquierda_activo_documentos<?php endif; ?>" id="sec_documentos" style="top: -48px;">
      <a href="<?php echo base_url()?>documentos">
        <div class="iconobt inline">
          <img src="img/iconos/documentos.png" alt="">
        </div> 
      </a>
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_prinenterate bt_principalpeque<?php
			if($datos['section'] == "enterate") : ?> bt_navizquierda_activo_enterate<?php endif; ?>" id="sec_enterate" style="top: -60px;">
      <a href="<?php echo base_url()?>enterate">
        <div class="iconobt inline">
          <img src="img/iconos/enterate.png" alt="">
        </div> 
      </a>
    </li>
  </ul>

  <ul class="nav_principal clearfix nav_principal1" style="opacity: 0;">
    <li class="grillatres copy_home">
      <p>somos un equipo de trabajo apasionado por el <span>acero</span>, <br> la innovación y por lo que podemos brindar a nuestros clientes.</p>
    </li>
    <li class="bt_principalmueveizq grillauno bt_principal bt_principalmueve bt_printrabaja" id="sec_trabaja">
      <div class="info_btgeneral" style="overflow: hidden; display: none; height: 100px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
        <p><?php
					if(isset($datos['fmenu'])) :
						foreach ($datos['fmenu'] as $item) :
							if($item->item == "trabaja con nosotros") echo $item->text;
						endforeach;
					endif;
				?></p>
      </div>
      <a href="<?php echo base_url()?>trabaja">
        <div class="iconobt inline">
          <img src="img/iconos/trabaja_connosotros.png" alt="">
        </div> 
        <h3 class="color_blanco">trabaja con nosotros</h3>
      </a>
      <div class="bg_sombrabotones"></div>
    </li>
    <li class="bt_principalmueveizq grillauno bt_principal bt_principalmueve bt_prinequipo" id="sec_trabajoequipo">
      <div class="info_btgeneral">
        <p><?php
					if(isset($datos['fmenu'])) :
						foreach ($datos['fmenu'] as $item) :
							if($item->item == "equipo de trabajo") echo $item->text;
						endforeach;
					endif;
				?></p>
      </div>
      <a href="<?php echo base_url()?>equipo">
        <div class="iconobt inline">
          <img src="img/iconos/equipo.png" alt="">
        </div> 
        <h3 class="color_blanco">equipo de trabajo</h3>
      </a>
      <div class="bg_sombrabotones"></div>
    </li>
    <li class="bt_principalmueveizq grillauno bt_principal bt_principalmueve bt_prinlineas" id="sec_lineas">
      <div class="info_btgeneral">
        <p><?php
					if(isset($datos['fmenu'])) :
						foreach ($datos['fmenu'] as $item) :
							if($item->item == "lineas") echo $item->text;
						endforeach;
					endif;
				?></p>
      </div>
      <a href="<?php echo base_url()?>lineas">
        <div class="iconobt inline">
          <img src="img/iconos/lineas.png" alt="">
        </div> 
        <h3 class="color_blanco">líneas</h3>
      </a>
      <div class="bg_sombrabotones"></div>
    </li>
    <li class="bt_principalmueveizq grillauno bt_principal bt_principalmueve bt_prinservicios" id="sec_servicioscorte">
      <div class="info_btgeneral">
        <p><?php
					if(isset($datos['fmenu'])) :
						foreach ($datos['fmenu'] as $item) :
							if($item->item == "servicios de corte") echo $item->text;
						endforeach;
					endif;
				?></p>
      </div>
      <a href="<?php echo base_url()?>corte">
        <div class="iconobt inline">
          <img src="img/iconos/corte.png" alt="">
        </div> 
        <h3 class="color_blanco">servicios de corte</h3>
      </a>
      <div class="bg_sombrabotones"></div>
    </li>
    <li class="bt_principalmueveizq grillauno bt_principal bt_principalmueve bt_prindocumentos" id="sec_documentos">
      <div class="info_btgeneral">
        <p><?php
					if(isset($datos['fmenu'])) :
						foreach ($datos['fmenu'] as $item) :
							if($item->item == "documentos") echo $item->text;
						endforeach;
					endif;
				?></p>
      </div>
      <a href="<?php echo base_url()?>documentos">
      	<div class="notificaciones">30</div>
        <div class="iconobt inline">
          <img src="img/iconos/documentos.png" alt="">
        </div> 
        <h3 class="color_blanco">documentos</h3>
      </a>
      <div class="bg_sombrabotones"></div>
    </li>
    <li class="bt_principalmueveizq grillauno bt_principal bt_principalmueve bt_prinenterate" id="sec_enterate">
      <div class="info_btgeneral">
        <p><?php
					if(isset($datos['fmenu'])) :
						foreach ($datos['fmenu'] as $item) :
							if($item->item == "enterate") echo $item->text;
						endforeach;
					endif;
				?></p>
      </div>
      <a href="<?php echo base_url()?>enterate">
      	<div class="notificaciones">20</div>
        <div class="iconobt inline">
          <img src="img/iconos/enterate.png" alt="">
        </div> 
        <h3 class="color_blanco">entérate</h3>
      </a>
      <div class="bg_sombrabotones"></div>
    </li>
  </ul>

  <div class="cont_940 cont_logosbuscadorhome" style="opacity: 1;">
    <div class="buscador_home inline">
      <a href="#"></a>
      <form method="post" action="<?php echo base_url() . "buscar"; ?>">
        <input class="text_buscarhome" name="palabra" type="text" placeholder="Buscar...">
      </form>
    </div>

    <div class="logos_home inline">
      <a href="#" class="logo1_home inline">
        <img src="img/logos/acerfo.png" alt="">
      </a>
      <a href="#" class="logo2_home inline">
        <img src="img/logos/perfiaceros.png" alt="">
      </a>
    </div>
  
  </div>
</div>

<?php endif; ?>
