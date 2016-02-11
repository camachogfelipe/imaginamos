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
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/skyproject.css" rel="stylesheet" type="text/css">
        <link href="css/demo_table.css" rel="stylesheet" type="text/css">
        <link href="css/demo_page.css" rel="stylesheet" type="text/css">
        <link href="css/datepicker.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/data.js"></script>
        <script>
        $(document).ready(function(){
           $("#tienda1").change(function () {
                   $("#tienda1 option:selected").each(function () {
                    elegido=$(this).val();
                    $.post("ajax.php", { elegido: elegido }, function(data){
                    $("#vendedor1").html(data);
                    });            
                });
           });
           $("#tienda2").change(function () {
                   $("#tienda2 option:selected").each(function () {
                    elegido=$(this).val();
                    $.post("ajax.php", { elegido: elegido }, function(data){
                    $("#vendedor2").html(data);
                    });            
                });
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
                        <label style="float: left;margin-right: -45px;">Año</label>
                        <select name="año" id="año1" style="float: left;margin-right: 5px;">
                            <option value="seleccione">-- Seleccione uno --</option>
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

                        <select name="id_tienda" id="tienda1" style="float: left">
                            <option value="seleccione">-- Seleccione tienda --</option>
                                <?php 
                                $result = $objecta->GetTiendas();
                                for ($i = 0; $i < count($result); $i++) {
                                   
                                ?>
                                <option value="<?php echo $result[$i]['id_Tienda'] ?>"><?php echo $result[$i]['nombre_Tienda'] ?></option>
                                <?php 
                                }
                                ?>
                        </select>
                        <select name="vendedor" id="vendedor1" style="float: left;margin-left: 5px;;margin-right: 5px;">
                            <option value="seleccione">-- Seleccione vendedor --</option>
                        </select>
                        <input type="button" class="btn-primary buscar" value="Buscar"/>
                        <input type="hidden" name="part1" value="si"/>
                    </form>
                    <hr>
                    <form action="" method="POST" id="part2" style="float: left">
                        <label style="float: left;margin-right: -45px;">Mes</label>
                        <select name="año" id="año2" style="float: left;margin-right: 5px;">
                            <option value="seleccione">-- Seleccione uno --</option>
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

                        <select name="mes" id="mes2" style="float: left;margin-right: 5px;">
                            <option value="seleccione">-- Seleccione uno --</option>
                               <?php 
                                $mResoult = $objecta->GetTiendasFechas();
                                for ($a = 0; $a < count($mResoult); $a++) {
                                $fecha = $mResoult[$a]['fecha_Registro'];
                                list($año, $mes, $dia) = explode("-", $fecha)
                                ?>
                                <option value="<?php echo $mes?>"><?php echo $mes?></option>
                                <?php 
                                }
                                ?>
                            
                            </select>

                        <select name="id_tienda" id="tienda2" style="float: left">
                            <option value="seleccione">-- Seleccione tienda --</option>
                                <?php 
                                $result = $objecta->GetTiendas();
                                for ($i = 0; $i < count($result); $i++) {
                                   
                                ?>
                                <option value="<?php echo $result[$i]['id_Tienda'] ?>"><?php echo $result[$i]['nombre_Tienda'] ?></option>
                                <?php 
                                }
                                ?>
                        </select>
                         <select name="vendedor" id="vendedor2" style="float: left;margin-left: 65px;;margin-right: 5px;">
                            <option value="seleccione">-- Seleccione vendedor --</option>
                        </select>
                        <input type="button" class="btn-primary buscar2" style="float: left;" value="Buscar"/>
                        <input type="hidden" name="part2" value="si"/>
                    </form>

                    <hr style="float: left">
                    <form action="" method="POST" id="part3" style="float: left;">
                        <label style="float: left;margin-right: -45px;">Dia</label>

                        <input type="date" class="date" style="float: left;width: 120px;" />
                        <select name="id_tienda" id="tienda3" style="float: left;margin-right: 5px;">
                           <option value="seleccione">-- Seleccione tienda --</option>
                                <?php 
                                $result = $objecta->GetTiendas();
                                for ($i = 0; $i < count($result); $i++) {
                                   
                                ?>
                                <option value="<?php echo $result[$i]['id_Tienda'] ?>"><?php echo $result[$i]['nombre_Tienda'] ?></option>
                                <?php 
                                }
                                ?>
                        </select>
                         <select name="vendedor" id="vendedor3" style="float: left;margin-right: 5px;">
                            <option value="seleccione">-- Seleccione vendedor --</option>
                        </select>
                        <input type="button" class="btn-primary buscar3" style="float: left;" value="Buscar"/>
                        <input type="hidden" name="part3" value="si" />

                    </form>
                    
                    
                    
                    <div id="demo" style="float: left;width: 835px;">
                        <div id='table'>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
