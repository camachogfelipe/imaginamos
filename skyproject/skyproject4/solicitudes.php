<?php require_once 'core/validation.php';
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


    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="reportes">
            <div class="con-reportes">
                <div class="contenedor-info nav-header">
                    <h2>Solicitudes</h2>
                    
                   <div id="demo" style="float: left;width: 835px;overflow: auto; max-height: 150px;">
                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
                            <thead >
                                <tr>
                                    <th>Estado</th>
                                    
                                    <th>Nombre Cliente</th>
                                    <th>Celular</th>
                                    <th>Plan</th>
                                    <th>Fecha y Hora</th>
                                    
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                
                                $mResoult = $objecta->EstadoventaAdmin();
                                for ($i = 0, $fin = count($mResoult); $i < $fin; $i++) {
                                ?>
                                <tr class="odd gradeX">
                                    <td>Pendiente</td>
                                    
                                    <td><?php echo $mResoult[$i]['nombre_Cliente']?></td>
                                    <td><?php echo $mResoult[$i]['celular_Cliente']?></td>
                                    <td><?php echo $mResoult[$i]['nombre_Plan']?></td>
                                    <td><?php echo $mResoult[$i]['fecha_Venta']?></td>
                                    
                                    <td><input type="button" class="btn-small btn-primary" data-toggle="modal" href="#cont-<?php echo $mResoult[$i]['id_Venta'];?>" value='Tomar pedido'></td>
                                    
                                </tr>
                               <?php 
                                }
                               ?> 
                            </tbody>
                            
                        </table>
                    </div>
                  
            </div>
        </div>

    </body>
</html>











 <?php
                                
                                $mResoult = $objecta->EstadoventaAdmin();
                                for ($i = 0, $fin = count($mResoult); $i < $fin; $i++) {
                                ?>

<div id="cont-<?php echo $mResoult[$i]['id_Venta'];?>" class="modal hide fade in" style="display: none;">
    <div class="modal-header" >
        <a class="close" data-dismiss="modal">x</a>
        <h3>Solicitud</h3>
    </div>
    <div class="modal-body">
        <form action="" method="POST" form="form1">
        <div style="float: left;margin-left: 100px;margin-top: 20px;width: 350px;height: 250px;border: 1px solid #888;">
                        <label style='float: left;margin-left: 30px;margin-top: 30px;'><strong>Tienda:</strong></label><label style='float: left;margin-left: 30px;margin-top: 30px'>Tienda las margaritas</label>
                        <label style='float: left;margin-left: 30px;margin-top: 5px;'><strong>Celular:</strong></label><label style='float: left;margin-left: 30px;margin-top: 5px;'><?php echo $mResoult[$i]['celular_Cliente']?></label>
                        <label style='float: left;margin-left: 30px;margin-top: 5px;'><strong>Plan:</strong></label><label style='float: left;margin-left: 30px;margin-top: 5px;'><?php echo $mResoult[$i]['nombre_Plan']?></label>
                        <label style='float: left;margin-left: 30px;margin-top: 5px;'><strong>Inserte Codigo:</strong></label><input type="text" name="codigo" style='float: left;margin-left: 30px;margin-top: 5px;width: 120px;'/>
                        <input type="submit" value='Enviar' style='float: left;margin-left: 30px;margin-top: 5px;' class='btn-small btn-primary'/>
                        <input type="button" value='Cancelar' style='float: left;margin-left: 5px;margin-top: 5px;' class='btn-small btn-primary'/>
                        <input type="hidden" name="admin" value="<?php echo $_SESSION["session_tienda"]; ?>" />
                        <input type="hidden" name="celular" value="<?php echo $mResoult[$i]['celular_Cliente'];?>" />
                        <input type="hidden" name="plan" value="<?php echo $mResoult[$i]['id_Plan'];?>" />
                        <input type="hidden" name="cliente" value="<?php echo $mResoult[$i]['id_Cliente'];?>" />
                        <input type="hidden" name="idventa" value="<?php echo $mResoult[$i]['id_Venta'];?>" />
                        <input type="hidden" name="vendedor" value="<?php echo $mResoult[$i]['id_Usuario'];?>" />
                        <?php 
                        if(isset($_POST['admin'])){
                        $objecta->SetVentaAdmin($_POST['admin'], $_POST['cliente'], $_POST['idventa'], $_POST['celular'], $_POST['plan'], $_POST['codigo'],$_POST['vendedor']);
                        }
                        ?>
        </div>
            <?php 
              //print_r($_POST);
            ?>
        </form>
    </div>

</div>

<?php 
                                }
?>