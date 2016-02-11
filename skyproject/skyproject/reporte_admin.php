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
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/data.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#dia").datepicker({
                    changeMonth: true,
                    changeYear: true
                });


                $("#tienda3").change(function() {
                    $("#tienda3 option:selected").each(function() {
                        e = $(this).val();
                        $.post("ajax.php", {adminelegido: e}, function(data) {
                            $("#admin3").html(data);
                        });
                    });
                });


                $('.filtro1').click(function() {
                    //alert('Hola mundo');
                    $.ajax({
                        async: true,
                        type: "POST",
                        dataType: "json",
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        url: "ajax.php",
                        data: {añoseb: $("#año1").val(), admin1: $("#admin1").val()},
                        success: mostrarDatos,
                        timeout: 4000,
                        error: errorEnvio
                    });

                });
                $('.filtro2').click(function() {
                    //alert('Hola mundo');
                    $.ajax({
                        async: true,
                        type: "POST",
                        dataType: "json",
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        url: "ajax.php",
                        data: {ano2: $("#año2").val(), mes2: $("#mes2").val(), admin2: $("#admin2").val()},
                        success: mostrarDatos,
                        timeout: 4000,
                        error: errorEnvio
                    });

                });
                $('.filtro3').click(function() {
                    //alert('Hola mundo');
                    $.ajax({
                        async: true,
                        type: "POST",
                        dataType: "json",
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        url: "ajax.php",
                        data: {dia: $("#dia").val(), tiendaadmin: $("#tienda3").val(), admin3: $("#admin3").val()},
                        success: mostrarDatos,
                        timeout: 4000,
                        error: errorEnvio
                    });

                });

            });

            function errorEnvio() {
                alert('Seleccione administrador para ejecutar la busqueda');
            }

            function mostrarDatos(datos)
            {
                $("#table").height(500)
                $("#table").html(datos.tablita);

            }
            function Enviarexcel2() {
                var año1 = document.getElementById('año1').value;
                var admin1 = document.getElementById('admin1').value;
                location.href = "excel.php?ano1=" + año1 + "&admin1=" + admin1;
            }

            function Enviarexcel3() {
                var ano2 = document.getElementById('año2').value;
                var admin2 = document.getElementById('admin2').value;
                var mes2 = document.getElementById('mes2').value;
                location.href = "excel.php?ano2=" + ano2 + "&admin2=" + admin2 + "&mes2=" + mes2;
            }
            function Enviarexcel4() {
                var dia = document.getElementById('dia').value;
                var tiendaadmin = document.getElementById('tienda3').value;
                var admin3 = document.getElementById('admin3').value;
                location.href = "excel.php?dia=" + dia + "&tiendaadmin=" + tiendaadmin + "&admin3=" + admin3;
            }

        </script>

    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="reportes">
            <div class="con-reportes">
                <div class="contenedor-info nav-header">
                    <h2>Reporte Administradores</h2>
                    <form action="" method="POST" id="part1">

                        <table>
                            <tr>
                                <td><center>Año</center></td>
                            <td><center>Administrador</center></td>

                            </tr>

                            <td>
                                <select name="año" id="año1" style="float: left;margin-right: 5px;">
                                    <option value="seleccione">- Seleccione -</option>
                                    <?php
                                    $mResoult = $objecta->GetTiendasFechas();
                                    for ($a = 0; $a < count($mResoult); $a++) {
                                        $fecha = $mResoult[$a]['fecha_Registro'];
                                        list($año, $mes, $dia) = explode("-", $fecha)
                                        ?>
                                        <option value="<?php echo $año ?>"><?php echo $año ?></option>
                                        <?php
                                    }
                                    ?>

                                </select>
                            </td>

                            <td>
                                <select name="admin" id="admin1" style="float: left;margin-right: 5px;">
                                    <option value="seleccione">- Seleccione -</option>
                                    <option value="0">All</option>
                                    <?php
                                    $mResoult = $objecta->GetAdmin();
                                    for ($i = 0; $i < count($mResoult); $i++) {
                                        ?>
                                        <option value="<?php echo $mResoult[$i]['id_Usuario'] ?>"><?php echo $mResoult[$i]['nombre_Usuario'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </td>

                            <td><input type="button" class="btn-primary filtro1" value="Buscar"/></td>
                            <td></td>
                        </table>

                    </form>

                    <form action="" method="POST" id="part2" style="float: left">

                        <table>

                            <tr>
                                <td><center>Año</center></td>
                            <td><center>Mes</center></td>
                            <td><center>Administrador</center></td>
                            </tr>

                            <td>
                                <select name="año2" id="año2" style="float: left;margin-right: 5px;">
                                    <option value="seleccione">- Seleccione -</option>
                                    <option value="2013">2013</option>
                                </select>
                            </td>

                            <td> 
                                <select name="mes2" id="mes2" style="float: left;margin-right: 5px;">
                                    <option value="seleccione">- Seleccione -</option>
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
                                </select>
                            </td>

                            <td>
                                <select name="admin2" id="admin2" style="float: left;margin-right:5px;">
                                    <option value="seleccione">- Seleccione -</option>
                                    <option value="0">All</option>
                                    <?php
                                    $mResoult = $objecta->GetAdmin();
                                    for ($i = 0; $i < count($mResoult); $i++) {
                                        ?>
                                        <option value="<?php echo $mResoult[$i]['id_Usuario'] ?>"><?php echo $mResoult[$i]['nombre_Usuario'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </td>

                            <td><input type="button" class="btn-primary filtro2" style="float: left;" value="Buscar"/></td>

                        </table>

                    </form>

                    <form action="" method="POST" id="part3" style="float: left;">

                        <table>

                            <tr>

                            <td><center>Fecha</center></td>
                            <td><center>Tienda</center></td>
                            <td><center>Administrador</center></td>

                            </tr>

                            <td><input type="text" id="dia" name="dia" style="float: left;width: 120px"/></td>
                            <td> <select name="tienda1" id="tienda3" style="float: left;margin-right: 5px;">
                                    <option value="seleccione">- Seleccione -</option>
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
                            <td><select name="admin3" id="admin3" style="float: left;margin-right: 5px;">
                                    <option value="seleccione">- Seleccione -</option>
                                    <option value="0">All</option>

                                </select></td>

                            <td><input type="button" class="btn-primary filtro3" style="float: left;" value="Buscar"/></td>
                        </table>

                    </form>

                    <div id="demo" style="float: left;width: 835px;">
                        <div id='table' style=" overflow-x:hidden; overflow-y:auto;"></div>
                    </div>
                </div>
            </div>

    </body>
</html>
