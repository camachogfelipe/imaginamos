<?php
require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$invoK = new Procesos();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/skyproject.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.footer-ahorranito').ahorranito({theme:'oscuro', type:3});
        });
        </script>
        <script>
            function Delete(){
           if(confirm("¿Realmente desea eliminar el administrador?")){
               $.ajax({
            url: "ajax.php",
            type: "POST",
            dataType: "json",
            data: { usuario_idD: $("#idadminD").val()},
            success: function( data ) {
              if (data.respuesta == "ok") {
                alert("El administrador ha sido eliminado");
                //window.location.reload();
              }else if(data.respuesta == "empty"){
                  alert("Los campos estan vacios");
              }
              else{
                alert("El administrador no ha podido ser editado");
              }
            },
            error: function (jqXHR, textStatus, errorThrown){
              // Si se presento algun error, mostramos la descripcion
                        alert("Error\n Algo ha salido mal. Por favor intentalo de nuevo en unos minutos -> " + textStatus);
                    }
                });

                return false;
                }else{
                    return false;
                }
        }
        function EditarUser(){
        $.ajax({
            url: "ajax.php",
            type: "POST",
            dataType: "json",
            data: { usuario_id: $("#idadmin").val(),usuario_email: $("#email").val(),usuario_celular: $("#celular").val()},
            success: function( data ) {
              if (data.respuesta == "ok") {
                alert("El usuario ha sido editado correctamente");
                //window.location.reload();
              }else if(data.respuesta == "empty"){
                  alert("Los campos estan vacios");
              }else if (data.respuesta == "email"){
                alert("El E-mail ya existe");
              }
              else{
                alert("El usuario no ha podido ser editado");
              }
            },
            error: function (jqXHR, textStatus, errorThrown){
              // Si se presento algun error, mostramos la descripcion
                        alert("Error\nAlgo ha salido mal. Por favor intentalo de nuevo en unos minutos -> " + textStatus);
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


                    <h2>Editar Administrador</h2>
                    <div class="deploy">
                        <form action="" method="POST" id="form1">
                            <div style="float: left;margin-right: 5px;"><label>Administradores</label>
                                <select name="admin">
                                    <option value="seleccione">-- Seleccione --</option>
                                    <?php 
                                     $mResoult = $invoK->GetAdmin();
                                    for ($i = 0; $i < count($mResoult); $i++) {
                                    ?>
                                    <option value="<?php echo $mResoult[$i]['id_Usuario']; ?>"><?php echo $mResoult[$i]['nombre_Usuario']; ?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div style="float: left"><input type="submit" value="Buscar" class="btn btn-small btn-primary " /></div>
                            <input type="hidden" name="buscar" value="si"/>
                            
                        </form>
                        <?php 
                        if(isset($_POST['buscar']) && $_POST['buscar'] == 'si'){
                            //print_r($_POST);
                            if(isset($_POST['admin']) &&  $_POST['admin'] != 'seleccione'){
                                $mResoultA = $invoK->GetAdminId($_POST['admin']);
                            }
                        }
                        ?>
                    </div>
                    <form action="" method="POST" id="form2" style="margin-top: 80px;">
                        <div class="deploy" > 
                            <label  >Login </label><div><?php echo @$mResoultA[0]['login_Usuario']; ?></div>
                        </div>
                        <div class="deploy">
                            <label>E- mail </label><input type="text" name="email" id="email" value="<?php echo @$mResoultA[0]['email_Usuario']; ?>"/>
                        </div>
                        <div class="deploy">
                            <label>Celular </label><input type="text" name="celular" id="celular" value="<?php echo @$mResoultA[0]['celular_Usuario']; ?>"/>
                        </div>

                        <div class="deploy">
                            <input type="button" value="Eliminar" onclick="Delete();" class="btn btn-danger btn-primary" style="margin:0 2px 0 174px;"/> <input type="button" value="Editar" onclick="EditarUser();" class="btn btn-success btn-primary" />
                            <input type="hidden" id="idadmin" name="idadmin" value="<?php echo @$mResoultA[0]['id_Usuario']; ?>"/>
                            <input type="hidden" id="idadminD" name="idadminD" value="<?php echo @$mResoultA[0]['id_Usuario']; ?>"/>
                        </div>
                    </form>
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
