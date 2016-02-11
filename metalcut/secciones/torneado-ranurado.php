<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); 
        
         $cPorta_ranurado= new Dbporta_ranurado();
				 if(isset($_GET['idranurado'])) $mData = array("where"=>"idranurado=".$_GET['idranurado']);
				 else $mData = NULL;
         $porta_ranurado = $cPorta_ranurado->getList2($mData);
         $cant = count($porta_ranurado);
         
         $cImg_ranurado= new Dbimg_ranurado();
				 if(isset($_GET['idranurado'])) $mDataI = array("where"=>"idimg_ranurado=".$_GET['idranurado']);
				 else $mDataI = NULL;
         $img_ranurado = $cImg_ranurado->getListOne($mDataI);
        
        ?>
  
 <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>
        	Resultado
        	<a href="javascript:history.back()"><div class="back-vn"></div></a>
        </h1>
        <?php if($cant > 0) : ?>
        <div class="rs-tabla-img"><img src="assets/img/img_ranurado/<?php echo $img_ranurado['imagen'] ?>" width="600" alt=""></div>
        <div class="sep-line"></div>
        <div class="con-tabla-rs">
          <div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs">
              <thead>
                <tr>
                  <th width="80">Referencia</th>
                  <th width="132">Long. Corte</th>
                  <th width="132">Prof. Corte</th>
                  <th width="132">Long. Total</th>
                  <th width="132">Tama&ntilde;o</th>
                  <th width="132">Inserto</th>
                  <th width="80">Orientaci&#243;n</th>
                  <th width="80">Cantidad</th>
                  <th width="172">Selecci&#243;n</th>
                </tr>
              </thead>
              <tbody>
                  <?php for($i = 0 ; $i < $cant ; $i++){ ?>
                    <tr>
                      <td>
                          <?php echo $porta_ranurado[$i]["ref"] ?>
                              <input type="hidden" id="ref_<?php echo $i ?>" value="<?php echo $porta_ranurado[$i]["ref"]; ?>" >
                          </td>
                          <td><?php echo $porta_ranurado[$i]["diam_corte"] ?>
                              <input type="hidden" id="diam_corte_<?php echo $i ?>" value="<?php echo $porta_ranurado[$i]["diam_corte"]; ?>" >
                          </td>
                          <td><?php echo $porta_ranurado[$i]["diam_espigo"] ?>
                              <input type="hidden" id="diam_espigo_<?php echo $i ?>" value="<?php echo $porta_ranurado[$i]["diam_espigo"]; ?>" >
                          </td>
                          <td><?php echo $porta_ranurado[$i]["long_total"] ?>
                              <input type="hidden" id="long_total_<?php echo $i ?>" value="<?php echo $porta_ranurado[$i]["long_total"]; ?>" >
                          </td>
                          <td><?php echo $porta_ranurado[$i]["n_insertos"] ?>
                              <input type="hidden" id="n_insertos_<?php echo $i ?>" value="<?php echo $porta_ranurado[$i]["n_insertos"]; ?>" >
                          </td>
                          <td><?php echo $porta_ranurado[$i]["inserto"] ?>
                              <input type="hidden" id="inserto_<?php echo $i ?>" value="<?php echo $porta_ranurado[$i]["inserto"]; ?>" >
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
                                        <input type="hidden" id="idporta_ranurado_<?php echo $i ?>" value="<?php echo $porta_ranurado[$i]["idporta_ranurado"]; ?>" >
                                        <input type="hidden" id="valor_<?php echo $i ?>" value="<?php echo $porta_ranurado[$i]["valor"]; ?>" >
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
        <?php else : ?>
        <div class="sep-line"></div>
        No existe portaherramientas
        <?php endif; ?>
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