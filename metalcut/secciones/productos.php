<?php include("head.php"); 
  $idproductos_referido=$_REQUEST['idproductos_referido'];
  $cProductos_referido = new Dbproductos_referido();
  $mDataR = array("where"=>"idproductos_referido=".$idproductos_referido);
  $productos_referido = $cProductos_referido->getListOne($mDataR);
 // print_r($productos_referido);
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
          <div class="con-torn-img"><img src="assets/img/productos_referido/<?php echo $productos_referido['imagen'] ?>" width="396" height="450" alt=""></div>
          <div class="con-torn-info">
            <div class="torn-hd">
              <h1><?php echo $productos_referido['titulo'] ?>
                  <input type="hidden" id="ref_1" value="<?php echo $productos_referido['titulo'] ?>" >
              </h1>
            </div>
            <div class="torn-info">
              <div class="scroll-wrap">
                <ul>
                  <li><?php echo $productos_referido['texto'] ?>
                      <input type="hidden" id="det_1" value="<?php echo $productos_referido['texto'] ?>" >
                  </li>
                </ul>
              </div>
            </div>
            <div class="torn-fn">
            	<form class="torn-fm" method="post">
              	<fieldset>
                	<label>
                  	<strong>Costo:</strong>
                    <strong class="costo">$<?php if (!empty($_SESSION['id'])){ echo $productos_referido['valor'] ?>
                    <input type="hidden" id="valor_1" value="<?php echo $productos_referido["valor"]; ?>" >
                    <?php } ?>
                    </strong>
                  </label>
                    <input type="hidden" id="idproductos_referido_1" value="<?php echo $productos_referido["idproductos_referido"]; ?>" >
                  <label>
                        
                  	<strong>Cantidad:</strong>
                  	<input placeholder="0" id="cantidad_1" name="cantidad_1" onkeypress="return soloNumeros(event)" onpaste="return soloNumeros(event)">
                  </label>
                </fieldset>
                <fieldset>
                	<a href="#modal-ref" onclick="comprar('1');" class="submit-torn modals-act"></a>
                </fieldset>
              </form>
            </div>
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
    
        var id=$('#idproductos_referido_'+i).val();
       // alert(id);
        var can=$('#cantidad_'+i).val();
        var ori='';
        var valor=$('#valor_'+i).val();
       // var det='Ref:'+$('#ref_'+i).val()+'-Diam.Corte:'+$('#diam_corte_'+i).val()+'-Diam.Espigo:'+$('#diam_espigo_'+i).val()+'-Long.Total:'+$('#long_total_'+i).val()+'-No.Insertos:'+$('#n_insertos_'+i).val()+'-Inserto:'+$('#inserto_'+i).val()+'-Angulo.ataque:'+$('#angulo_ataque_'+i).val()
        var det='Producto:'+$('#ref_'+i).val()+'-Detalle:'+$('#det_'+i).val();
        var tabla='productos_referido';
        
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