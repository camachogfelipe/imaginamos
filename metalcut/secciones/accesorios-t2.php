<?php include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); 
         $idproductos_sujecion=$_REQUEST['idproductos_sujecion'];
         
         $cPorta_= new Dbporta_sujecion();
         $mDataP = array("where"=>"idproductos_sujecion='".$idproductos_sujecion."'");
         $porta_sujecion = $cPorta_->getList2($mDataP);
          $cant = count($porta_sujecion);
         //print_r($porta_sujecion);
         
         $cImg_sujecion= new Dbimg_sujecion();
         $mDataI = array("where"=>"idproductos_sujecion='".$idproductos_sujecion."'");
         $img_sujecion = $cImg_sujecion->getListOne($mDataI);
        ?>
  
 <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>

  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>
        	Resultado
        	<a href="javascript:history.back()"><div class="back-vn"></div></a>
        </h1>
        <div class="rs-tabla-img"><img src="assets/img/img_sujecion/<?php echo $img_sujecion['imagen']  ?>" width="600" alt=""></div>
        <div class="sep-line"></div>
        <div class="con-tabla-rs">
          <div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs">
              <thead>
                <tr>
                  <th width="80">Referencia</th>
                  <th width="608">Rango de sujeci&#243;n</th>
                  <th width="80">Cantidad</th>
                  <th width="172">Selecci&#243;n</th>
                </tr>
              </thead>
              <tbody>
                  <?php for($i = 0 ; $i < $cant ; $i++){ ?>
                <tr>
                  <td><?php echo $porta_sujecion[$i]["ref"] ?></td>
                  <td><?php echo $porta_sujecion[$i]["rango_sujecion"] ?></td>
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