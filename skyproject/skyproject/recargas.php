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
        <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.footer-ahorranito').ahorranito({theme:'oscuro', type:3});
        });
        </script>
        <script>
            $(document).ready(function(){
            
                $('.guardar').click(function(){
                    //alert('Hola mundo');
                    var credito = $("#cash").val();
                
                    if(confirm("¿Desea asignar "+credito+" creditos?")){
                    
                        $.ajax({
                            url: "ajax.php",
                            type: "POST",
                            dataType: "json",
                            data: { sebas2: $("#vendedor").val(),cash: $("#cash").val()},
                            success: function( data ) {
                                if (data.respuesta == "ok") {
                                    alert("Creditos cargados correctamente");
                                    window.location.reload();
                                }else if(data.respuesta == "empty"){
                                    alert("Los campos estan vacios");
                                }else{
                                    alert("No se pudo asignar creditos");
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown){
                                // Si se presento algun error, mostramos la descripcion
                                alert( "Error\algo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
                            }
                        });

                        return false;
               
                    }else{
                        return false;
                    }
                }); 
                $('.consultar').click(function(){   
                   // alert('hola');
                    elegidoTi=$('#email').val();
                    $.post("ajax.php", { elegidoTi: elegidoTi }, function(data){
                        $("#datosVendedor").html(data);
                        //alert($("#vendedor").val());
                         elegido4=$("#vendedor").val();
                        $.post("ajax.php", { elegido4: elegido4 }, function(data){
                               $("#respuesta").text(data);
                        }); 

                    });
                   
                });

                $("#tienda").change(function () {
                    $("#tienda option:selected").each(function () {
                        elegido3=$(this).val();
                        $.post("ajax.php", { elegido3: elegido3 }, function(data){
                            $("#vendedor").html(data);
                        });            
                    });
                });
                $("#vendedor1").change(function () {
                    $("#vendedor1 option:selected").each(function () {
                       // alert('ok')
                        elegidoTi1=$('#vendedor1').val();
                        $.post("ajax.php", { elegidoTi1: elegidoTi1 }, function(data){
                        $("#datosVendedor").html(data);
                        //alert($("#vendedor").val());
                         elegido41=$("#vendedor1").val();
                        $.post("ajax.php", { elegido41: elegido41 }, function(data){
                               $("#respuesta").text(data);
                        }); 

                    });            
                    });
                });
           
                $("#email")
            })
        </script>

    </head>
    <body>
        <?php include 'header.php'; ?>
        <form action="" method="POST" id="part1">
            <div class="con-reportes">
                <div class="contenedor-info nav-header">
                    
                        <h2>Asignar Creditos</h2>
                        <div>
                            <table border="0"> 
                                <tr>
                                  <td>
                                         <table border="0" width="250px">
                                             <tr>
                                                 <td>Email del vendedor</td>
                                                 <td>
                                                    <input type="text" id="email" name="email" style="width:140px; float:right;" /> 
                                                     <input type="button" class="btn-primary consultar" value="Consultar" style="float:right;" />
                                                 </td>
                                             </tr>
                                         </table>
                                  </td>
                                  <td rowspan="5">
                                        <div style="float: right;width:588px;height:auto;text-align: center; ">
                                            <label style="float: left;margin-right: -45px;width: 100%;margin-top: -40px;"><b>Ultimos creditos asignados</b></label>
                                            <div id="demo">
                                                <table cellpadding="0" cellspacing="0" border="1" class="display" id="example" width="70%" style="margin:0 auto 0 12px;">
                                                    <thead>
                                                        <tr>
                                                            <th>Administrador</th>
                                                            <th>Tienda</th>
                                                            <th>Vendedor</th>
                                                            <th>Creditos</th>
                                                            <th>Fecha y Hora</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $mResoult = $objecta->GetCredito2();
                                                        for ($i = 0, $fin = count($mResoult); $i < $fin; $i++) {
                                                            ?>
                                                            <tr class="odd gradeB">
                                                                <?php
                                                                $mResoult2 = $objecta->GetAdminId($mResoult[$i]['id_Admin']);
                                                                ?>
                                                                <td><?php echo $mResoult2[0]['nombre_Usuario'] ?></td>

                                                                <td><?php echo $mResoult[$i]['nombre_Tienda'] ?></td>
                                                                <td><?php echo $mResoult[$i]['nombre_Usuario'] ?></td>
                                                                <td><?php echo $mResoult[$i]['cantidad_Creditosc'] ?></td>

                                                                <td><?php echo $mResoult[$i]['fecha_Credito'] ?></td>

                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                    </tbody>

                                                </table>
                                            </div>

                                        </div>
                                  </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border="0" width="250px">
                                             <tr>
                                                 <td>
                                                     Nombre del vendedor
                                                 </td>
                                                 <td>
                                                    <select name="vendedor1" id="vendedor1" style="width:154px">
                                                        <option value="seleccione">-- Seleccione vendedor --</option>
                                                        <?php
                                                           $result = $objecta->GetVendedor('*');
                                                            for ($i = 0; $i < count($result); $i++) {
                                                        ?>
                                                                <option value="<?php  echo $result[$i]['id_Usuario']?>"><?php  echo $result[$i]['nombre_Usuario']?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select> 
                                                 </td>
                                             </tr>
                                         </table>
                                    </td>
                                </tr>
                                 <tr>
                                 	<td>
                                            <div id="datosVendedor">
                                            </div>
                                            <table width="250px">
                                            <tr>
                                                <td>
                                                   Creditos Actuales
                                                </td>
                                                <td>
                                                   <div id="respuesta" style="font-size: 40px; margin-top: 15px; width:150px;">
                                                       000
                                                   </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="250px">
                                            <tr>
                                                <td>
                                                    Numero Creditos
                                                </td>
                                                <td>
                                                   <select name="creditos" id="cash" style="width:154px">
                                                        <option value="36">$36.00</option>
                                                        <option value="72">$72.00</option>
                                                        <option value="150">$150.00</option>
                                                        <option value="360">$360.00</option>
                                                        <option value="720">$720.00</option>
                                                  </select> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="button" class="btn-primary guardar" style="float: right;width: 90px;height: 30px;margin-top: 20px;" value="Guardar"/>
                                    </td>
                                </tr>
                                </table>
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
                    </form>
                
           
    </body>
</html>
