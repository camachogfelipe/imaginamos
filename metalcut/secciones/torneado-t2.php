<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); 
        
         $cPorta_alesado= new Dbporta_alesado();
         $porta_alesado = $cPorta_alesado->getList();
         $cant = count($porta_alesado);
         
         $cImg_alesado= new Dbimg_alesado();
         $mDataI = array("where"=>"idimg_alesado=1");
         $img_alesado = $cImg_alesado->getListOne($mDataI);
        
        ?>
  
 <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>
        	Resultado
        	<a href="javascript:history.back()"><div class="back-vn"></div></a>
        </h1>
        <div class="rs-tabla-img"><img src="assets/img/img_alesado/<?php echo $img_alesado['imagen'] ?>" width="600" alt=""></div>
        <div class="sep-line"></div>
        <div class="con-tabla-rs">
          <div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs">
              <thead>
                <tr>
                  <th width="80">Referencia</th>
                  <th width="132">Diam. M&#237;n. Agujeros</th>
                  <th width="132">Diam. Barra</th>
                  <th width="132">Long. Barra</th>
                  <th width="132">Inserto</th>
                  <th width="80">Orientaci&#243;n</th>
                  <th width="80">Cantidad</th>
                  <th width="172">Selecci&#243;n</th>
                </tr>
              </thead>
              <tbody>
                  <?php for($i = 0 ; $i < $cant ; $i++){ ?>
                    <tr>
                      <td><?php echo $porta_alesado [$i]["ref"] ?>
                          <input type="hidden" id="ref_<?php echo $i ?>" value="<?php echo $porta_alesado[$i]["ref"]; ?>" >
                      </td>
                      <td><?php echo $porta_alesado [$i]["diam_ajugero"] ?>
                          <input type="hidden" id="diam_ajugero_<?php echo $i ?>" value="<?php echo $porta_alesado[$i]["diam_ajugero"]; ?>" > 
                      </td>
                      <td><?php echo $porta_alesado [$i]["diam_barra"] ?>
                          <input type="hidden" id="diam_barra_<?php echo $i ?>" value="<?php echo $porta_alesado[$i]["diam_barra"]; ?>" > 
                      </td>
                      <td><?php echo $porta_alesado [$i]["long_barra"] ?>
                          <input type="hidden" id="long_barra_<?php echo $i ?>" value="<?php echo $porta_alesado[$i]["long_barra"]; ?>" > 
                      </td>
                      <td><?php echo $porta_alesado [$i]["inserto"] ?>
                          <input type="hidden" id="inserto_<?php echo $i ?>" value="<?php echo $porta_alesado[$i]["inserto"]; ?>" >  
                      </td>
                      <td>
                      <div class="con-datos-rs clearfix">
                         <fieldset>
                            <select id="orientacion_<?php echo $i ?>">
                              <option value='Neutro'>Neutro</option>
                              <option value='Derecha'>Derecha</option>
                              <option value='Izquierda'>Izquierda</option>
                            </select>
                          </fieldset>
                      </div>
                      </td>
                      <td>
                            <div class="con-datos-rs clearfix">
                            <fieldset>
                                        <input type="hidden" id="idporta_alesado_<?php echo $i ?>" value="<?php echo $porta_alesado[$i]["idporta_alesado"]; ?>" >
                                        <input type="hidden" id="valor_<?php echo $i ?>" value="<?php echo $porta_alesado[$i]["valor"]; ?>" >
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
         //alert('aca');    
    
        var id=$('#idporta_alesado_'+i).val();
        var can=$('#cantidad_'+i).val();
        var ori=$('#orientacion_'+i).val();
        var valor=$('#valor_'+i).val();
        var det='Ref:'+$('#ref_'+i).val()+'-diam.ajugero:'+$('#diam_ajugero_'+i).val()+'-Diam.Barra:'+$('#diam_barra_'+i).val()+'-Long.Barra:'+$('#long_barra_'+i).val()+'-Inserto:'+$('#inserto_'+i).val()
        var tabla='porta_alesado';
        
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