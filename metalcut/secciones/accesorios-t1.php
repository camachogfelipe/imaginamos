<?php include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); 
         $idaccesorio=$_REQUEST['idaccesorio'];       
         $cPorta_= new Dbporta_accesorio();
         $mDataP = array("where"=>"idaccesorio='".$idaccesorio."'");
         $porta_accesorio = $cPorta_->getList2($mDataP);
         $cant = count($porta_accesorio);
         //print_r($porta_accesorio);
         
         $cImg_accesorio= new Dbimg_accesorio();
         $mDataI = array("where"=>"idimg_accesorio=1");
         $img_accesorio = $cImg_accesorio->getListOne($mDataI);
        ?>
  
  <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>
    
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>
        	Resultado
        	<a href="javascript:history.back()"><div class="back-vn"></div></a>
        </h1>
        <div class="rs-tabla-img"><img src="assets/img/img_accesorio/<?php echo $img_accesorio['imagen']  ?>" width="600" alt=""></div>
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
                          <td><?php echo $porta_accesorio[$i]["ref"] ?>
                              <input type="hidden" id="ref_<?php echo $i ?>" value="<?php echo $porta_accesorio[$i]["ref"]; ?>" >
                          </td>
                          <td><?php echo $porta_accesorio[$i]["longitud"] ?>
                              <input type="hidden" id="longitud_<?php echo $i ?>" value="<?php echo $porta_accesorio[$i]["longitud"]; ?>" > 
                          </td>
                          <td><?php echo $porta_accesorio[$i]["diametro"] ?>
                              <input type="hidden" id="diametro_<?php echo $i ?>" value="<?php echo $porta_accesorio[$i]["diametro"]; ?>" >  
                          </td>
                          <td><?php echo $porta_accesorio[$i]["tipo_boquilla"] ?>
                              <input type="hidden" id="tipo_boquilla_<?php echo $i ?>" value="<?php echo $porta_accesorio[$i]["tipo_boquilla"]; ?>" >  
                          </td>
                          <td>
                                <div class="con-datos-rs clearfix">
                                <fieldset>
                                         <input type="hidden" id="idporta_accesorio_<?php echo $i ?>" value="<?php echo $porta_accesorio[$i]["idporta_accesorio"]; ?>" >
                                        <input type="hidden" id="valor_<?php echo $i ?>" value="<?php echo $porta_accesorio[$i]["valor"]; ?>" >
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
<script>
    function comprar(i){
        // alert('aca');    
    
        var id=$('#idporta_accesorio_'+i).val();
        var can=$('#cantidad_'+i).val();
        var ori='';
        var valor=$('#valor_'+i).val();
        var det='Ref:'+$('#ref_'+i).val()+'-longitud:'+$('#longitud_'+i).val()+'-Diametro:'+$('#diametro_'+i).val()+'-tipo.boquilla:'+$('#tipo_boquilla_'+i).val()
        var tabla='porta_accesorio';
        
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