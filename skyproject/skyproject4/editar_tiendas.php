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
        <link href="css/validationEngine.jquery.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script>
        function Delete(){
            if(confirm("¿Realmente desea eliminar la tienda?")){
                $("#form2").submit();
                
            }else{
                
                return false;
            }
        }
        
        
        function EditarRegistro(){
        $.ajax({
            url: "ajax.php",
            type: "POST",
            dataType: "json",
            data: { tienda_id: $("#tienda_id").val(),tienda_nombre: $("#nombre").val(),tienda_direccion: $("#direccion").val(),tienda_telefono: $("#telefono").val()},
            success: function( data ) {
              if (data.respuesta == "ok") {
                alert("La tienda ha sido editada correctamente");
                window.location.reload();
              }else if(data.respuesta == "empty"){
                  alert("Los campos estan vacios");
              }
              else{
                alert("La tienda no ha podido ser eliminada por tal cosa");
              }
            },
            error: function (jqXHR, textStatus, errorThrown){
              // Si se presento algun error, mostramos la descripcion
              alert( "Error\nAlgo ha salido mal. Por favor intÃ©ntalo de nuevo en unos minutos -> "+textStatus);
            }
              });

         return false;

    }
        
        </script>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="reportes ">

            <div class="con-reportes">
                <div class="contenedor-info">
                    <h2>Editar Tiendas</h2>
                    <div class="deploy">
                        <form action="" method="POST" id="form1" name="form1" style="float: left">

                            <div style="float: left;"><label>Tienda</label>
                                <select name="tienda">
                                    <option value="seleccione">-- Seleccione --</option>
                                    <?php
                                    $mResoult = $objecta->GetTiendas();
                                    for ($i = 0; $i < count($mResoult); $i++) {
                                        ?>
                                        <option value="<?php echo $mResoult[$i]['id_Tienda']; ?>"><?php echo $mResoult[$i]['nombre_Tienda']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div style="float: left;margin-left: 5px; "><input type="submit" value="Buscar" class="btn btn-small btn-primary " /></div>
                            <input type="hidden" name="grabar" value="si"/>
                        </form>
                        <?php
                        
                        if (isset($_POST['grabar']) && $_POST['grabar'] == "si") {
                            //print_r($_POST);
                           
                                if ($_POST['tienda'] != "seleccione"){
                                $objecta->GetTiendasId($_POST['tienda']);

                                $resul = $objecta->GetTiendasId($_POST['tienda']);
                                
                                }
                            }
                            ?>
                        </div>
                        <form action="" method="POST" id="form2" style="margin-top: 30px;">
                            <div class="deploy" > 
                                <label  >Nombre </label><input  type="text" id="nombre" name="nombre" value="<?php echo @$resul[0]['nombre_Tienda'] ?>"/>
                            </div>
                            <div class="deploy">
                                <label>Direccion </label><input type="text" id="direccion" name="direccion" value="<?php echo @$resul[0]['direccion_Tienda'] ?>"/>
                            </div>
                            <div class="deploy">
                                <label>Telefono </label><input type="text" id="telefono" name="telefono" value="<?php echo @$resul[0]['telefono_Tienda'] ?>"/>
                            </div>

                            <div class="deploy">
                                <input type="button" onclick="Delete();" value="Eliminar Tienda" class="btn btn-danger btn-primary " style="margin-left: 60px;margin-right: 10px;" /> <input type="button" onclick="EditarRegistro();"   value="Guardar" class="btn btn-success btn-primary editar " />
                                <input type="hidden" name="idtienda" id="tienda_id"  value="<?php echo @$resul[0]['id_Tienda'] ?>"/>
                            </div>
                            <?php
                                if (isset($_POST['idtienda'])) {
                                    //print_r($_POST);
                                    $objecta->SetDeleteTiendas($_POST['idtienda']);
                                    echo '<script>window.location.reload();</script>';
                                    }

                            ?>
                        </form>
                        
                </div>
            </div>
        </div>
    </body>
</html>
