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
           $("#tienda").change(function () {
                   $("#tienda option:selected").each(function () {
                    elegido3=$(this).val();
                    $.post("ajax.php", { elegido3: elegido3 }, function(data){
                    $("#vendedor").html(data);
                    });            
                });
           });
           $("#vendedor").change(function () {
                   $("#vendedor option:selected").each(function () {
                    elegido4=$(this).val();
                    $.post("ajax.php", { elegido4: elegido4 }, function(data){
                    $("#respuesta").text(data);
                    });            
                });
           });
        })
        </script>

    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="reportes">
            <div class="con-reportes">
                <div class="contenedor-info nav-header">
                    <form action="" method="POST" id="part1">
                        <h2>Asignar Creditos</h2>
                    <div style="float: left;width: 414px;text-align: center">
                    
                    
                        <label style="float: left;">Tienda</label>
                        <select name="tienda" id="tienda" style="float: left;margin-right: 5px;">
                            
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

                        <select name="vendedor" id="vendedor" style="float: left;margin-left: 110px">
                            
                        </select>
                        <label style="float: left;margin-left: 10px;width: 190px;">Numero Creditos</label>
                        <select name="creditos" id="cash" style="float: left;margin-left: 115px;width: 100px;">
                            <option value="10">10</option>
                            <option value="50">50</option>
                            <option value="200">200</option>
                            
                        </select>
                        
                    
                    </div>
                    <div style="float: right;width: 410px;height: 200px;text-align: center;">
                        <label style="float: left;margin-right: -45px;width: 100%;margin-top: 20px;"><b>Creditos Actuales</b></label>
                        <div id="respuesta" style="float: left;margin-right: -45px;width: 100%;font-size: 70px;margin-top: 20px;">
                            000
                        </div>
                        
                    </div>
                        <input type="button" class="btn-primary guardar" style="float: left;margin-left: 110px;width: 90px;height: 30px;margin-top: 20px;" value="Guardar"/>
                  </form>
            </div>
        </div>

    </body>
</html>
