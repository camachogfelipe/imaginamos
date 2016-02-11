<?php

require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();
$idventa=$_REQUEST['idventa'];
$result = $objecta->EstadoventaAdmin2($idventa);
//$output_string = '';
$result1=$result[0];
//print_r($result1['id_Venta']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/skyproject.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.footer-ahorranito').ahorranito({theme:'oscuro', type:3});
        });
        </script>
<?
    //for ($i = 0, $fin = count($result); $i < $fin; $i++) {
        $objecta->SetEstado($idventa);                                 
?>
         </head>
    <body>
       <form action="" method="POST" onsubmit="return validarForm(this);" form="form1">
        <?php include 'header.php'; ?>
        <div class="reportes2">
                <div class="con-reportes2">
                    <div class="contenedor-info2 nav-header" >
                        <h2 id="creditos">Trafico de Solicitudes</h2>
                            <!--<div id="cont-" class="modal hide fade in" style="display: none;">
                                  <div class="modal-body" style="border: 1pt solid #fbb; text-align: center; alignment-adjust: central">-->
                                      <?php //echo 'hola-> '.$result1['id_Venta']; ?>
                                    <table align="center" border="0" style=" margin-left: 300px " >
                                        <tr>
                                            <td><label>Tienda:</label></td>
                                            <td><label><?php echo $result1['nombre_Tienda'] ?></label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Vendedor:</label></td>
                                            <td><label><?php echo $result1['nombre_Usuario']?></label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Cliente</label></td>
                                            <td><label><?php echo $result1['nombre_Cliente'] ?></label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Celular</label></td>
                                            <td><label><?php echo $result1['celular_Cliente'] ?></label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Plan</label></td>
                                            <td><label><?php echo $result1['nombre_Plan'] ?></label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Inserte Codigo</label></td>
                                            <td><input type='text' name='codigo' id='codigo' style='float: left;margin-left: 30px;margin-top: 5px;width: 120px;'/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type='submit' value='Enviar' id='enviar' name='enviar' style='float: left;margin-left: 30px;margin-top: 5px;' class='btn-small btn-primary'/>
                                        <input type='button' value='Cancelar' data-dismiss='modal' style='float: left;margin-left: 5px;margin-top: 5px;' class='btn-small btn-primary'/>
                                            </td>
                                        </tr>
                                    </table>
                                        <input type='hidden' name='admin' value=<?php echo  $_SESSION["session_tienda"] ?> />
                                        <input type='hidden' name='celular' value=<?php echo $result1['celular_Cliente'] ?> />
                                        <input type='hidden' name='plan' value=<?php echo  $result1['id_Plan'] ?> />
                                        <input type='hidden' name='cliente' value=<?php echo $result1['id_Cliente'] ?> />
                                        <input type='hidden' name='idventa' value=<?php echo $result1['id_Venta'] ?> />
                                        <input type='hidden' name='vendedor' value=<?php echo  $result1['id_Usuario'] ?> />
                                   <?php
                                     if (isset($_POST['enviar'])) {
                                         //echo "aca..";
                                         $objecta->SetVentaAdmin($_POST['admin'], $_POST['cliente'], $_POST['idventa'], $_POST['celular'], $_POST['plan'], $_POST['codigo'], $_POST['vendedor']);
                                     }
                                   ?>
                                <!--</div>  
                            </div>-->
                    </div>
                </div>
           </div>
         </form>
   </div>
   </div>
   
   <?php
//}

?>
<script>
    function validarForm(formulario) {
    if(formulario.codigo.value.length==0) { //¿Tiene 0 caracteres?
       formulario.codigo.focus();    // Damos el foco al control
      alert('Se Debe digitar el Codigo'); //Mostramos el mensaje
      return false; //devolvemos el foco
    }
    return true; //Si ha llegado hasta aquí, es que todo es correcto
  }
    
</script> 