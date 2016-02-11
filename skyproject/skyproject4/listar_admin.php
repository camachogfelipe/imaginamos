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
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                $('#example').dataTable();
            });
        </script>

    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="reportes">


            <div class="con-reportes">
                <div class="contenedor-info">
                    <h1>Listar Administrador</h1>
                    <hr>
                    <div id="demo">
                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Codigo Administrador</th>
                                    <th>Fecha y Hora Registro</th>
                                    <th>Acción</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $mResoult = $objecta->GetAdmin();
                                for ($i = 0; $i < count($mResoult); $i++) {
                                    ?>
                                    <tr class="odd gradeA">
                                        <td ><?php echo $mResoult[$i]['nombre_Usuario'] ?></td>
                                        <td style="text-align: center;">0000<?php echo $mResoult[$i]['id_Usuario'] ?></td>
                                        <td style="text-align: center;"><?php echo $mResoult[$i]['fecha_Registro'] ?></td>
                                        <td class="center"> <a style="float: left;" data-toggle="modal" href="#cont-<?php echo $mResoult[$i]['id_Usuario'] ?>" class="btn btn-primary btn-small" >Ver Detalle</a></td>

                                    </tr>
                                <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<!-- Modal de Administradores al detalle -->


<?php

for ($j = 0; $j < count($mResoult); $j++) {
    
    ?>
    <div id="cont-<?php echo $mResoult[$j]['id_Usuario'] ?>" class="modal hide fade in" style="display: none;width: 800px;margin-left: -400px;">
        <div class="modal-header" >
            <a class="close" data-dismiss="modal">x</a>
            <h4>Detalle Venta : <?php echo $mResoult[$j]['nombre_Usuario'] ?> , Codigo Administrador : 0000<?php echo $mResoult[$j]['id_Usuario'] ?></h4>
        </div>
        <div class="modal-body">
            <div id="demo">
                <?php $mResoult2 = $objecta->GetVentas($mResoult[$j]['id_Usuario'] ); ?>
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                    <thead>
                        <tr>
                            <th>Tienda</th>
                            <th>Vendedor</th>
                            <th>Celular</th>
                            <th>Plan</th>
                            <th>Codigo</th>
                            <th>Fecha Registro</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($p = 0; $p < count($mResoult2); $p++) {?>
                        <tr class="odd gradeA">
                            <td ><?php echo $mResoult2[$p]['nombre_Tienda'] ?></td>
                            <td style="text-align: center;"><?php echo $mResoult2[$p]['nombre_Usuario'] ?></td>
                            <td style="text-align: center;"><?php echo $mResoult2[$p]['celular_Usuario'] ?></td>
                            <td style="text-align: center;"><?php echo $mResoult2[$p]['nombre_Plan'] ?></td>
                            <td style="text-align: center;"><?php echo $mResoult2[$p]['codigo_Venta'] ?></td>
                            <td style="text-align: center;"><?php echo $mResoult2[$p]['fecha_Venta'] ?></td>

                        </tr>
                        <?php }?>
                </table>
            </div>
        </div>

    </div>
    <?php
}
?>