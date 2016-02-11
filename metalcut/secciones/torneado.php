<?php include("head.php"); 
  $idproducto_torneado=$_REQUEST['id1'];
  $cProducto_torneado = new Dbproducto_torneado();
  $mDataR = array("where"=>"idproducto_torneado in(".$idproducto_torneado . ")");
  $objProductos = $cProducto_torneado->getList2($mDataR);
?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); ?>
  
  <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>
    
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <div class="con-full">
          <h1>
            Resultado
            <a href="javascript:history.back()"><div class="back-vn"></div></a>
          </h1>
          <div class="sep-line"></div>
          
          <?php foreach($objProductos as $productos){
              ?>
          <div class="con-torn-img"><img src="assets/img/producto_torneado/<?php echo $productos['imagen'] ?>" width="396" height="450" alt=""></div>
          <div class="con-torn-info">
            <div class="torn-hd">
              <h1>Resumen</h1>
            </div>
            <div class="torn-info">
              <div class="scroll-wrap">
                  
                <ul>
                  <li><strong>Tipo</strong><?php if ($productos['idtipo_inserto']=='A'){ echo 'Alesado'; }else{ echo "Cilindrado"; }  ?></li>
                  <li><strong>Material</strong><?php echo strtoupper($productos['idmateriales']) ?></li>
                  <li><strong>Geometria</strong><?php echo strtoupper($productos['idgeometria']) ?></li>
                  <li><strong>Angulo</strong><?php echo strtoupper($productos['idangulo']) ?></li>
                  <li><strong>Longitud</strong><?php echo $productos['idlongitud'] ?></li>
                  <li><strong>Espsor</strong><?php echo $productos['idespesor'] ?></li>
                  <li><strong>Radio</strong><?php echo $productos['idradio'] ?></li>
                  <li><strong>Tipo Corte</strong><?php echo $productos['idtipo_corte'] ?></li>
                </ul>
                  <?php 
                  
                    $descr='Tipo'.$productos['idtipo_inserto'];
                    $descr.='Material'.$productos['idmateriales'];
                    $descr.='Geometria'.$productos['idgeometria'];
                    $descr.='Angulo'.$productos['idangulo'];
                    $descr.='Logitud'.$productos['idlongitud'];
                    $descr.='Espesor'.$productos['idespesor'];
                    $descr.='Radio'.$productos['idradio'];
                    $descr.='Tipo Corte'.$productos['idtipo_corte'];
                    
                    $descr1=$productos['idtipo_inserto'];
                    $descr1.=$productos['idmateriales'];
                    $descr1.=$productos['idgeometria'];
                    $descr1.=$productos['idangulo'];
                    $descr1.=$productos['idlongitud'];
                    $descr1.=$productos['idespesor'];
                    $descr1.=$productos['idradio'];
                    $descr1.=$productos['idtipo_corte'];
                  ?>
                  <input type="hidden" id="det_1" value="<?php echo $descr ?>" >
                  <input type="hidden" id="ref_1" value="<?php echo $descr1 ?>" >
                  <input type="hidden" id="idproductos_1" value="<?php echo $productos["idproducto_torneado"]; ?>" >
              </div>
            </div>
            <div class="torn-fn">
            	<form class="torn-fm" method="post">
              	<fieldset>
                	<?php if (!empty($_SESSION['id'])){
                            ?>
                    <label>
                  	<strong>Costo:</strong>
                    <strong class="costo">$
                        <?php
                            echo $productos['valor'] ?></strong>
                    <input type="hidden" id="valor_1" value="<?php echo $productos["valor"]; ?>" >
                    </label>
                    <?php } ?>
                    
                    
                  
                  <label>
                  	<strong>Cantidad:</strong>
                  	<input placeholder="0"  id="cantidad_1" name="cantidad_1" onkeypress="return soloNumeros(event)" onpaste="return soloNumeros(event)">
                  </label>
                </fieldset>
                <fieldset>
                	<a href="#modal-ref" onclick="comprar('1');" class="submit-torn modals-act"></a>
                </fieldset>
              </form>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>
<script>
    function comprar(i){
        // alert('aca');    
    
        var id=$('#idproductos_'+i).val();
       // alert(id);
        var can=$('#cantidad_'+i).val();
        var ori='';
        var valor=$('#valor_'+i).val();
       // var det='Ref:'+$('#ref_'+i).val()+'-Diam.Corte:'+$('#diam_corte_'+i).val()+'-Diam.Espigo:'+$('#diam_espigo_'+i).val()+'-Long.Total:'+$('#long_total_'+i).val()+'-No.Insertos:'+$('#n_insertos_'+i).val()+'-Inserto:'+$('#inserto_'+i).val()+'-Angulo.ataque:'+$('#angulo_ataque_'+i).val()
        var det='Producto:'+$('#ref_'+i).val()+'-Detalle:'+$('#det_'+i).val();
        var tabla='producto_torneado';
        
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