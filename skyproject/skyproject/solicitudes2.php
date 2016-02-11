<?php
require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/skyproject.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
        <link href="css/demo_table.css" rel="stylesheet" type="text/css">
        <link href="css/demo_page.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.footer-ahorranito').ahorranito({theme:'oscuro', type:3});
        });
        </script>
        <script>
         
            $(document).ready(function(){
                cargar();
                function cargar(){
					
                    $.ajax({
                        url: "ajax_5.php",
                        type: "POST",
                        dataType: "json",
                        success: function(output_string){
                            $('#example tbody').html(output_string);
                            
                            //document.getElementById('table').innerHTML = '';
                        } // End of success function of ajax form
                    }); // End of ajax call
					
					var id = "1";
					
					$.get('verifica.php', { id: id } , function(resultado) {
						//alert(resultado);
						//$('#tiposelectS').empty().html(resultado);
                                                                    
						if(resultado == 1){
   							$('embed').remove();
							$('body').append('<embed src="censor-beep-1.mp3" autostart="true" hidden="true" loop="false">');
						}
						
					});
					
					
					
					/*
					$('#foo').live('click', function() {
						//alert("prueba...");
						verif();
					});
					$('#foo').trigger('click');
					*/
                }
				/*
				function verif(){
					var add = 0;
					$('input[name^="control"]').each(function() {
						add += Number($(this).val());
					});
					//alert(add);	
				}
				*/
				
                var mil=self.setInterval(function(){cargar()},10000);
                llenar();
                function llenar(){
					
                    $.ajax({
                        url: "ajax_7.php",
                        type: "POST",
                        dataType: "json",
                        success: function(output_string){
                            $('#contModal').html(output_string);
                            
                            //document.getElementById('table').innerHTML = '';
                        } // End of success function of ajax form
                    }); // End of ajax call
                }
                
                var mil1=self.setInterval(function(){llenar()},30000);
                
               /* $('.btn-primary').click(function(e){
                    e.preventDefault();
                    id = $(this).attr('href');
                    id = id.split("#cont-");
                    id = id[1];
                    alert(id);
                });*/
		
        }); 
            
            
        </script>
    </head>
    <body>
        <?php include 'header.php'; ?>
          <div class="reportes">
            <div class="con-reportes">
                <div class="contenedor-info">
                    <form action="" method="POST" id="part1">
                    <h2 id="foo">Solicitudes</h2>
                    <div id="demo" style="float: left;width: 835px;overflow: auto; height: 300px;">
                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                            <thead >
                                <tr>
                                    <th>Estado</th>

                                    <th>Nombre Cliente</th>
                                    <th>Celular</th>
                                    <th>Plan</th>
                                    <th>Fecha y Hora</th>

                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
  <?php
                                $mResoult = $objecta->EstadoventaAdmin();
                                for ($i = 0, $fin = count($mResoult); $i < $fin; $i++) {
                                    ?>
                                    <tr class="odd gradeX">
                                        <td>Pendiente</td>

                                        <td><?php echo $mResoult[$i]['nombre_Cliente'] ?></td>
                                        <td><?php echo $mResoult[$i]['celular_Cliente'] ?></td>
                                        <td><?php echo $mResoult[$i]['nombre_Plan'] ?></td>
                                        <td><?php echo $mResoult[$i]['fecha_Venta'] ?></td>

                                        <td><input type="button" class="btn-small btn-primary" data-toggle="modal" href="#cont-<?php echo $mResoult[$i]['id_Venta']; ?>" value='Tomar pedido'></td>

                                    </tr>
                                    <?php
                                }
                                ?> 
                                 
                            </tbody>

                        </table>
                        </div>
                    </form>                 
                </div>
            </div>
            <div class="con-footer">
                <div class="cloud"></div>
                <div class="copy-footer">
                <p>&copy; 2013 <strong>SKYPROJECT</strong> - Todos los derechos reservados - Prohibida su
                reproducción parcial o total.</p>
                </div>
                <div class="copy-footer-2"><div class="footer-ahorranito"></div></div>
                </div>
          </div>
    </body>
</html>
<div id="contModal">
    
</div>
<?php
$mResoult = $objecta->EstadoventaAdmin();
for ($i = 0, $fin = count($mResoult); $i < $fin; $i++) {
    ?>

    <div id="cont-<?php echo $mResoult[$i]['id_Venta']; ?>" class="modal hide fade in" style="display: none;">
        <div class="modal-header" >
            <a class="close" data-dismiss="modal">x</a>
            <h3>Solicitud</h3>
        </div>
        <div class="modal-body">
           <!-- <form action="" method="POST" form="form1">
                <div style="float: left;margin-left: 100px;margin-top: 20px;width: 350px;height: 250px;border: 1px solid #888;">
                    <label style='float: left;margin-left: 30px;margin-top: 30px;'><strong>Tienda:</strong></label><label style='float: left;margin-left: 30px;margin-top: 30px'>Tienda las margaritas</label>
                    <label style='float: left;margin-left: 30px;margin-top: 5px;'><strong>Celular:</strong></label><label style='float: left;margin-left: 30px;margin-top: 5px;'><?php echo $mResoult[$i]['celular_Cliente'] ?></label>
                    <label style='float: left;margin-left: 30px;margin-top: 5px;'><strong>Plan:</strong></label><label style='float: left;margin-left: 30px;margin-top: 5px;'><?php echo $mResoult[$i]['nombre_Plan'] ?></label>
                    <label style='float: left;margin-left: 30px;margin-top: 5px;'><strong>Inserte Codigo:</strong></label><input type="text" name="codigo" style='float: left;margin-left: 30px;margin-top: 5px;width: 120px;'/>
                    <input type="submit" value='Enviar' id="enviar" name="enviar" style='float: left;margin-left: 30px;margin-top: 5px;' class='btn-small btn-primary'/>
                    <input type="button" value='Cancelar' style='float: left;margin-left: 5px;margin-top: 5px;' class='btn-small btn-primary'/>
                    <input type="text" name="admin" value="<?php echo $_SESSION["session_tienda"]; ?>" />
                    <input type="text" name="celular" value="<?php echo $mResoult[$i]['celular_Cliente']; ?>" />
                    <input type="text" name="plan" value="<?php echo $mResoult[$i]['id_Plan']; ?>" />
                    <input type="hidden" name="cliente" value="<?php echo $mResoult[$i]['id_Cliente']; ?>" />
                    <input type="hidden" name="idventa" value="<?php echo $mResoult[$i]['id_Venta']; ?>" />
                    <input type="hidden" name="vendedor" value="<?php echo $mResoult[$i]['id_Usuario']; ?>" /> -->
                    <?php
                    if (isset($_POST['admin'])) {
                     $objecta->SetVentaAdmin($_POST['admin'], $_POST['cliente'], $_POST['idventa'], $_POST['celular'], $_POST['plan'], $_POST['codigo'], $_POST['vendedor']);
                   }
                    ?>
              <!--  </div>-->
                <?php
                //print_r($_POST);
                ?>
           <!-- </form> -->
        </div>

    </div>
    <?php
}
?>
<script>
    
    function validarForm(formulario) {
    if(formulario.codigo.value.length==0) { //¿Tiene 0 caracteres?
       formulario.codigo.focus();    // Damos el foco al control
      alert('Se Debe digitar el Codigo'); //Mostramos el mensaje
      return false; //devolvemos el foco
    }
    return true; //Si ha llegado hasta aquí, es que todo es correcto
    //window.location.href("solicitude.php?seccion=7");
  }

</script>