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
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script language="javascript">
        $(document).ready(function(){
           $("#tienda").change(function () {
                   $("#tienda option:selected").each(function () {
                    elegido=$(this).val();
                    $.post("ajax.php", { elegido: elegido }, function(data){
                    $("#vendedor").html(data);
                    });            
                });
           });
        

            $('.saved').click(function(){
                //alert('Hola mundo');
                $.ajax({
                         async: true,
                         type: "POST",
                         dataType: "json",
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         url: "ajax.php",
                         data: {idvendedor:$("#vendedor").val()},
                         //beforeSend: antesEnvio,
                         success: mostrarDatos,
                         timeout: 4000,
                         error: errorEnvio
                 });
    
            });
            $('.editar').click(function(){
                //alert('Hola mundo');
                $.ajax({
                url: "ajax.php",
                type: "POST",
                dataType: "json",
                data: { usuario_id: $("#vendedor").val(),usuario_email: $("#email").val(),usuario_celular: $("#celular").val()},
                success: function( data ) {
                  if (data.respuesta == "ok") {
                        alert("La tienda ha sido editada correctamente");
                        window.location.reload();
                  }else if(data.respuesta == "empty"){
                          alert("Los campos estan vacios");
                    }else{
                          alert("La tienda no ha podido ser eliminada por tal cosa");
                        }
                },
                error: function (jqXHR, textStatus, errorThrown){
                  // Si se presento algun error, mostramos la descripcion
                  alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
                }
              });

                return false;
               
    
           });
           $('.delete').click(function(){
                //alert('Hola mundo');
                if(confirm("¿Realmente desea eliminar el administrador?")){

                $.ajax({
                url: "ajax.php",
                type: "POST",
                dataType: "json",
                data: { usuario_idD: $("#vendedor").val()},
                success: function( data ) {
                  if (data.respuesta == "ok") {
                        alert("El usuario ha sido eliminado correctamente");
                        window.location.reload();
                  }else if(data.respuesta == "empty"){
                          alert("Los campos estan vacios");
                    }else{
                          alert("El usuario no ha podido ser eliminado");
                        }
                },
                error: function (jqXHR, textStatus, errorThrown){
                  // Si se presento algun error, mostramos la descripcion
                  alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
                }
              });

                return false;
               
                }else{
                     return false;
                }
           }); 
           
           
        });
        
            function errorEnvio() {
            alert('Seleccione la tienda y vendedor para ejecutar la busqueda');
                 }
            
           function mostrarDatos(datos)
                {
                    $("#email").attr("value", datos.email );
                    $("#celular").attr("value", datos.celular );
                    $("#login").text(datos.login);
                } 
        </script>
    </head>
    <body>
        <?php include 'header.php'; ?>

        
        <div class="reportes">

            <div class="con-reportes">
                <div class="contenedor-info">
                    <h2>Editar Vendedor</h2>
                    <div class="deploy" style="margin-left: 40px;">
                        <form action="" method="POST" id="form1" style="float: left">
                            <div style="float: left;">
                                <label style="margin-right: -20px; ">Tienda</label>
                                <select name="tienda" id="tienda" style="margin-right: 7px;">
                                    <option value="seleccione">-- Seleccione tienda --</option>
                                    <?php
                                    $mResoult = $objecta->GetTiendas();
                                    for ($i = 0; $i < count($mResoult); $i++) {
                                        ?>
                                        <option value="<?php echo $mResoult[$i]['id_Tienda']; ?>"><?php echo $mResoult[$i]['nombre_Tienda']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div style="float: left;margin-right: 5px; ">
                                <label style="margin-left: 5px;margin-right: -15px;">Vendedor</label>
                                <select name="vendedor" id="vendedor">
                                    
                                </select>
                            </div>
                            <div style="float: left; "><input type="button"  value="Buscar" class="btn btn-small btn-primary saved" /></div>
                        </form>

                    </div>
                    <form action="" method="POST" id="form2" style="float: left;margin-top: 10px;">
                        <div class="deploy" style="float: left;"> 
                            <label>Login</label><div style="width:500px; height: auto;" id="login"></div>
                        </div>
                        <div class="deploy">
                            <label>E- mail </label><input type="text" name="email" id="email"/>
                        </div>
                        <div class="deploy">
                            <label>Celular </label><input type="text" name="celular" id="celular"/>
                        </div>

                        <div class="deploy">
                            <input type="submit" value="Eliminar" class="btn btn-danger btn-primary delete"  /> <input type="button" id="editar"  value="Editar" class="btn btn-danger btn-primary editar" />
                        </div>
                    </form>
                    <div id="log"></div>
                </div>
            </div>
        </div>
    </body>
</html>
