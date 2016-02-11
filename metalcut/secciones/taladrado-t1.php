<?php include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); 
         $idtaladrado=$_REQUEST['idtaladrado'];
         
         $cPorta_taladrado= new Dbporta_taladrado();
         $mDataP = array("where"=>"idtaladrado='".$idtaladrado."'");
         $porta_taladrado = $cPorta_taladrado->getList2($mDataP);
         //$porta_taladrado = $cPorta_taladrado->getList();
         $cant = count($porta_taladrado);
        // print_r($porta_taladrado);
         
         $cImg_taladrado= new Dbimg_taladrado();
         $mDataI = array("where"=>"idimg_taladrado=1");
         $img_taladrado = $cImg_taladrado->getListOne($mDataI);
        ?>
  
  <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>
    
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>
        	Resultado
        	<a href="javascript:history.back()"><div class="back-vn"></div></a>
        </h1>
        <div class="rs-tabla-img"><img src="assets/img/img_taladrado/<?php echo $img_taladrado['imagen'] ?>" width="600" alt=""></div>
        <div class="sep-line"></div>
        <div class="con-tabla-rs">
          <div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs">
              <thead>
                <tr>
                  <th width="80">Referencia</th>
                  <th width="95">Diam. Corte</th>
                  <th width="95">Long. Corte</th>
                  <th width="95">Long. Total</th>
                  <th width="95">Diam. Espigo</th>
                  <th width="94">Rosca</th>
                  <th width="94">Inserto</th>
                  <th width="80">Cantidad</th>
                  <th width="172">Selecci&#243;n</th>
                </tr>
              </thead>
              <tbody>
                  <?php for($i = 0 ; $i < $cant ; $i++){ ?>
                <tr>
                  <td><?php echo $porta_taladrado [$i]["ref"] ?>
                      <input type="hidden" id="ref_<?php echo $i ?>" value="<?php echo $porta_taladrado[$i]["ref"]; ?>" >
                  </td>
                  <td><?php echo $porta_taladrado [$i]["diam_corte"] ?>
                      <input type="hidden" id="diam_corte_<?php echo $i ?>" value="<?php echo $porta_taladrado[$i]["diam_corte"]; ?>" >
                  </td>
                  <td><?php echo $porta_taladrado [$i]["long_corte"] ?>
                      <input type="hidden" id="long_corte_<?php echo $i ?>" value="<?php echo $porta_taladrado[$i]["long_corte"]; ?>" >
                  </td>
                  <td><?php echo $porta_taladrado [$i]["long_total"] ?>
                      <input type="hidden" id="long_total_<?php echo $i ?>" value="<?php echo $porta_taladrado[$i]["long_total"]; ?>" >
                  </td>
                  <td><?php echo $porta_taladrado [$i]["diam_espigo"] ?>
                      <input type="hidden" id="diam_espigo_<?php echo $i ?>" value="<?php echo $porta_taladrado[$i]["diam_espigo"]; ?>" >
                  </td>
                  <td><?php echo $porta_taladrado [$i]["rosca"] ?>
                      <input type="hidden" id="rosca_<?php echo $i ?>" value="<?php echo $porta_taladrado[$i]["rosca"]; ?>" >
                  </td>
                  <td><?php echo $porta_taladrado [$i]["inserto"] ?>
                      <input type="hidden" id="inserto_<?php echo $i ?>" value="<?php echo $porta_taladrado[$i]["inserto"]; ?>" >
                  </td>
                  <td>
                  	<div class="con-datos-rs clearfix">
                    	<fieldset>
                                        <input type="hidden" id="idporta_taladrado_<?php echo $i ?>" value="<?php echo $porta_taladrado[$i]["idporta_taladrado"]; ?>" >
                                        <input type="hidden" id="valor_<?php echo $i ?>" value="<?php echo $porta_taladrado[$i]["valor"]; ?>" >
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
    
        var id=$('#idporta_taladrado_'+i).val();
        var can=$('#cantidad_'+i).val();
        var ori=$('#orientacion_'+i).val();
        var valor='';
        var det='Ref:'+$('#ref_'+i).val()+'-Diam.Corte:'+$('#diam_corte_'+i).val()+'-Long.Corte:'+$('#long_corte_'+i).val()+'-Long.Total:'+$('#long_total_'+i).val()+'-Diam.Espigo:'+$('#diam_espigo_'+i).val()+'-Rosca:'+$('#rosca_'+i).val()+'-Inserto:'+$('#inserto_'+i).val()
        var tabla='porta_taladrado';
        
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