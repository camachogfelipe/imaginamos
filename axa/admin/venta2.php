<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
if( !isset($_SESSION['admin']) ){
    //header("location: ./index.php");
    exit;
}
include("fckeditor/fckeditor.php") ;

include ("../php/dao/venta2DAO.php");
include ("../php/entities/venta2.php");

//$fecha_ini='2013-01-01';
//$fecha_final='2013-07-09';
$fecha_ini=isset($_POST['fechaini']) ? $_POST['fechaini'] : date('Y-m-d') ;
$fecha_final=isset($_POST['fechafin']) ? $_POST['fechafin'] : date('Y-m-d') ;
//echo $fecha_ini.'-->1';
$venta = new venta2DAO();
$total=0;
if( isset($_post['buscar']) ){ 
  //  echo "hola";
    $venta2 = $venta->getVenta2($fecha_ini, $fecha_final);
    $total=  count($venta2);
}else{
    //$venta2 = $venta->getVenta2($fecha_ini, $fecha_final);

}

//print"<pre>";
//print_r($venta2);
//print"</pre>";

?>

<div class="titulos">
  <div class="titulos_texto1">Valor costo/plan
    <div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div>
  </div>
  <div class="titulos_texto2"> </div>
</div>
<!-- FIN TITULOS -->
<div class="contenido_marco_sup"></div>
<div class="contenido_fondo">
  <div class="subcontenido">
    <div class="subtitulos">Un total de <?php echo $total;?> Valor costo/plan publicada
      <div class="subtitulos_menu"> 
        <!--  <form id="form_boton" ><input type="button" value="Adicionar Nuevo Equipo" id="nuevo" /></form> --> 
      </div>
    </div>
    <div class="subcontenido2"> 
      <!-- action="https://tarjetasdeasistencia-axa.com/recibe.php"  -->
      
      <link rel="stylesheet" href="jquery_ult/css/smoothness/jquery-ui-1.10.3.custom.css" />
      <script src="jquery_ult/js/jquery-1.9.1.js"></script> 
      <script src="jquery_ult/js/jquery-ui-1.10.3.custom.js"></script> 
			<script>
      $(function() {
				$( "#fechaini" ).datepicker({dateFormat: 'yy-mm-dd'});
				$( "#fechafin" ).datepicker({dateFormat: 'yy-mm-dd'});
      });
      function buscar1(){
				//    alert('aca..')
				var ajaxLoader = "<img src='../imgenes/contenido/ajax-loader6.gif' alt='loading...' />";           
				var fi= jQuery("#fechaini").val();
				var ff = jQuery("#fechafin").val();
				//alert(fi+'--'+ff)      
				jQuery("#carreraAjax").html(ajaxLoader).load('buscarventas.php', {fechaini: fi, fechafin:ff, status: 1}, function(response) {				
					if(response) {
						jQuery("#carreraAjax").css('display', '');
					} else {
						jQuery("#carreraAjax").css('display', 'none');
					}
				});
      }
      
      function enviar1(tipo) {
				if (tipo == "") {
					tipo = "cliente";
				}
				var categorias = new Array();
				//var ref_no_generadas = new Array();
	      $("input[name='campo[]']:checked").each(function() {
					var id = this.id;
					var venta = id+"_venta";
					var ref = id+"_ref";
					//if($("#"+venta).val() == "SI") {
						categorias.push($(this).val());
					//}
					/*else {
						ref_no_generadas.push($("#"+ref).val());
					}*/
      	});
				/*if(ref_no_generadas.length > 0) {
					alert("No se pueden generar los archivos de las referencias siguientes sino estan enviados los correos:\n"+ref_no_generadas);
				}*/
				// alert(categorias);
				if(tipo == "cliente") {
					$.ajax({
						dataType: 'json',
						type: 'POST',
						url: '../recibe.php?campo='+categorias,
						data: {tipo: tipo},                
						success:function(data){
							if (data.success == true){
								alert(data.message);
								$(location).attr('href','menuAdmin.php?s=venta2');
							}
							else{                        
								$('#msg-error').html('<p>' + data.message + '</p>');
								$('#msg-error').addClass('msg-error');
							}
						},
						error: function(data,error,errorThrown){alert(error + errorThrown);}
					});
				}
				else if(tipo == "csv") {
					if(categorias != "") window.open("../recibe.php?campo="+categorias+"&tipo=csv");
					else alert("Seleccione al menos un item");
				}
      }
      
      </script>
      <form  id="myform"  method="post" >
        <table  border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>Fecha Inicial</td>
            <td><input type="text" id="fechaini" name="fechaini" value="<?php echo date('Y-m-d'); ?>" ></td>
            <td>Fecha Final</td>
            <td><input type="text" id="fechafin" name="fechafin" value="<?php echo date('Y-m-d'); ?>"></td>
            <td><input type="button" id="buscar" name="buscar" value="Buscar" onclick="buscar1();" />
            		<!--<input type="submit" id="buscar" name="buscar" value="Buscar" />--></td>
          </tr>
        </table>
        <div id="buscador">
          <div class="rowElem"></div>
        </div>
        <div class="enunciados"></div>
        <div id="carreraAjax"> </div>
      </form>
    </div>
  </div>
  <!-- FIN SUBCONTENIDO --> 
</div>
<!-- FIN CONTENIDO FONDO -->
<div class="contenido_marco_inf"></div>