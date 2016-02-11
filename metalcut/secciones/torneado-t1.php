<?php include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); 
         $cPorta_cilindrado= new Dbporta_cilindrado();
         
         if(isset($_REQUEST["material"])){
            $porta_cilindrado = $cPorta_cilindrado->getList2(array('where'=>"idmaterial='".$_REQUEST["material"]."'"));
         }else{
             $porta_cilindrado = $cPorta_cilindrado->getList();
         }
         
         $cant = count($porta_cilindrado);
         
         $cImg_cilindrado= new Dbimg_cilindrado();
         $mDataI = array("where"=>"idimg_cilindrado=1");
         $img_cilindrado = $cImg_cilindrado->getListOne($mDataI);
        
        ?>
  
 <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>
 
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>
        	Resultado
        	<a href="javascript:history.back()"><div class="back-vn"></div></a>
        </h1>
        <div class="rs-tabla-img"><img src="assets/img/img_cilindrado/<?php echo $img_cilindrado['imagen'] ?>" width="600" alt=""></div>
        <div class="sep-line"></div>
        <div class="con-tabla-rs">
          <div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs">
              <thead>
                <tr>
                  <th width="80">Referencia</th>
                  <th width="264">Tama&#241;o</th>
                  <th width="264">Longitud</th>
                  <th width="80">Material</th>
                  <th width="80">Orientaci&#243;n</th>
                  <th width="80">Cantidad</th>
                  <th width="172">Selecci&#243;n</th>
                </tr>
              </thead>
              <tbody>
                  <?php for($i = 0 ; $i < $cant ; $i++){ ?>
                  <tr>
                    <td><?php echo $porta_cilindrado [$i]["ref"] ?>
                        <input type="hidden" id="ref_<?php echo $i ?>" value="<?php echo $porta_cilindrado[$i]["ref"]; ?>" >
                    </td>
                    <td><?php echo $porta_cilindrado [$i]["tamano"] ?>
                         <input type="hidden" id="tamano_<?php echo $i ?>" value="<?php echo $porta_cilindrado[$i]["tamano"]; ?>" >
                    </td>
                    <td><?php echo $porta_cilindrado [$i]["longitud"] ?>
                        <input type="hidden" id="longitud_<?php echo $i ?>" value="<?php echo $porta_cilindrado[$i]["longitud"]; ?>" >  
                    </td>
                    <td><?php echo strtoupper($porta_cilindrado [$i]["idmaterial"]) ?>
                        <input type="hidden" id="material_<?php echo $i ?>" value="<?php echo $porta_cilindrado[$i]["idmaterial"]; ?>" >  
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
                                        <input type="hidden" id="idporta_cilindrado_<?php echo $i ?>" value="<?php echo $porta_cilindrado[$i]["idporta_cilindrado"]; ?>" >
                                        <input type="hidden" id="valor_<?php echo $i ?>" value="<?php echo $porta_cilindrado[$i]["valor"]; ?>" >
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
    
        var id=$('#idporta_cilindrado_'+i).val();
        var can=$('#cantidad_'+i).val();
        var ori=$('#orientacion_'+i).val();
        var valor=$('#valor_'+i).val();
        var det='Ref:'+$('#ref_'+i).val()+'-Tamano:'+$('#tamano_'+i).val()+'-Longitud:'+$('#longitud_'+i).val()
        var tabla='porta_cilindrado';
        
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