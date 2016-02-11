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
        <style>
            #example_length{
                margin-left: 70px;
            }
            #example_filter{

            }
        </style>

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
                    <h1>Listar Tiendas</h1>
                    <hr>

                    <div id="demo">
                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Telefono</th>
                                    <th>Fecha Registro</th>

                                </tr>
                            </thead>
                            <tbody style="border:1px solid #ddd;">
                                <?php
                                $result = $objecta->GetTiendas();
                                for ($i = 0; $i < count($result); $i++) {
                                    ?>
                                    <tr class="odd gradeA">
                                        <td><?php echo $result[$i]['nombre_Tienda'] ?></td>
                                        <td><?php echo $result[$i]['direccion_Tienda'] ?></td>
                                        <td><?php echo $result[$i]['telefono_Tienda'] ?></td>
                                        <td class="center"><?php echo $result[$i]['fecha_Registro'] ?></td>

                                    </tr>
                                    <?php
                                }
                                ?>





                            </tbody>

                        </table>
                    </div>
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
