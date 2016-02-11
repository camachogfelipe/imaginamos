<?php $path = drupal_get_path('module', 'baloto_acumulado'); ?>
<div id="t-revancha-logo">
  <img src="<?php print $path . '/imagenes/img-revancha.png';?>" />
</div>
<div id="t-tablero-doble">
  <div id="wrapper-tableros">
    
    <div id="tablero-baloto-acumulado">
      <div class="acumulado">
        <span></span>
      </div>    
      <div class="wrapper-cifras">
        <div class="cifra cifra-1"></div>
        <div class="cifra cifra-2"></div>
        <div class="cifra cifra-3"></div>
        <div class="cifra cifra-4"></div>
        <div class="cifra cifra-5"></div>
        <div class="cifra cifra-6"></div>
      </div>        
      <div class="t-sorteo-info"></div> 
    </div>     

    
    <div id="tablero-baloto-revancha">
      <div class="acumulado">
        <span></span>
      </div>    
      <div class="wrapper-cifras">
        <div class="cifra cifra-1"></div>
        <div class="cifra cifra-2"></div>
        <div class="cifra cifra-3"></div>
        <div class="cifra cifra-4"></div>
        <div class="cifra cifra-5"></div>
        <div class="cifra cifra-6"></div>
      </div>      
    </div>


  </div> 
</div>
<div id="t-acumulado-wrapper">
  <div id="t-acumulado">
    <div id="t-sorteo-valor">
      <div id="wrapper-baloto-acumulado">
        <div class="h-center-baloto-acumulado">
          <div class="v-center-baloto-acumulado">
            <div id="value-baloto-acumulado">
              <div class="format-acumulado display-inline-block">
                <span id="symbol-baloto-acumulado">$</span>
              </div>
              <div class="format-acumulado display-inline-block number-baloto">
                <span id="number-baloto-acumulado">0</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="t-mascaranum">
    </div>
  </div>
  <div id="t-balotas">
    <div id="t-balota-uno" class="display-inline-float">
      <div id="balota-tester" class="balota">
        <span class="cifra"><?php print $cifra_uno;?></span>
      </div>
      <div class="podio-balota"></div>
    </div>
    <div id="t-balota-dos" class="display-inline-float">
      <div class="balota">
        <span class="cifra"><?php print $cifra_dos;?></span>
      </div>
      <div class="podio-balota"></div>
    </div>
    <div id="t-balota-tres" class="display-inline-float">
      <div class="balota">
        <span class="cifra"><?php print $cifra_tres;?></span>
      </div>
      <div class="podio-balota"></div>
    </div>
    <div id="t-balota-cuatro" class="display-inline-float">
      <div class="balota">
        <span class="cifra"><?php print $cifra_cuatro;?></span>
      </div>
      <div class="podio-balota"></div>
    </div>
    <div id="t-balota-cinco" class="display-inline-float">
      <div class="balota">
        <span class="cifra"><?php print $cifra_cinco;?></span>
      </div>
      <div class="podio-balota"></div>
    </div>
    <div id="t-balota-seis" class="display-inline-float">
      <div class="balota">
        <span class="cifra"><?php print $cifra_seis;?></span>
      </div>
      <div class="podio-balota"></div>
    </div>
  </div>
  <div id="t-sorteo-info">
    <span>Sorteo No. </span><?php print $numero_sorteo?><span> Fecha del sorteo: </span><?php print $fecha_sorteo?><?php
    if($acumulado_cayo){
      echo "<span> Baloto Cayó en: </span>".$acumulado_cayo;
    }
    ?>
  </div>
</div>
