<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

if(isset($_GET['opciones'])) :
	$opciones = $_GET['opciones'];
	//if(isset($_GET['material'])) $where[] = "idmateriales='".$_GET['material']."'";
	if(isset($_GET['geometria'])) $where[] = "idgeometria='".$_GET['geometria']."'";
endif;

include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); 
	
	if(isset($opciones)) :
		switch(mb_strtolower($opciones)) :
			case 'a' : 
				$cImg_ranurado= new Dbimg_alesado();
				$imagen = "img_alesado";
				$titulo = "Portaherramientas Alesado";
				$cPortaherramientas	= new Dbporta_alesado();
				break;
			case 'c' : 
				$cImg_ranurado= new Dbimg_cilindrado();
				$imagen = "img_cilindrado";
				$titulo = "Portaherramientas Cilindrado y Refrentado";
				$cPortaherramientas	= new Dbporta_cilindrado();
				break;
		endswitch;
		$mDataI = array("where"=>"geometria='".$_GET['geometria']."'");
		$img_ranurado = $cImg_ranurado->getListOne($mDataI);
		$mDataI = array("where"=>implode(" AND ", $where));
		$portaherramientas	= $cPortaherramientas->getList2($mDataI);
		$cant				= count($portaherramientas);
	endif;
	?>
  
 <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1><?= $titulo ?><a href="javascript:history.back()"><div class="back-vn"></div></a></h1>
        <div class="rs-tabla-img"><img src="assets/img/<?php echo $imagen."/".$img_ranurado['imagen'] ?>" width="600" alt=""></div>
        <div class="sep-line"></div>
        <div class="con-tabla-rs">
          <div>
          <?php if(mb_strtolower($opciones) == "c") : ?>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs">
              <thead>
                <tr>
                  <th width="80">Referencia</th>
                  <th width="132">Figura</th>
                  <th width="132">Tama&ntilde;o</th>
                  <th width="132">Longitud</th>
                  <?php if(mb_strtolower($opciones) == "a") : ?>
                  <th width="132">Material</th>
                  <?php endif; ?>
                  <th width="132">Orientaci&oacute;n</th>
                  <th width="80">Cantidad</th>
                  <th width="172">Selecci&oacute;n</th>
                </tr>
              </thead>
              <tbody>
              	<?php for($i = 0 ; $i < $cant ; $i++) : ?>
                <tr>
                  <td>
                  	<?php echo $portaherramientas[$i]["ref"] ?>
                    <input type="hidden" id="ref_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["ref"]; ?>" >
                  </td>
                  <td>
				  	<?php echo $portaherramientas[$i]["figura"] ?>
                    <input type="hidden" id="figura_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["figura"]; ?>" >
                  </td>
                  <td>
				  	<?php echo $portaherramientas[$i]["tamano"] ?>
                    <input type="hidden" id="tamano_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["tamano"]; ?>" >
                  </td>
                  <td>
				  	<?php echo $portaherramientas[$i]["longitud"] ?>
                    <input type="hidden" id="longitud_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["longitud"]; ?>" >
                  </td>
                  <?php if(mb_strtolower($opciones) == "a") : ?>
                  <td>
				  	<?php echo $portaherramientas[$i]["idmaterial"] ?>
                    <input type="hidden" id="longitud_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["longitud"]; ?>" >
                  </td>
                  <?php endif; ?>
                  <td>
                  	<div class="con-datos-rs clearfix">
                    	<fieldset>
                      	<select id="orientacion_<?php echo $i; ?>" name="orientacion_<?php echo $i; ?>">
                          <option value="Neutro">Neutro</option>
                          <option value="Derecha">Derecha</option>
                          <option value="Izquierda">Izquierda</option>
                        </select>
                    </div>
                  </td>
                  <td>
                  	<div class="con-datos-rs clearfix">
                    <fieldset>
                    	<input type="hidden" id="idporta_cilindrado_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["idporta_cilindrado"]; ?>" >
                        <input type="hidden" id="valor_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["valor"]; ?>" >
                        <input placeholder="Cantidad..." id="cantidad_<?php echo $i ?>" name="cantidad_<?php echo $i ?>" onkeypress="return soloNumeros(event)" onpaste="return soloNumeros(event)">
                    </fieldset>
                   	</div>
                  </td>
                  <td>
                  	<div class="con-datos-rs-bt clearfix">
                    	<a href="#modal-ref" onclick="comprar('<?php echo $i ?>');" class="submit-torn modals-act"></a>
                    </div>
                  </td>
                </tr>
                <?php endfor; ?>
              </tbody>
            </table>
          <?php elseif(mb_strtolower($opciones) == "a") : ?>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs">
              <thead>
                <tr>
                  <th width="80">Referencia</th>
                  <th width="132">Diam. M&iacute;n. Agujero</th>
                  <th width="132">Diam. Barra</th>
                  <th width="132">Long. Barra</th>
                  <th width="132">Orientaci&oacute;n</th>
                  <th width="80">Cantidad</th>
                  <th width="172">Selecci&oacute;n</th>
                </tr>
              </thead>
              <tbody>
              	<?php for($i = 0 ; $i < $cant ; $i++) : ?>
                <tr>
                  <td>
                  	<?php echo $portaherramientas[$i]["ref"] ?>
                    <input type="hidden" id="ref_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["ref"]; ?>" >
                  </td>
                  <!--<td>
                  	<?php echo $portaherramientas[$i]["figura"] ?>
                    <input type="hidden" id="fig_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["figura"]; ?>" >
                  </td>-->
                  <td>
				  	<?php echo $portaherramientas[$i]["diam_ajugero"] ?>
                    <input type="hidden" id="diam_ajugero_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["diam_ajugero"]; ?>" >
                  </td>
                  <td>
				  	<?php echo $portaherramientas[$i]["diam_barra"] ?>
                    <input type="hidden" id="diam_barra_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["diam_barra"]; ?>" >
                  </td>
                  <td>
				  	<?php echo $portaherramientas[$i]["long_barra"] ?>
                    <input type="hidden" id="long_barra_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["long_barra"]; ?>" >
                  </td>
                  <!--<td>
				  	<?php echo $portaherramientas[$i]["inserto"] ?>
                    <input type="hidden" id="inserto_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["inserto"]; ?>" >
                  </td>
                  <td>
				  	<?php echo mb_strtoupper($portaherramientas[$i]["idgeometria"]) ?>
                    <input type="hidden" id="longitud_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["idgeometria"]; ?>" >
                  </td>-->
                  <td>
                  	<div class="con-datos-rs clearfix">
                    	<fieldset>
                      	<select id="orientacion_<?php echo $i; ?>" name="orientacion_<?php echo $i; ?>">
                          <option value="Neutro">Neutro</option>
                          <option value="Derecha">Derecha</option>
                          <option value="Izquierda">Izquierda</option>
                        </select>
                    </div>
                  </td>
                  <td>
                  	<div class="con-datos-rs clearfix">
                    <fieldset>
                    	<input type="hidden" id="idporta_alesado_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["idporta_alesado"]; ?>" >
                        <input type="hidden" id="valor_<?php echo $i ?>" value="<?php echo $portaherramientas[$i]["valor"]; ?>" >
                        <input placeholder="Cantidad..." id="cantidad_<?php echo $i ?>" name="cantidad_<?php echo $i ?>" onkeypress="return soloNumeros(event)" onpaste="return soloNumeros(event)">
                    </fieldset>
                   	</div>
                  </td>
                  <td>
                  	<div class="con-datos-rs-bt clearfix">
                    	<a href="#modal-ref" onclick="comprar('<?php echo $i ?>');" class="submit-torn modals-act"></a>
                    </div>
                  </td>
                </tr>
                <?php endfor; ?>
              </tbody>
            </table>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>
<script>
    function comprar(i){
         //alert('aca');    
    
        var id=$('#idporta_ranurado_'+i).val();
        var can=$('#cantidad_'+i).val();
        var ori=$('#orientacion_'+i).val();
        var valor=$('#valor_'+i).val();
        var det='Ref:'+$('#ref_'+i).val()+'-Diam.Corte:'+$('#diam_corte_'+i).val()+'-Diam.Espigo:'+$('#diam_espigo_'+i).val()+'-Long.Total:'+$('#long_total_'+i).val()+'-No.Insertos:'+$('#n_insertos_'+i).val()+'-Inserto:'+$('#inserto_'+i).val()
        var tabla='porta_ranurado';
        
         $.ajax({
                        dataType: 'json',
                        type: 'POST',
                        url: "secciones/process-compra.php",
                        data: "id="+id+"&cant="+can+"&ori="+ori+"&det="+det+"&tabla="+tabla+"&valor="+valor,              
                        success:function(data){
                            if (data.success == true){
                                alert(data.message);
                            }
                            else{                        
                                $('#msg-error').html('<p>' + data.message + '</p>');
                                $('#msg-error').addClass('msg-error');
                            }
                        },
                        error: function(data,error,errorThrown){alert(error + errorThrown);}
                    }); 
    }
  </script>