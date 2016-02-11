<?php include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); 
         $idproductos_conos=$_REQUEST['idproductos_conos'];
         
         $cPorta_= new Dbporta_conos();
         $mDataP = array("where"=>"idproductos_conos='".$idproductos_conos."'");
         $porta_conos = $cPorta_->getList2($mDataP);
          $cant = count($porta_conos);
         //print_r($porta_conos);
         
         $cImg_conos= new Dbimg_conos();
         $mDataI = array("where"=>"idproductos_conos='".$idproductos_conos."'");
         $img_conos = $cImg_conos->getListOne($mDataI);
        ?>
  
  <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>
    
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>
        	Resultado
        	<a href="javascript:history.back()"><div class="back-vn"></div></a>
        </h1>
<!--        <div class="rs-tabla-img"><img src="assets/img/img_conos/<?php echo $img_conos['imagen']  ?>" width="600" height="200" alt=""></div>-->
          <div class="rs-tabla-img"><img src="assets/img/img_conos/<?php echo $img_conos['imagen']  ?>" width="600" alt=""></div>
        <div class="sep-line"></div>
        <div class="con-tabla-rs">
          <div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs">
              <thead>
                <tr>
                  <th width="80">Referencia</th>
                  <th width="203">Longitud</th>
                  <th width="203">Di&#225;metro</th>
                  <th width="202">Tipo de boquilla</th>
                  <th width="80">Cantidad</th>
                  <th width="172">Selecci&#243;n</th>
                </tr>
              </thead>
              <tbody>
                  <?php for($i = 0 ; $i < $cant ; $i++){ ?>
                        <tr>
                          <td><?php echo $porta_conos[$i]["ref"] ?></td>
                          <td><?php echo $porta_conos[$i]["longitud"] ?></td>
                          <td><?php echo $porta_conos[$i]["diametro"] ?></td>
                          <td><?php echo $porta_conos[$i]["tipo_boquilla"] ?></td>
                          <td>
                                <div class="con-datos-rs clearfix">
                                <fieldset>
                                        <input placeholder="Cantidad..." onkeypress="return soloNumeros(event)" onpaste="return soloNumeros(event)">
                              </fieldset>
                            </div>
                          </td>
                          <td>
                                <div class="con-datos-rs-bt clearfix">
                              <a href="#modal-ref" class="submit-torn modals-act"></a>
                            </div>
                          </td>
                        </tr>
                <?php  } ?>
              </tbody>
            </table>
          </div>
				</div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>