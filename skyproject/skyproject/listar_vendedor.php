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
                    <h1>Listar Vendedores</h1>

                    <form action="" method="POST" id="form1">

                        <table>

                            <tr>

                                <td><center>Tienda</center></td>

                            </tr>

                            <td> <select name="id_tienda" style="float: left">
                                    <?php
                                    $result = $objecta->GetTiendas();
                                    ?>
                                    <option value="">-Seleccione-</option>
                                    <option value="*">All</option>
                                    <?php
                                    for ($i = 0; $i < count($result); $i++) {
                                        ?>
                                        <option value="<?php echo $result[$i]['id_Tienda'] ?>"><?php echo $result[$i]['nombre_Tienda'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select></td>

                            <td> <input type="submit" value="Buscar" class="btn btn-small btn-primary " style="margin-left: 5px;" /></td>
                            <td><input type="hidden" name="grabar" value="si"/></td>
                        </table>

                    </form>

                    <div class="deploy" style="margin-left: 1px;">
                        <form action="" method="POST" id="form2">

                            <table>

                                <tr>

                                    <td><center>Año</center></td>
                                <td><center>Tienda</center></td>

                                </tr>

                                <td><select name="fecha" style="float: left">
                                        <option value="">-Seleccione-</option>
                                        <?php
                                        $mResoult = $objecta->GetTiendasFechas();
                                        for ($i = 0; $i < count($mResoult); $i++) {
                                            $fecha = $mResoult[$i]['fecha_Registro'];
                                            list($año, $mes, $dia) = explode("-", $fecha)
                                            ?>
                                            <option value="<?php echo $año ?>"><?php echo $año ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select></td>

                                <td><select name="id_tienda" style="float: left">
                                        <option value="">-Seleccione-</option>
                                        <?php
                                        $result = $objecta->GetTiendas();
                                        for ($i = 0; $i < count($result); $i++) {
                                            ?>
                                            <option value="<?php echo $result[$i]['id_Tienda'] ?>"><?php echo $result[$i]['nombre_Tienda'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select></td>

                                <td><input type="submit" value="Buscar" class="btn btn-small btn-primary " style="margin-left: 5px;" /></td>
                                <td> <input type="hidden" name='grab' value='no'/></td>

                            </table>

                        </form>
                    </div>

                    <table>


                        <form action="" method="POST" id="form3">

                            <tr>

                            <td><center>Año</center></td>
                            <td><center>Mes</center></td>
                            <td><center>Tienda</center></td>
                        
                            </tr>

                            <td><select name="fecha" style="float: left">
                                    <option value="">-Seleccione-</option>
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

                                </select>  </td>
                            <td><select name="fecha2" style="float: left">
                                    <option value="">-Seleccione-</option>
                                    <?php
                                    /* $mResoult = $objecta->GetTiendasFechas();
                                      for ($a = 0; $a < count($mResoult); $a++) {
                                      $fecha = $mResoult[$a]['fecha_Registro'];
                                      list($año, $mes, $dia) = explode("-", $fecha)
                                      ?>
                                      <option value="<?php echo $mes?>"><?php echo $mes?></option>
                                      <?php
                                      } */
                                    for ($a = 1; $a <= 12; $a++) {
                                        $mes = $a;
                                        if ($a < 10)
                                            $mes = '0' . $a;
                                        ?>
                                        <option value="<?php echo $mes ?>"><?php echo $mes ?></option>
                                        <?php
                                    }
                                    ?>

                                </select></td>

                            <td><select name="id_tienda" style="float: left">
                                    <option value="">-Seleccione-</option>
                                    <?php
                                    $result = $objecta->GetTiendas();
                                    for ($i = 0; $i < count($result); $i++) {
                                        ?>
                                        <option value="<?php echo $result[$i]['id_Tienda'] ?>"><?php echo $result[$i]['nombre_Tienda'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select></td>

                            <td><input type="submit" value="Buscar" class="btn btn-small btn-primary " style="margin-left: 5px;float: left;" /></td>
                            <td><input type='hidden' name='mes' value='si'/></td>
                    </table>

                    </form>


                    <?php
                    if (isset($_POST['grabar']) and $_POST['grabar'] == 'si') {
                        //print_r($_POST);
                        $result2 = $objecta->GetVendedor($_POST['id_tienda']);
                        ?>
                        <div id="demo" style="">
                            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                                <thead>
                                    <tr>
                                        <th>Tienda</th>
                                        <th>Nombre vendedor</th>
                                        <th>Codigo vendedor</th>
                                        <th>celular</th>
                                        <th>Fecha y Hora registro</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($l = 0; $l < count($result2); $l++) {
                                        ?>
                                        <tr class="odd gradeA" style='text-align: center'>
                                            <td><?php echo $result2[$l]['nombre_Tienda'] ?></td>
                                            <td><?php echo $result2[$l]['nombre_Usuario'] ?></td>
                                            <td>00000<?php echo $result2[$l]['id_Usuario'] ?></td>
                                            <td class="center"><?php echo $result2[$l]['celular_Usuario'] ?></td>
                                            <td><?php echo $result2[$l]['fecha_Registro'] ?></td>


                                        </tr>

                                        <?php
                                    }
                                }
                                ?>


                                <?php
                                if (isset($_POST['grab']) and $_POST['grab'] == 'no') {
                                    //print_r($_POST);
                                    $mResoult3 = $objecta->GetVendedorFechaTienda($_POST['id_tienda'], $_POST['fecha']);
                                    ?>
                                <div id="demo" style="">
                                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Tienda</th>
                                                <th>Nombre vendedor</th>
                                                <th>Codigo vendedor</th>
                                                <th>celular</th>
                                                <th>Fecha y Hora registro</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($l = 0; $l < count($mResoult3); $l++) {
                                                ?>
                                                <tr class="odd gradeA" style='text-align: center'>
                                                    <td><?php echo $mResoult3[$l]['nombre_Tienda'] ?></td>
                                                    <td><?php echo $mResoult3[$l]['nombre_Usuario'] ?></td>
                                                    <td>00000<?php echo $mResoult3[$l]['id_Usuario'] ?></td>
                                                    <td class="center"><?php echo $mResoult3[$l]['celular_Usuario'] ?></td>
                                                    <td><?php echo $mResoult3[$l]['fecha_Registro'] ?></td>


                                                </tr>

                                                <?php
                                            }
                                        }
                                        ?>
                                        <?php
                                        if (isset($_POST['mes']) and $_POST['mes'] == 'si') {
                                            //print_r($_POST);
                                            $mResoult3 = $objecta->GetVendedorFechaTiendaMes($_POST['id_tienda'], $_POST['fecha2'], $_POST['fecha']);
                                            ?>
                                        <div id="demo" style="">
                                            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Tienda</th>
                                                        <th>Nombre vendedor</th>
                                                        <th>Codigo vendedor</th>
                                                        <th>celular</th>
                                                        <th>Fecha y Hora registro</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    for ($l = 0; $l < count($mResoult3); $l++) {
                                                        ?>
                                                        <tr class="odd gradeA" style='text-align: center'>
                                                            <td><?php echo $mResoult3[$l]['nombre_Usuario'] ?></td>
                                                            <td><?php echo $mResoult3[$l]['nombre_Usuario'] ?></td>
                                                            <td>00000<?php echo $mResoult3[$l]['id_Usuario'] ?></td>
                                                            <td class="center"><?php echo $mResoult3[$l]['celular_Usuario'] ?></td>
                                                            <td><?php echo $mResoult3[$l]['fecha_Registro'] ?></td>


                                                        </tr>

                                                        <?php
                                                    }
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
