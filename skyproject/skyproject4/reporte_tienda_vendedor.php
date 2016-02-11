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
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function(){    
        $('.filtro1').click(function(){
                //alert('Hola mundo');
                $.ajax({
                         async: true,
                         type: "POST",
                         dataType: "json",
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         url: "ajax_1.php",
                         data: {año1:$("#año1").val()},
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
                         url: "ajax_1.php",
                         data: {año2:$("#año2").val(),mes2:$("#mes2").val()},
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
                         url: "ajax_1.php",
                         data: {fecha3:$("#fecha3").val()},
                         success: mostrarDatos,
                         timeout: 4000,
                         error: errorEnvio
                 });
    
            });      
        });  
        
        function errorEnvio() {
            alert('Seleccione la fecha ejecutar la busqueda');
                 }
            
           function mostrarDatos(datos)
                {
                    $("#table").html(datos.tablita);
                    
                }
            function Enviarexcel2(){
                var añocliente = document.getElementById('año1').value;
                
                location.href="excel.php?anocliente="+añocliente;  
            } 
            function Enviarexcel3(){
                var añocliente2 = document.getElementById('año2').value;
                var mes2 = document.getElementById('mes2').value;
                location.href="excel.php?anocliente="+añocliente2+"&mes2="+mes2;  
            } 
            function Enviarexcel4(){
                var fecha3 = document.getElementById('fecha3').value;
                
                location.href="excel.php?fechacliente="+fecha3;  
            } 
        </script>

    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="reportes">
            <div class="con-reportes">
                <div class="contenedor-info nav-header">
                    <h2>Reportes</h2>
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

                        
                        
                        <input type="button" class="btn-primary filtro1" value="Buscar"/>
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

                        <select name="mes2" id="mes2" style="float: left;margin-right: 5px;">
                            <option value="seleccione">-- Seleccione mes --</option>
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

                        <input type="button" class="btn-primary filtro2" style="float: left;" value="Buscar"/>
                    </form>

                    <hr style="float: left">
                    <form action="" method="POST" id="part3" style="float: left;">
                        <label style="float: left;margin-right: -45px;">Dia</label>

                        <input type="date" name="dia" id="fecha3" style="float: left;width: 120px"/>
                       
                        <input type="button" class="btn-primary filtro3" style="float: left;" value="Buscar"/>

                    </form>
                    
                    <div id="demo" style="float: left;width: 835px;">
                        <div id='table'></div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
