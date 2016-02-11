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


    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="reportes">
            <div class="con-reportes">
                <div class="contenedor-info nav-header">
                    <h2>Trafico Solicitudes</h2>
                    
                   <div id="demo" style="float: left;width: 835px;">
                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                            <thead>
                                <tr>
                                    <th>Estado</th>
                                    <th>Tienda</th>
                                    <th>Celular</th>
                                    <th>Nombre</th>
                                    <th>Plan</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Administrador</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>Pendiente</td>
                                    <td>Telenet E.U</td>
                                    <td>3138796501</td>
                                    <td>Oscar Caranton</td>
                                    <td>12</td>
                                    <td>21/02/2012 </td>
                                    <td>23:00:00</td>
                                    <td>Fernando B.</td>
                                </tr>
                                <tr class="odd gradeB">
                                    <td>Finalizado</td>
                                    <td>Telenet E.U</td>
                                    <td>3138796501</td>
                                    <td>Oscar Caranton</td>
                                    <td>12</td>
                                    <td>21/02/2012 </td>
                                    <td>23:00:00</td>
                                    <td>Fernando B.</td>
                                </tr>
                                <tr class="odd gradeA">
                                    <td>en proceso</td>
                                    <td>Telenet E.U</td>
                                    <td>3138796501</td>
                                    <td>Oscar Caranton</td>
                                    <td>12</td>
                                    <td>21/02/2012 </td>
                                    <td>23:00:00</td>
                                    <td>Fernando B.</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                   <th>Estado</th>
                                    <th>Tienda</th>
                                    <th>Celular</th>
                                    <th>Nombre</th>
                                    <th>Plan</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Administrador</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
            </div>
        </div>

    </body>
</html>
