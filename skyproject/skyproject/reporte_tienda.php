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
        <link href="css/datepicker.css" rel="stylesheet" type="text/css">
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!--<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>-->
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
            $( "#date" ).datepicker({
                changeMonth: true,
                changeYear: true
               });
            
                $('#example2').dataTable();

           $("#tienda1").change(function () {
                   var td=$("#tienda1 option:selected").val();
                   //alert(td)
                   if (td!='0'){
                    $("#tienda1 option:selected").each(function () {
                         elegido=$(this).val();
                         $.post("ajax.php", { elegido: elegido }, function(data){
                        $("#vendedor1").html(data);
                         });      
                     });
                   }else{
                     $("#tienda1 option:selected").each(function () {
                        $.post("ajax.php", { elegido: 0 }, function(data){
                        $("#vendedor1").html(data);
                         });      
                     });
                   }
           });
           $("#tienda2").change(function () {
                var td=$("#tienda2 option:selected").val();
                //alert(td);
                if (td!='0'){
                   $("#tienda2 option:selected").each(function () {
                    elegido=$(this).val();
                    $.post("ajax.php", { elegido: elegido }, function(data){
                    $("#vendedor2").html(data);
                    });            
                });
                }else{
                     $("#tienda2 option:selected").each(function () {
                        $.post("ajax.php", { elegido: 0 }, function(data){
                        $("#vendedor2").html(data);
                         });      
                     });
                   }
           });
           $("#tienda3").change(function () {
                   $("#tienda3 option:selected").each(function () {
                    elegido=$(this).val();
                    $.post("ajax.php", { elegido: elegido }, function(data){
                    $("#vendedor3").html(data);
                    });            
                });
           });
           
           $('.buscar').click(function(){
                //alert('Hola mundo');
                $.ajax({
                         async: true,
                         type: "POST",
                         dataType: "json",
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         url: "ajax.php",
                         data: {año1:$("#año1").val(),idtienda1:$("#tienda1").val(),vendedor1:$("#vendedor1").val()},
                         success: mostrarDatos,
                         timeout: 4000,
                         error: errorEnvio
                 });
    
            });
            $('.buscar2').click(function(){
                //alert('Hola mundo');
                $.ajax({
                         async: true,
                         type: "POST",
                         dataType: "json",
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         url: "ajax.php",
                         data: {año2:$("#año2").val(),idtienda2:$("#tienda2").val(),vendedor2:$("#vendedor2").val(),mes2:$("#mes2").val()},
                         success: mostrarDatos,
                         timeout: 4000,
                         error: errorEnvio
                 });
    
            });
            $('.buscar3').click(function(){
                //alert('Hola mundo');
                $.ajax({
                         async: true,
                         type: "POST",
                         dataType: "json",
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         url: "ajax.php",
                         data: {año3:$(".date").val(),idtienda3:$("#tienda3").val(),vendedor3:$("#vendedor3").val(),mes3:$("#mes3").val()},
                         success: mostrarDatos,
                         timeout: 4000,
                         error: errorEnvio
                 });
    
            });
        
        
        
           
        });
        
            function errorEnvio() {
            alert('Seleccione la tienda y vendedor para ejecutar la busqueda');
                 }
            
           function mostrarDatos(datos)
                {
                    $("#table").height(500)
                    $("#table").html(datos.tablita );
                    
                }
            function Enviarexcel(){
                var año1 = document.getElementById('año1').value;
                var idtienda1 = document.getElementById('tienda1').value;
                var vendedor1 = document.getElementById('vendedor1').value;
                location.href="excel.php?año1="+año1+"&idtienda1="+idtienda1+"&vendedor1="+vendedor1;  
            }
            function Enviarexcel2(){
                var año2 = document.getElementById('año2').value;
                var mes2 = document.getElementById('mes2').value;
                var idtienda2 = document.getElementById('tienda2').value;
                var vendedor2 = document.getElementById('vendedor2').value;
                location.href="excel.php?año2="+año2+"&mes2="+mes2+"&idtienda2="+idtienda2+"&vendedor2="+vendedor2;  
            }
            function Enviarexcel2(){
                var anoseb = $(".date").val();
                
                var idtienda3 = document.getElementById('tienda3').value;
                var vendedor3 = document.getElementById('vendedor3').value;
                location.href="excel.php?ano3="+anoseb+"&idtienda3="+idtienda3+"&vendedor3="+vendedor3;   
            }
        </script>

    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="reportes">
            <div class="con-reportes">
                <div class="contenedor-info nav-header">
                    <h2>Reporte Tienda</h2>
                    <form action="" method="POST" id="part1">
                        
                        <table>
                            <tr>
                                <td><center>Año</center></td>
                                <td><center>Tienda</center></td>
                                <td><center>Vendedor</center></td>
                            </tr>
                                
                                <td><select name="año" id="año1" style=" width:155px">
                            <option value="0">- Seleccione -</option>
                             <option value="2013">2013</option>   
			</select></td>
                                <td><select name="id_tienda" id="tienda1" style="float: left; width:155px">
                            <option value="">- Seleccione -</option>
                            <option value="0">All</option>
                                <?php 
                                $result = $objecta->GetTiendas();
                                for ($i = 0; $i < count($result); $i++) {
                                   
                                ?>
                                <option value="<?php echo $result[$i]['id_Tienda'] ?>"><?php echo $result[$i]['nombre_Tienda'] ?></option>
                                <?php 
                                }
                                ?>
                        </select></td>
                                <td>
                            <select name="vendedor" id="vendedor1" style=" width:155px">
                            <option value="">- Seleccione -</option>
                            <option value="0">All</option>
                        </select>
                                </td>
                                
                                <td><input type="button" class="btn-primary buscar" value="Buscar"/></td>
                                <td><input type="hidden" name="part1" value="si"/></td>
                        </table>
                        
                    </form>
                    
                    <form action="" method="POST" id="part2" >
                        <table border ="0">
                            
                            <tr>
                                <td><center>Año</center></td>
                                <td><center>Mes</center></td>
                                <td><center>Tienda</center></td>
                                <td><center>Vendedor</center></td>
                            </tr>
                            
                            <td> <select name="año" id="año2" style=" width: 155px">
                            <option value="0">- Seleccione -</option>
                             <option value="2013">2013</option>
							</select></td>
                            <td><select name="mes" id="mes2" style=" width: 155px">
                            <option value="0">- Seleccione -</option>
                               <option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
                            
                            </select></td>
                            <td><select name="id_tienda" id="tienda2" style="float: left; width: 155px">
                            <option value="">- Seleccione -</option>
                            <option value="0">All</option>
                                <?php 
                                $result = $objecta->GetTiendas();
                                for ($i = 0; $i < count($result); $i++) {
                                   
                                ?>
                                <option value="<?php echo $result[$i]['id_Tienda'] ?>"><?php echo $result[$i]['nombre_Tienda'] ?></option>
                                <?php 
                                }
                                ?>
                        </select></td>
                        
                        <td>
                            <select name="vendedor" id="vendedor2" style="">
                            <option value="">- Seleccione -</option>
                             <option value="0">All</option>
                        </select>
                        </td>
                        
                        <td><input type="button" class="btn-primary buscar2" style="float: left;" value="Buscar"/>
                        <input type="hidden" name="part2" value="si"/></td>
                        </table>
    
                    </form>

                    
                    <form action="" method="POST" id="part3" style="float: left;">
                        <table>
                            <tr>
                                <td><center>Dia</center></td>
                                <td><center>Tienda</center></td>
                                <td><center>Vendedor</center></td>
                            </tr>
                                
                                <td>
                                    <input type="text" class="date" id="date" style="float: left;width:155px;"  /></td>
                                <td>
                                    <select name="id_tienda" id="tienda3" style="width:155px">
                                        <option value="">- Seleccione -</option>
                                       <option value="0">All</option>
                                            <?php 
                                            $result = $objecta->GetTiendas();
                                            for ($i = 0; $i < count($result); $i++) {

                                            ?>
                                            <option value="<?php echo $result[$i]['id_Tienda'] ?>"><?php echo $result[$i]['nombre_Tienda'] ?></option>
                                            <?php 
                                            }
                                            ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="vendedor" id="vendedor3" style=" width:155px">
                                        <option value="">- Seleccione -</option>
                                       <option value="0">All</option>
                                   </select>
                                </td>
                        <td>
                            <input type="button" class="btn-primary buscar3" style="float: left;" value="Buscar"/>
                            <input type="hidden" name="part3" value="si" />
                        </td>
                        </table>
                    <div id="demo" style="float: left;width: 835px; ">
                        <div id='table' style=" overflow-x:hidden; overflow-y:auto;">
                        </div>
                    </div>
                   </form>
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
