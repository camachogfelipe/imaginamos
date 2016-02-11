<div class="cont_navprincipal clearfix cont_940">

  <ul class="clearfix nav_principal2">
    <li class="grillatres copy_homenav1">
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_printrabaja" id="sec_trabaja">
      <a href="<?php echo base_url() ?>trabaja">
        <div class="iconobt inline">
          <img src="img/iconos/trabaja_connosotros.png" alt="">
        </div> 
      </a>
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_prinequipo" id="sec_trabajoequipo">
      <a href="<?php echo base_url()?>equipo">
        <div class="iconobt inline">
          <img src="img/iconos/equipo.png" alt="">
        </div> 
      </a>
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_prinlineas" id="sec_lineas">
      <a href="<?php echo base_url()?>lineas">
        <div class="iconobt inline">
          <img src="img/iconos/lineas.png" alt="">
        </div> 
      </a>
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_prinservicios" id="sec_servicioscorte">
      <a href="<?php echo base_url()?>corte">
        <div class="iconobt inline">
          <img src="img/iconos/corte.png" alt="">
        </div> 
      </a>
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_prindocumentos" id="sec_documentos">
      <a href="/documentos">
        <div class="iconobt inline">
          <img src="img/iconos/documentos.png" alt="">
        </div> 
      </a>
    </li>
    <li class="bt_navizquierda grillauno bt_principal bt_prinenterate" id="sec_enterate">
      <a href="<?php echo base_url()?>enterate">
        <div class="iconobt inline">
          <img src="img/iconos/enterate.png" alt="">
        </div> 
      </a>
    </li>
  </ul>

  <ul class="nav_principal clearfix nav_principal1">
    <li class="grillatres copy_home">
      <p>fabricamos perfiles metálicos para la construcción en seco, donde el servicio, acompañado del personal calificado, la innovación y la tecnología será tu beneficio.</p>
    </li>
    <li class="bt_principalmueveizq grillauno bt_principal bt_principalmueve bt_printrabaja" id="sec_trabaja">
      <div class="info_btgeneral">
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
							if($item->item == "servicio a su medida") echo $item->text;
						endforeach;
					endif;
				?></p>
      </div>
      <a href="<?php echo base_url()?>corte">
        <div class="iconobt inline">
          <img src="img/iconos/corte.png" alt="">
        </div> 
        <h3 class="color_blanco">servicio a su medida</h3>
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
      	<div class="notificaciones"><?= $datos['totalDocumentos'] ?></div>
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
      	<div class="notificaciones"><?= $datos['totalEnterese'] ?></div>
        <div class="iconobt inline">
          <img src="img/iconos/enterate.png" alt="">
        </div> 
        <h3 class="color_blanco">entérate</h3>
      </a>
      <div class="bg_sombrabotones"></div>
    </li>
  </ul>

  <div class="cont_940 cont_logosbuscadorhome">
    <div class="buscador_home inline">
      <a href="#"></a>
      <form method="post" action="<?php echo base_url() . "buscar"; ?>">
        <input class="text_buscarhome" name="palabra" type="text" placeholder="Buscar...">
      </form>
    </div>

    <div class="logos_home inline">
      <a href="#" class="logo1_home inline">
        <img src="img/logos/campana.png" alt="">
      </a>
      <a href="#" class="logo2_home inline">
        <img src="img/logos/perfiaceros.png" alt="">
      </a>
    </div>
  
  </div>
</div>