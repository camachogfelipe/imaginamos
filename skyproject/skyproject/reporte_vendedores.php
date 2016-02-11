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
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/data.js"></script>
        <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.footer-ahorranito').ahorranito({theme:'oscuro', type:3});
        });
        </script>
        <script>
        $(document).ready(function(){
             $( "#fecha3" ).datepicker({
                changeMonth: true,
                changeYear: true
               });
               
           $('.filtro1').click(function(){
                //alert('Hola mundo');
                $.ajax({
                         async: true,
                         type: "POST",
                         dataType: "json",
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         url: "ajax.php",
                         data: {añovendedor1:$("#año1").val(),vendedor1:$("#vendedor1").val()},
                         success: mostrarDatos,
                         timeout: 4000,
                         error: errorEnvio
                 });
    
            }); 
        
        $('.filtro2').click(function(){
                //alert('Hola mundo');
                $.ajax({
                         async: true,
                         type: "POST",
                         dataType: "json",
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         url: "ajax.php",
                         data: {añovendedor2:$("#año2").val(),mes2:$("#mes2").val(),vendedor2:$("#vendedor2").val()},
                         success: mostrarDatos,
                         timeout: 4000,
                         error: errorEnvio
                 });
    
            });
            
            $('.filtro3').click(function(){
                //alert('Hola mundo');
                $.ajax({
                         async: true,
                         type: "POST",
                         dataType: "json",
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         url: "ajax.php",
                         data: {añovendedor3:$("#fecha3").val(),vendedor3:$("#vendedor3").val()},
                         success: mostrarDatos,
                         timeout: 4000,
                         error: errorEnvio
                 });
    
            });
        });
        
        
        function errorEnvio() {
            alert('Seleccione vendedor para ejecutar la busqueda');
                 }
            
           function mostrarDatos(datos)
                {
                    $("#table").height(500)
                    $("#table").html(datos.tablita);
                    
                }
           function Enviarexcel2(){
                var año1 = document.getElementById('año1').value;
                var vendedor1 = document.getElementById('vendedor1').value;
                location.href="excel.php?excel2="+año1+"&vendedor1="+vendedor1;  
            }
            
            function Enviarexcel3(){
                var ano2 = document.getElementById('año2').value;
                var vendedor2 = document.getElementById('vendedor2').value;
                var mes2 = document.getElementById('mes2').value;
                location.href="excel.php?excel3="+ano2+"&vendedor2="+vendedor2+"&mes2="+mes2;  
            }
            function Enviarexcel4(){
                var fecha3 = document.getElementById('fecha3').value;
                var vendedor3 = document.getElementById('vendedor3').value;
                location.href="excel.php?excel4="+fecha3+"&vendedor3="+vendedor3;  
            }
        </script>


    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="reportes">
            <div class="con-reportes">
                <div class="contenedor-info nav-header">
                    <h2>Reporte Vendedores</h2>
                    <form action="" method="POST" id="part1">
                        <table>
                            <tr>
                                <td><center>Año</center></td>
                                <td><center>Vendedor</center></td>
                                <td><center></center></td>
                            </tr>
                            <tr>
                                <td>
                                   <select name="año" id="año1" style="float: left;margin-right: 5px; width: 155px">
                                        <option value="seleccione">- Seleccione -</option>

                                           <?php 
                                            $mResoult = $objecta->GetTiendasFechas();
                                            for ($a = 0; $a < count($mResoult); $a++) {
                                            $fecha = $mResoult[$a]['fecha_Registro'];
                                            list($año, $mes, $dia) = explode("-", $fecha)
                                            ?>
                                            <option value="<?php echo $año?>"><?php echo $año?></option>
                                            <?php 
                                            }
                                            ?>
                                    </select> 
                                </td>
                                <td>
                                  <select name="vendedor1" id="vendedor1" style="float: left;margin-right: 5px; width: 155px">
                                    <option value="seleccione">- Seleccione -</option>
                                    <option value="0">ALL</option>
                                    <?php 
                                        $mResoult2 = $objecta->GetVendedores();
                                        for ($b = 0; $b < count($mResoult2); $b++) {
                                        ?>
                                        <option value="<?php echo $mResoult2[$b]['id_Usuario'];?>"><?php echo $mResoult2[$b]['nombre_Usuario'];?></option>
                                        <?php 
                                        }
                                        ?>
                                </select>  
                                </td>
                                <td>
                                    <input type="button" class="btn-primary filtro1" value="Buscar"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <form action="" method="POST" id="part2" >
                        <table>
                            <tr>
                                <td><center>Año</center></td>
                                <td><center>Mes</center></td>
                                <td><center>Vendedor</center></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="año" id="año2" style="float: left;margin-right: 5px; width: 155px">
                                        <option value="seleccione">- Seleccione -</option>
                                        <?php 
                                            $mResoult = $objecta->GetTiendasFechas();
                                            for ($a = 0; $a < count($mResoult); $a++) {
                                            $fecha = $mResoult[$a]['fecha_Registro'];
                                            list($año, $mes, $dia) = explode("-", $fecha)
                                            ?>
                                            <option value="<?php echo $año?>"><?php echo $año?></option>
                                            <?php 
                                            }
                                            ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="mes2" id="mes2" style="float: left;margin-right: 5px; width: 155px">
                                        <option value="2008">- Seleccione -</option>
                                        <option value="0">ALL</option>
                                         <?php                        
                                         for ($a =1; $a <= 12; $a++) {
                                                $mes=$a;
                                                if ($a<10) $mes='0'.$a;
                                                ?>
                                                <option value="<?php echo $mes?>"><?php echo $mes?></option>
                                                <?php 
                                            }
                                            ?>
                                    </select>
                                </td>
                                <td>
                                   <select name="vendedor2" id="vendedor2" style="float: left;margin-right: 5px; width: 155px">
                                        <option value="seleccione">- Seleccione -</option>
                                        <option value="0">ALL</option>
                                        <?php 
                                            $mResoult2 = $objecta->GetVendedores();
                                            for ($b = 0; $b < count($mResoult2); $b++) {
                                            ?>
                                            <option value="<?php echo $mResoult2[$b]['id_Usuario'];?>"><?php echo $mResoult2[$b]['nombre_Usuario'];?></option>
                                            <?php 
                                            }
                                            ?>
                                    </select> 
                                </td>
                                <td>
                                    <input type="button" class="btn-primary filtro2" style="float: left;" value="Buscar"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <form action="" method="POST" id="part3">
                        <table border="0">
                            <tr>
                                <td><center>Dia</center></td>
                                <td><center>Vendedor</center></td>
                            </tr>
                            <tr>
                                <td><input type="text" id="fecha3" name="dia" style="width: 120px;"/></td>
                                <td><select name="vendedor3" id="vendedor3" placeholder="Vendedor" style="width: 155px">
                            <option value="seleccione">- Seleccione -</option>
                            <option value="0">ALL</option>
                            <?php 
                                $mResoult3 = $objecta->GetVendedores();
                                for ($c = 0; $c < count($mResoult3); $c++) {
                                ?>
                                <option value="<?php echo $mResoult3[$c]['id_Usuario'];?>"><?php echo $mResoult3[$c]['nombre_Usuario'];?></option>
                                <?php 
                                }
                                ?>
                        </select>
                        </td>
                        <td> <input type="button" class="btn-primary filtro3"  value="Buscar"/></td>
                            </tr>
                        </table>
                        
                        
                        
                        
                       
                        
                    </form>
                    
                    <div id="demo" style="float: left;width: 835px;">
                        <div id='table' style=" overflow-x:hidden; overflow-y:auto;"></div>
                    </div>
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
    </body>
</html>
