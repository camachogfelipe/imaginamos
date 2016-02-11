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
               // cargar();
                function cargar(){
					
                        var id = "1";
                        var resultado = 0
                        $.get('verifica.php', { id: id } , function(resultado) {
                                //alert(resultado);
                                //$('#tiposelectS').empty().html(resultado);

                                if(resultado == 1){
                                        $('embed').remove();
                                       // $('body').append('<embed src="censor-beep-1.mp3" autostart="true" hidden="true" loop="false">');
                                }else{
                                   // $('body').append('<embed src="" autostart="true" hidden="true" loop="false">');
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
				
               // var mil=self.setInterval(function(){cargar()},5000);
/*                llenar();
                function llenar(){
					
                    $.ajax({
                        url: "ajax_7.php",
                        type: "POST",
                        dataType: "json",
                        success: function(output_string){
                            $('#contModal').html(output_string);
                            
                            
                        } 
                    }); 
                }
                */
                //var mil1=self.setInterval(function(){llenar()},30000);

        }); 
        
       /* setInterval(function() {
               location.reload();
        }, 8500); */
        </script>
        <style type="text/css">
             .btn-proceso {color:#ffffff; padding:2px; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); font-size: 12px; text-align: center; width: 92px; 
                          margin: 0 auto; margin-left: 10px ; 
                          background-color: #da4f49; background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f); 
                          background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f)); 
                          background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f); 
                          background-image: -o-linear-gradient(top, #ee5f5b, #bd362f); 
                          background-image: linear-gradient(to bottom, #ee5f5b, #bd362f); 
                          background-repeat: repeat-x; 
                          border-color: #bd362f #bd362f #802420; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); 
                          filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffbd362f', GradientType=0); filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);}
        </style>
    </head>
    <!--<body onload="setInterval('setInterval()')">-->
    <body>
        <?php include 'header.php'; ?>
          <div class="reportes">
            <div class="con-reportes">
                <div class="contenedor-info">
                    <form action="" method="POST" id="part1">
                    <h2 id="foo">Solicitudes En Proceso</h2>
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
  
                                $mResoult = $objecta->EstadoventaProceso();
                                for ($i = 0, $fin = count($mResoult); $i < $fin; $i++) {
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $mResoult[$i]['nombre_Estado']; ?></td>
                                        <td><?php echo $mResoult[$i]['nombre_Cliente'] ?></td>
                                        <td><?php echo $mResoult[$i]['celular_Cliente'] ?></td>
                                        <td><?php echo $mResoult[$i]['nombre_Plan'] ?></td>
                                        <td><?php echo $mResoult[$i]['fecha_Venta'] ?></td>
                                        <td>
                                            <input type="checkbox" name="ventas[]" id="ventas_<?php echo $i ?>" value="">
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?> 
                                 
                            </tbody>

                        </table>
                        <input type='submit' value='Enviar' id='enviar' name='enviar' style='float: left;margin-left: 30px;margin-top: 5px;' class='btn-small btn-primary'/>
                        </div>
                    </form>                 
                </div>
            </div>
              <?php
                 if (isset($_POST['enviar'])) {
                     //echo "aca..";
                     $objecta->SetVentaAdminPross($_POST['admin']);
                 }
               ?>
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